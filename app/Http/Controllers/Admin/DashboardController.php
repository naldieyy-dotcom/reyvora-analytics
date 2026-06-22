<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnalyticsService;
use App\Models\InsightsArticle;
use App\Models\TeamExpert;
use App\Models\ContactInfo;

class DashboardController extends Controller
{
    public function index()
    {
        $totalServices = AnalyticsService::count();
        $totalArticles = InsightsArticle::count();
        $totalTeams = TeamExpert::count();
        $totalContacts = ContactInfo::count();

        return view('admin.dashboard', [
            'totalServices' => $totalServices,
            'totalArticles' => $totalArticles,
            'totalTeams' => $totalTeams,
            'totalContacts' => $totalContacts,
        ]);
    }
}