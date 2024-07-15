<?php

namespace App\Http\Controllers;

use App\Models\DcComic;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

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
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new DcComic();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
