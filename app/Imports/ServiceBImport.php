<?php

namespace App\Imports;

use App\Models\ServiceB;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ServiceBImport implements ToModel, WithChunkReading
{
    /**
     * @param array $row
     *
     * @return Model|ServiceB|null
     */
    public function model(array $row): Model|ServiceB|null
    {
        $serviceB = ServiceB::query()->updateOrCreate(
            [
                'mobile_number' => $row[0]
            ],
            [
                'product_name' => $row[1]
            ]
        );
        dump('new record - ServiceB - id: ' . $serviceB->id);
        return $serviceB;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
