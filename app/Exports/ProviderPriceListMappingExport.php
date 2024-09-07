<?php

namespace App\Exports;

use App\Models\CPTType;
use App\Models\Medicine;
use App\Models\ProviderAccountsPriceList;
use App\Models\ProviderType;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderPriceListMappingExport implements WithMapping, WithHeadings, FromQuery
{



    public function query()
    {
        $provider_accounts_price_list = ProviderAccountsPriceList::query()->select(
            'provider_accounts_price_lists.id',
            'provider_types.provider_type_title_en as provider_type_title',
            'provider_accounts.provider_account_name_en AS provider_account_name',
            'provider_accounts_price_lists.code',
            'provider_accounts_price_lists.service_name_ar',
            'provider_accounts_price_lists.service_name_en',
            'provider_accounts_price_lists.service_medical_name',
            'provider_accounts_price_lists.created_at',
            DB::raw('COALESCE((SELECT price FROM provider_accounts_price_lists_prices WHERE provider_account_price_list_id = provider_accounts_price_lists.id AND start_date <= NOW() AND (end_date > NOW() OR end_date IS NULL) AND deleted_at IS NULL LIMIT 1), 0) AS net_price'),
            DB::raw('COALESCE((SELECT public_price FROM provider_accounts_price_lists_public_prices WHERE provider_account_price_list_id = provider_accounts_price_lists.id AND start_date <= NOW() AND (end_date > NOW() OR end_date IS NULL) AND deleted_at IS NULL LIMIT 1), 0) AS gross_price')
        )
            ->leftJoin('provider_types', 'provider_types.id', '=', 'provider_accounts_price_lists.provider_type_id')
            ->leftJoin('provider_accounts', 'provider_accounts.id', '=', 'provider_accounts_price_lists.provider_account_id');
        if (request('IDS')) {
            $provider_accounts_price_list = $provider_accounts_price_list->whereIn('provider_accounts_price_lists.id', explode(',', request('IDS')));
        }
        return $provider_accounts_price_list;
    }
    /**
     * @return \Illuminate\Support\Collection
     */

    public function map($medicine): array
    {
        return [
            $medicine->id,
            $medicine->generated_code,
            $medicine->service_name_ar,
            $medicine->service_name_en,
            $medicine->service_medical_name,

            json_encode($medicine->cptServices->pluck('cpt_service_code')->toArray()),

        ];
    }
    public function headings(): array
    {
        return [
            __('id'),
            __('generated_code'),
            __('service_name_ar'),
            __('service_name_en'),
            __('service_medical_name'),
            __('cpt_codes'),

        ];
    }
}
