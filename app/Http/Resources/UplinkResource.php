<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Device;

class UplinkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $timezone = Device::where('device_id', $this->device_id)->firstOrFail()->timezone;
        return [
            'id' => $this->id,
            'device_id' => $this->device_id,
            'date' => $this->date,
            'port' => $this->port,
            'payloads' => $this->payloads,
            'created_at' => $this->created_at->timezone($timezone)->toTimeString(),
        ];
    }
}
