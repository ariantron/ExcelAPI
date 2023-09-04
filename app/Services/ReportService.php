<?php

namespace App\Services;

use App\Interfaces\IReportService;
use App\Models\ServiceA;
use DB;

class ReportService implements IReportService
{

    public function report(): array
    {
        return ServiceA::query()->select(DB::raw('COUNT(service_a.mobile_number) as mobile_numbers'), 'product_name')
            ->join('service_b', 'service_a.mobile_number', '=', 'service_b.mobile_number')
            ->groupBy('product_name')->get()->toArray();
    }
}
