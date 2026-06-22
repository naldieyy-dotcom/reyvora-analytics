<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnalyticsService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = AnalyticsService::latest()->get();

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        AnalyticsService::create($request->all());

        return redirect()->route('services.index')
            ->with('success', 'Service berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $service = AnalyticsService::findOrFail($id);

        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $service = AnalyticsService::findOrFail($id);

        $service->update($request->all());

        return redirect()->route('services.index')
            ->with('success', 'Service berhasil diupdate');
    }

    public function destroy(string $id)
    {
        AnalyticsService::findOrFail($id)->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service berhasil dihapus');
    }
}