<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PackagesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [

            'id' => $this->id,
            'name' => request()->header('lang') == 'ar' ? $this->name_ar : $this->name_en,
            'description' => request()->header('lang') == 'ar' ? $this->description_ar : $this->description_en,
            'carbs' => $this->carbs ,
            'protein' => $this->protein ,
            'calories' => $this->calories ,
            'breakfast' => $this->breakfast ,
            'main_cource' => $this->main_cource ,
            'snack' => $this->snack ,
            'package_prices' => PackagePricesResource::collection( $this->package_prices )  ,

        ];
    }
}
