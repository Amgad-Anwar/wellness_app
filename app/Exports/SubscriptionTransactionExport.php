<?php

namespace App\Exports;

use App\Models\Customer\SubscriptionTransaction;
use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SubscriptionTransactionExport implements WithMapping, WithHeadings,FromQuery
{
    public function query()
    {
        $transactions=SubscriptionTransaction::query();
        if(request('IDS')){
            $transactions=$transactions->whereIn('id',explode(',',request('IDS')));
        }
        return $transactions;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($transaction) : array
    {
        return [
            $transaction->id,
            \App\Models\CustomerList::where('id', $transaction->customer_list_id)->first()->account_name ?? ' ',
            $transaction->customer->customerPackage->package_name_en ?? " " ,
            $transaction->customer->customerType->type_name_en ?? " ",
            $transaction->payment_method,
            $transaction->payment_transaction_id,
            $transaction->status,
            $transaction->start_date,
            $transaction->end_date,

        ] ;
    }
    public function headings() : array
    {
        return [
            __('Transactoin ID'),
            __('Customer'),
            __('package'),
            __('type'),
            __('payment method'),
            __('payment transaction id'),
            __('status'),
            __('start_date'),
            __('end_date')
        ] ;
    }
}
