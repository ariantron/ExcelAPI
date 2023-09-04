<?php

namespace Database\Seeders;

use App\Imports\ServiceBImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class ServiceBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new ServiceBImport(), resource_path('excel_serviceB.xlsx'));
    }
}
