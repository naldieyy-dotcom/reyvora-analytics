<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnalyticsService;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function services()
    {
        $services = AnalyticsService::all();

        $pdf = Pdf::loadView(
            'admin.pdf.services',
            compact('services')
        );

        return $pdf->download('services-report.pdf');
    }
}