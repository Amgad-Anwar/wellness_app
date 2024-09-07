<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\AdvertisingDataTable;
use App\DataTables\AdvertisingsDataTable;
use App\DataTables\AmgadDataTable;
use App\DataTables\MedicineBasedUnitTypeDataTable;
use App\DataTables\ProviderServicesDataTable;
use App\DataTables\SubscriptionTransactionsDataTable;
use App\Exports\AdvertisingExport;
use App\Exports\SubscriptionTransactionExport;
use App\Http\Controllers\Controller;
use App\Models\Advertising;
use App\Models\Currency;
use App\Models\Customer\CustomerPackage;
use App\Models\Customer\SubscriptionTransaction;
use App\Models\ProviderService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class SubscriptionTransactionController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( SubscriptionTransactionsDataTable $dataTable){

        return $dataTable->render('dashboard.subscription_transaction.index');
    }

    public function getPackages(Request $request){
        if($request->ajax()){
            if($request->type_id){
                $html='<option value="">'.__('Select :type',['type'=>__('Service')]).'</option>';
                $packages=CustomerPackage::where('customer_type_id',request('type_id'))->pluck('package_name_en','id')->toArray();
                foreach ($packages as $id=>$title){
                    $html.='<option '.($request->selected==$id?'selected="selected"':'').' value="'.$id.'">'.$title.'</option>';
                }
                return response()->json(['success'=>true,'html'=>$html]);
            }
        }
        return abort(404);
    }


    public function paymentTransactionDetails($id = null)
    {
        if (isset($id)) {
            $transaction = SubscriptionTransaction::find($id ) ;


            $tokenData=$this->getToken();

            if(isset($tokenData['token'])){
               // dd("Ll");

                $token=$tokenData['token'];

                $headers = [

                    'Authorization: Bearer ' . $token,

                    'Content-Type: application/json',

                ];


                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, 'https://accept.paymob.com/api/acceptance/transactions/' . $transaction->payment_transaction_id);

                curl_setopt($ch, CURLOPT_POST, false);

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

                $response = curl_exec($ch);
                // return $response;
                
                 $response = json_decode($response, JSON_PRETTY_PRINT);
                // print_r($response);
                return view('dashboard.transactions.paymob_transaction_details', compact('response'));

            }
        }
    }
    public function getToken(){
        $url='https://accept.paymobsolutions.com/api/auth/tokens';
         // old anas//  $jsonDataSend=json_encode(['api_key'=>'ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2TnpNMU1EVXlMQ0p1WVcxbElqb2lNVFk0TURZNE9UQTFNaTQzT1RFM01EWWlmUS5rMUZ5ckVqWDBHZTJ4czJ4Y3F2bXIzUlEzQkliTHR3VXA4LWVmbjQtcDlqVm1PMEpRX0Y5YlNGM1dycUJQNVNVSkk4UVMxWE00RTM2YzRjOHRyNU9iZw==']);
       // $jsonDataSend=json_encode(['api_key'=>'ZXlKMGVYQWlPaUpLVjFRaUxDSmhiR2NpT2lKSVV6VXhNaUo5LmV5SndjbTltYVd4bFgzQnJJam94TlRreE1qSXNJbU5zWVhOeklqb2lUV1Z5WTJoaGJuUWlMQ0p1WVcxbElqb2lhVzVwZEdsaGJDSjkud2gwejBRMDlDSEpOSHRBdE5pX0ExT1ExOW91QWZpa2E0RnBqYi1VX2h5QU00aXJrZ280N2hfMnF3S0NuZjBsR3dLUjdzUFc2NzNuTGJBWTdVeTZIbGc=']);
     
       $jsonDataSend=json_encode(['api_key'=>env('PAYMOB_API_KEY')]);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $jsonDataSend,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
            ),
        ));
        $response = curl_exec($curl);
       // dd(  $response );   
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            $responseData= ['detail'=>$err];
        } else {
            $responseData= $response;
        }
        // PaymobPaymentsLog::create([
        //     'type'=>'token',
        //     'url'=>$url,
        //     'request_data'=>$jsonDataSend,
        //     'response_data'=>$responseData,
        // ]);
        // return $responseData;/
        return json_decode($responseData, JSON_PRETTY_PRINT);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('dashboard.subscription_transaction.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    //     $this->validateProviderServices($request);
    //     $imageAttr=[];
    //     if($request->file('image')){
    //         $imageAttr=uploadImage($request->file('image'),'advertising','image','image');
    //     }
    //   //  dd( $imageAttr );
    //     Advertising::create(array_merge($request->only(['title_en','title_ar','link','type','count','end_date']),$imageAttr));
    //     alert()->success(__('Success'),__('Create Successfully'));
    //     return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd("dd");
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertising $advertising)
    {
        //
        // return view('dashboard.subscription_transaction.create_edit',compact('advertising'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertising $advertising)
    {
        //
        // $this->validateProviderServices($request);
        // $array=[];
        // $imageAttr=[];
        // if($request->file('image')){
        //     $imageAttr=uploadImage($request->file('image'),'advertising','image','image');
        // }
        // $advertising->update(array_merge($request->only(['title_en','title_ar','link','type','count','end_date']),$imageAttr));
        // alert()->success(__('Success'),__('Update Successfully'));
        // return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $advertising=SubscriptionTransaction::withTrashed()->findOrFail($id);
            if($advertising->deleted_at){
                $advertising->forceDelete();
            }else{
                $advertising->delete();
            }
            return response()->json(['success'=>true]);
        return response()->json(['success'=>false,'message'=>__('can\'t delete default')]);
    }

    public function validateProviderServices($request){
        $valid=[
        ];
        if($request->advertising){
            $valid['title_en']=['required','max:255',Rule::unique('advertising','title_en')->whereNull('deleted_at')->ignore($request->advertising->id,'id')];
        }else{
            $valid['title_en']='required|max:255';
        }
        return $request->validate($valid);
    }
    public function deleteMulti(Request $request){
        $count=SubscriptionTransaction::whereIn('id',$request->IDS)->update(['deleted_by'=>auth()->id(),'deleted_at'=>now()]);
        return response()->json(['success'=>true,'message'=>__('Delete :count Successful',['count'=>$count])]);
    }
    public function export(Request $request){
        switch ($request->export_type){
            case'csv':
                return Excel::download(new SubscriptionTransactionExport,'subscription_transaction'.time().'.csv',\Maatwebsite\Excel\Excel::CSV);
                break;
            case'excel':
                return Excel::download(new SubscriptionTransactionExport,'subscription_transaction'.time().'.xlsx',\Maatwebsite\Excel\Excel::XLSX);
                break;
            case'pdf':
                $advertising=SubscriptionTransaction::query();
                if(request('IDS')){
                    $advertising=$advertising->whereIn('id',explode(',',request('IDS')));
                }
                $advertising=$advertising->get();
                return Pdf::loadView('dashboard.subscription_transaction.export_pdf',['subscription_transaction'=>$advertising])->download('subscription_transaction'.time().'.pdf');
                break;
        }
    }
}
