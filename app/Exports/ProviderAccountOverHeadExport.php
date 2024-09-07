<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\ProviderAccountOverHeadDurationLayer;
use App\Models\ProviderService;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ProviderAccountOverHeadExport implements WithMapping, WithHeadings,FromQuery ,WithStyles
{

    protected $ProviderAccountOverHeadDuration = 0 ;
    public function query()
    {
        if(request('IDS')){
            $layer = ProviderAccountOverHeadDurationLayer::with('ProviderAccountOverHeadDuration.providerAccount')
            ->whereHas('providerAccountOverHeadDuration', function ($query) {
                $query->where('status', 'active');
            })
            ->whereHas('ProviderAccountOverHeadDuration.providerAccount', function ($query) {
                $query->whereIn('id',explode(',',request('IDS')));
            });
        }else{
            $layer = ProviderAccountOverHeadDurationLayer::with('ProviderAccountOverHeadDuration.providerAccount')
            ->whereHas('providerAccountOverHeadDuration', function ($query) {
                $query->where('status', 'active');
            });
        }
     
        return $layer;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function styles(Worksheet $sheet): array
    {
        $styles = [];

        foreach ($sheet->getRowIterator() as $row) {
            $cellValues = $sheet->rangeToArray('A' . $row->getRowIndex() . ':ZZ' . $row->getRowIndex(), null, true, false)[0];
            if (empty(array_filter($cellValues))) {
                $styles[$row->getRowIndex()] = [
                    'fill' => ['fillType' => 'solid', 'startColor' => ['rgb' => 'FFFF00']] // Yellow background color
                ];
            }
        }
        return $styles;
    }

    public function map($layer) : array {
     
        if ( $this->ProviderAccountOverHeadDuration == $layer->ProviderAccountOverHeadDuration->id ||  $this->ProviderAccountOverHeadDuration == 0) {
            $this->ProviderAccountOverHeadDuration = $layer->ProviderAccountOverHeadDuration->id;
            return [
                $layer->ProviderAccountOverHeadDuration->providerAccount?->id ?? '0',
                $layer->ProviderAccountOverHeadDuration->providerAccount?->manual_p_id ?? '0',
                $layer->ProviderAccountOverHeadDuration->providerAccount?->provider_account_name_en ?? '0',
                optional($layer->ProviderAccountOverHeadDuration?->providerAccount?->staffs)->count() ?? '0',
                optional($layer->ProviderAccountOverHeadDuration?->providerAccount?->branches)->count() ?? '0',
                $layer->ProviderAccountOverHeadDuration->start_date,
                $layer->ProviderAccountOverHeadDuration->end_date,
                $layer->amount_from,
                $layer->amount_to,
                $layer->percent,
                $layer->created_at,
            ] ;
        }else{
            $this->ProviderAccountOverHeadDuration = $layer->ProviderAccountOverHeadDuration->id ;
            return array_fill(0, 11, '');

        }

       
    }
    public function headings() : array {
        return [
            __('Provider ID'),
            __('Provider Manual ID'),
            __('Provider Name'),
            __('Provider staff count'),
            __('Provider branches count'),
            __('Overhead Start Date'),
            __('Overhead End Date'),
            __('Overhead Amount from'),
            __('Overhead Amount to'),
            __('Overhead Percent'),
            __('Created At')
        ] ;
    }
}
