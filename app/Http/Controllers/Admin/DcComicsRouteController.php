<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComicPostRequest;
use App\Http\Requests\UpdateComicPostRequest;
use App\Models\DcComic;
use Illuminate\Http\Request;

class DcComicsRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = DcComic::All();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicPostRequest $request)
    {
        $data = $request->validated();
        $comic = new DcComic();
        // mass create method
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = DcComic::find($id);
        if ($comic !== null) {
            return view('comics.show', compact('comic'));
        } else {
            return redirect()->route('comics.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = DcComic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicPostRequest $request, /*string $id*/ DcComic $comic)
    {
        // $comic = DcComic::findOrFail($id); usind alternative DcComic $comic
        $data = $request->validated();
        // mass update method also contains save
        $comic->update($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DcComic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
