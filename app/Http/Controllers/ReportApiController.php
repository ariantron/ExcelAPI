<?php

namespace App\Http\Controllers;

use ReportService;

class ReportApiController extends Controller
{
    public function index()
    {
        return response()->json(ReportService::report());
    }
}
