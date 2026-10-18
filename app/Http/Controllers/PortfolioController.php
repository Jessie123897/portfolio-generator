<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->get();

        return view('portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('portfolios.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'about' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'location' => 'nullable|string|max:255',

            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'educational_background' => 'nullable|string',
            'skills' => 'nullable|string',
            'projects' => 'nullable|string',
            'work_experience' => 'nullable|string',
            'social_links' => 'nullable|string',

            'template' => 'required|in:simple,modern,creative',
        ]);

        if ($request->hasFile('profile_image')) {
            $validated['profile_image'] = $this->uploadProfileImage(
                $request->file('profile_image')
            );
        }

        Portfolio::create($validated);

        return redirect()
            ->route('portfolios.index')
            ->with('success', 'Portfolio created successfully!');
    }

    public function show(Portfolio $portfolio)
    {
        return view('portfolios.show', compact('portfolio'));
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'about' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'location' => 'nullable|string|max:255',

            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'educational_background' => 'nullable|string',
            'skills' => 'nullable|string',
            'projects' => 'nullable|string',
            'work_experience' => 'nullable|string',
            'social_links' => 'nullable|string',

            'template' => 'required|in:simple,modern,creative',
        ]);

        if ($request->hasFile('profile_image')) {
            $validated['profile_image'] = $this->uploadProfileImage(
                $request->file('profile_image')
            );
        }

        $portfolio->update($validated);

        return redirect()
            ->route('portfolios.index')
            ->with('success', 'Portfolio updated successfully!');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()
            ->route('portfolios.index')
            ->with('success', 'Portfolio deleted successfully!');
    }

    private function uploadProfileImage($file)
    {
        $supabaseUrl = rtrim(config('services.supabase.url'), '/');
        $serviceKey = config('services.supabase.service_key');

        $extension = $file->getClientOriginalExtension();

        $filename = Str::uuid() . '.' . $extension;

        $path = 'portfolio-images/' . $filename;

        $response = Http::withHeaders([
            'apikey' => $serviceKey,
            'Authorization' => 'Bearer ' . $serviceKey,
            'Content-Type' => $file->getMimeType(),
        ])
        ->withBody(
            file_get_contents($file->getRealPath()),
            $file->getMimeType()
        )
        ->post(
            $supabaseUrl . '/storage/v1/object/' . $path
        );

        if (!$response->successful()) {
            abort(
                500,
                'Profile image upload failed: ' . $response->body()
            );
        }

        return $supabaseUrl .
            '/storage/v1/object/public/' .
            $path;
    }
}