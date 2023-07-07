<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method setting()
 */
class UserSettingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'setting' => $this->setting,
            'value'=>$this->value,
            'switch' => $this->switch,
        ];
    }
}
