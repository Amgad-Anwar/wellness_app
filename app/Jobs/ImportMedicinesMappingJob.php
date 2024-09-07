<?php

namespace App\Jobs;

use App\Imports\MedicineImport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class ImportMedicinesMappingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $request ;
    protected $file ;
    public function __construct($request , $file)
    {
        $this->request = $request ;
        $this->file = $file ;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Session::put('inserted',  true );
        $newArray=[];
       // return response()->json(  );
        foreach ( json_decode( $this->request )  as $key=>$value ){
            if($value){
                $newArray[strtolower($key)]=strtolower($value);
            }
        }
     

        Session::put('medicine_progress',0 ); 
        $msg =   Excel::import(new MedicineImport(  $newArray   ) ,  public_path(  $this->file  ) ) ;

        return response()->json(['success'=>true,'message'=>__('Success upload file will redirect ...'),'redirect_url'=>route('medicines.import_match_columns')]);

    }
}
