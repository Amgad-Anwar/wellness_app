<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PaginationResource extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    protected $_className=null;
    public function __construct($resource,$className=null)
    {
        $this->_className=$className;
        parent::__construct($resource);
    }

    public function toArray($request): array
    {
        return [
            'data' => $this->_className?$this->_className::collection($this->collection):$this->collection,
            'render'=>$this->links()->render() ,
            'links' => [
                'self' => $this->url($this->currentPage()),
                'first' => $this->url(1),
                'last' => $this->url($this->lastPage()),
                'prev' => $this->previousPageUrl(),
                'next' => $this->nextPageUrl(),
            ],
            'meta' => [
                'current_page' => $this->currentPage(),
                'from' => $this->firstItem(),
                'last_page' => $this->lastPage(),
                'path' => $this->path(),
                'per_page' => $this->perPage(),
                'to' => $this->lastItem(),
                'total' => $this->total(),
            ],
        ];
    }
}
