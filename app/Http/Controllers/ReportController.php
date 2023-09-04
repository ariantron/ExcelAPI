<?php

namespace App\Http\Controllers;

use ReportService;

class ReportController extends Controller
{
    public function index()
    {
        print_r(ReportService::report());
    }
}
