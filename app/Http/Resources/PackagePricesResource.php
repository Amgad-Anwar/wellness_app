<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PackagePricesResource extends JsonResource
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
            'days_number' => $this->days_number ,
            'price' => $this->price ,
            'off_days' => json_decode( $this->off_days ) ,

        ];
    }
}
