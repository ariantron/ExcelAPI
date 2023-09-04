<?php

namespace Database\Seeders;

use App\Imports\ServiceAImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class ServiceASeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new ServiceAImport(), resource_path('excel_serviceA.xlsx'));
    }
}
