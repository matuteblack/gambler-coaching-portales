<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'blogs' => Blog::all()
        ]);
    }

    public function indexAdmin()
    {
        return view('blog.admin', [
            'blogs' => Blog::all()
        ]);
    }

    public function show(int $id)
    {
        return view('blog.show', [
            'blog' => Blog::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2',
            'image' => 'required',
            'alt' => 'required',
            'content' => 'required|min:20'
        ], [
            'title.required' => 'El título es obligatorio',
            'title.min' => 'El título debe tener al menos :min caracteres',
            'image.required' => 'La imagen es obligatoria',
            'alt.required' => 'El texto alternativo es obligatorio',
            'content.required' => 'El contenido es obligatorio',
            'content.min' => 'El contenido debe tener al menos 20 caracteres'
        ]);

        $data = $request->except('_token');
        Blog::create($data);

        return redirect(route('blog.admin'))
            ->with('feedback.message', 'El post "<b>' . e($data['title']) . '</b>" se publicó con éxito');
    }

    public function edit(int $id)
    {
        return view('blog.edit', [
            'blog' => Blog::findOrFail($id)
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required|min:2',
            'image' => 'required',
            'alt' => 'required',
            'content' => 'required|min:20'
        ], [
            'title.required' => 'El título es obligatorio',
            'title.min' => 'El título debe tener al menos :min caracteres',
            'image.required' => 'La imagen es obligatoria',
            'alt.required' => 'El texto alternativo es obligatorio',
            'content.required' => 'El contenido es obligatorio',
            'content.min' => 'El contenido debe tener al menos 20 caracteres'
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($request->except('_token'));

        return redirect(route('blog.admin'))
            ->with('feedback.message', 'El post "<b>' . e($blog->title) . '</b>" se actualizó con éxito');
    }

    public function delete(int $id)
    {
        return view('blog.delete', [
            'blog' => Blog::findOrFail($id)
        ]);
    }

    public function destroy(int $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect(route('blog.admin'))
            ->with('feedback.message', 'El post "<b>' . e($blog->title) . '</b>" se eliminó con éxito');
    }
}
