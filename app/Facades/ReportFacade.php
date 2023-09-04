<?php

namespace App\Facades;

use App\Interfaces\IReportService;
use Illuminate\Support\Facades\Facade;

class ReportFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return IReportService::class;
    }
}
