<?php

namespace App\Http\Controllers;

use JetBrains\PhpStorm\NoReturn;
use ReportService;

class ReportController extends Controller
{
    #[NoReturn] public function index()
    {
        dd(ReportService::report());
    }
}
