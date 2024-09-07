<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TransactionsExport implements WithMapping, WithHeadings,FromQuery
{
    public function query()
    {
        $transactions=Transaction::query();
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
            \App\Models\ProviderBranch::where('id', $transaction->provider_id)->first()?->providerAccount?->provider_account_name_en,
            \App\Models\CustomerList::where('id', $transaction->customer_list_id)->first()->account_name ?? 'No Scanning',
            $transaction->created_at?$transaction->created_at->format('d M Y, h:i a'):'',
        ] ;
    }
    public function headings() : array
    {
        return [
            __('Transactoin ID'),
            __('Provider'),
            __('Customer'),
            __('Date')
        ] ;
    }
}
