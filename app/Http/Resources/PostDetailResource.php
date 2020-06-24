<?php

/**
 * Rauf Abbas
 * rafo.abbas@gmail.com
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id'            => $this->id,
            'image'         => $this->image(), // bunu url kimi gondereceyik
            'title'         => $this->translate()->title,
            'slug'          => $this->translate()->slug,
            'description'   => $this->translate()->description,
            'category_id'   => $this->category_id,
            'views'         => $this->views,
            'publish_date'  => $this->publish_date

        ];
    }
}
