<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnalyticsService;
use App\Models\InsightsArticle;
use App\Models\TeamExpert;
use App\Models\ContactInfo;

class PageController extends Controller
{
    public function home()
    {
        $services = AnalyticsService::all();
        $articles = InsightsArticle::all();

        return view('pages.home', compact('services', 'articles'));
    }

    public function about()
    {
        $team = TeamExpert::all();

        return view('pages.about', compact('team'));
    }

    public function services()
    {
        $services = AnalyticsService::all();

        return view('pages.services', compact('services'));
    }

    public function articles()
    {
        $articles = InsightsArticle::all();

        return view('pages.articles', compact('articles'));
    }

    public function contact()
    {
        $contact = ContactInfo::first();

        return view('pages.contact', compact('contact'));
    }

    public function showArticle($id)
    {
        $article = InsightsArticle::findOrFail($id);

        return view('pages.article-detail', compact('article'));
    }

    public function showService($id)
    {
        $service = AnalyticsService::findOrFail($id);

        return view('pages.service-detail', compact('service'));
    }
}