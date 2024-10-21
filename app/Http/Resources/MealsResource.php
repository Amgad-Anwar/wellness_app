<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MealsResource extends JsonResource
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
            'image' => $this->image ? url($this->image) : null ,
 
        ];
    }
}
