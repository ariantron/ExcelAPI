<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use ReportService;

class ReportApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(ReportService::report());
    }
}
