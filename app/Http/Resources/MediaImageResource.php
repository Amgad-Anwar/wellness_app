<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MediaImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->file_name,
            'size'=>$this->size,
            'type'=>$this->mime_type,
            'url'=>$this->getUrl().'?width=120&height=120',
            'dataURL'=>$this->getUrl().'?width=120&height=120',
            'width'=>120,
            'height'=>120,
        ];
    }
}
