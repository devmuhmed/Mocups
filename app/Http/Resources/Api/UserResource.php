<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'country_codes' => $this->country_codes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'token' => $this->token ?? request()->bearerToken(),
        ];
    }
}
