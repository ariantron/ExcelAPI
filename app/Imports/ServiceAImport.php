<?php

namespace App\Imports;

use App\Models\ServiceA;
use App\Models\ServiceB;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ServiceAImport implements ToModel, WithChunkReading
{
    /**
     * @param array $row
     *
     * @return Model|ServiceA|null
     */
    public function model(array $row): Model|ServiceA|null
    {
        $serviceA = ServiceA::query()->updateOrCreate(
            [
                'mobile_number' => $row[0]
            ]
        );
        dump('new record - ServiceA - id: ' . $serviceA->id);
        return $serviceA;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
