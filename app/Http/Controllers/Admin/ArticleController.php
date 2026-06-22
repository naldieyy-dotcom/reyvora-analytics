<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InsightsArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = InsightsArticle::latest()->get();

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:insights_articles',
            'content' => 'required',
            'author' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                public_path('uploads/articles'),
                $imageName
            );
        }

        InsightsArticle::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'author' => $request->author,
            'image' => $imageName,
        ]);

        return redirect()
            ->route('articles.index')
            ->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit($id)
    {
        $article = InsightsArticle::findOrFail($id);

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = InsightsArticle::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);

        $imageName = $article->image;

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                public_path('uploads/articles'),
                $imageName
            );
        }

        $article->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'author' => $request->author,
            'image' => $imageName,
        ]);

        return redirect()
            ->route('articles.index')
            ->with('success', 'Artikel berhasil diupdate');
    }

    public function destroy($id)
    {
        $article = InsightsArticle::findOrFail($id);

        $article->delete();

        return redirect()
            ->route('articles.index')
            ->with('success', 'Artikel berhasil dihapus');
    }
}