<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class data_latihResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($this->kesimpulan == 1) {
            $kesimpulan = "sehat";
        } else {
            $kesimpulan = "tidak sehat";
        }

        return [
            'id' => $this->No,
            'ukuran_akar' => $this->ukuran_akar,
            'warna_akar' => $this->warna_akar,
            'tekstur_akar' => $this->tekstur_akar,
            'ukuran_batang' => $this->ukuran_batang,
            'warna_batang' => $this->warna_batang,
            'tekstur_batang' => $this->tekstur_batang,
            'ukuran_daun' => $this->ukuran_daun,
            'warna_daun' => $this->warna_daun,
            'kesimpulan' => $kesimpulan
        ];
    }
}
