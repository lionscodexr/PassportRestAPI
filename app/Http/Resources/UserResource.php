<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /*return parent::toArray($request); */

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email
        ];

    }

    public function with($request){
        return [
            'Application Name' => 'REST API - Passport Laravel',
            'Section Topic' => 'REST API With Passport',
            'Author' => 'Emmanuel Mathekga',
            'Email' => 'gudlukmme@gmail.com'
        ];
    }
}
