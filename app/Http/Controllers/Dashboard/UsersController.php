<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Validation\Rule;
use App\DataTables\UsersDataTable;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDataTable $dataTable){
        return $dataTable->render('dashboard.users.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('dashboard.users.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validateUsers($request);
        $imageAttr=[];
        if($request->file('image')){
            $imageAttr=uploadImage($request->file('image'));
        }
        $user=User::create(array_merge($request->only(['name','email']),['password'=>Hash::make($request->password)],$imageAttr));
        $user->syncRoles($request->input('role_id'));
        $user->syncPermissions($request->input('permissions'));
        alert()->success(__('Success'),__('Create Successfully'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('dashboard.users.create_edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $this->validateUsers($request);
        $array=[];
        if($request->password){
            $array['password']=Hash::make($request->password);
        }
        $imageAttr=[];
        if($request->file('image')){
            $imageAttr=uploadImage($request->file('image'));
        }
        $updateData=array_merge($request->only('name','email'),$array,$imageAttr);
        $user->update($updateData);
        $user->syncRoles($request->input('role_id'));
        $user->syncPermissions($request->input('permissions'));
        alert()->success(__('Success'),__('Update Successfully'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->deleted_by=auth()->id();
        $user->save();
        $user->delete();
        return response()->json(['success'=>true,'message'=>__('Delete Successful')]);
    }

    public function validateUsers($request){
        $valid=[
            'name'=>'required',
        ];
        if($request->user){

//            $valid['email']='required|email|unique:users,email,'.$request->user->id.',NULL,deleted_at,NULL';
            $valid['email']=['required','email',Rule::unique('users','email')->whereNull('deleted_at')->ignore($request->user->id,'id')];
        }else{
            $valid['password']='required|min:5';
            $valid['email']=['required','email',Rule::unique('users','email')->whereNull('deleted_at')];
        }
        return $request->validate($valid);
    }
    public function profile(){
        $user=auth()->user();
        return view('dashboard.users.profile',compact('user'));
    }
    public function profileUpdate(Request $request){
        $user=auth()->user();
        $request->validate([
            'name'=>'required',
            'email'=>['required','email',Rule::unique('users','email')->whereNull('deleted_at')->ignore($user->id,'id')],
            'old_password'=>'required',
            'new_password'=>'same:confirm_password'
        ]);
        if(!Hash::check($request->old_password,$user->password)){
            return redirect()->back()->withErrors(['old_password'=>__('Old password not matched')]);
        }
        $array=[];
        if($request->new_password){
            $array['password']=Hash::make($request->new_password);
        }
        $imageAttr=[];
        if($request->file('image')){
            $imageAttr=uploadImage($request->file('image'));
        }
        $user->update(array_merge($request->only('name','email'),$array,$imageAttr));
        alert()->success(__('Success'),__('Update Successfully'));
        return redirect()->back();
    }
    public function deleteMulti(Request $request){
        //dd(  $request->IDS  );
        $count=User::whereIn('id',$request->IDS)->update(['deleted_by'=>auth()->id(),'deleted_at'=>now()]);
       
        return response()->json(['success'=>true,'message'=>__('Delete :count Successful',['count'=>$count])]);
    }
    public function export(Request $request){
        switch ($request->export_type){
            case'csv':
                return Excel::download(new UsersExport,'users_'.time().'.csv',\Maatwebsite\Excel\Excel::CSV);
                break;
            case'excel':
                return Excel::download(new UsersExport,'users_'.time().'.xlsx',\Maatwebsite\Excel\Excel::XLSX);
                break;
            case'pdf':
                $users=User::query();
                if(request('IDS')){
                    $users=$users->whereIn('id',explode(',',request('IDS')));
                }
                $users=$users->get();
                return Pdf::loadView('dashboard.users.export_pdf',['users'=>$users])->download('users_'.time().'.pdf');
                break;
        }

    }
    public function rolesPermissions( Request $request)
    {
        $data = DB::table('role_has_permissions')
            ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
            ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
            ->select('permissions.id', 'permissions.name', 'permissions.group', 'roles.id as role_id', 'roles.name as role_name')
            ->whereIN('role_id', json_decode(   $request['array']))
            ->get();
    
        return response()->json([
            'data' => $data
        ]);
    }

}
