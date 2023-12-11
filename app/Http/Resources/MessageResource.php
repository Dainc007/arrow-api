<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'from' => 'ID: ' . $this->from,
            'to' => 'ID: ' . $this->to,
            'content' => 'Content: ' . $this->content,
            'recived' => 'Recived: ' . $this->created_at
        ];
    }
}
