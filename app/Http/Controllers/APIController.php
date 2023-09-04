<?php

namespace App\Http\Controllers;

use ReportService;

class APIController extends Controller
{
    public function report()
    {
        return response()->json(ReportService::report());
    }
}
