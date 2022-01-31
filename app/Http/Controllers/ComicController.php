<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Http\Requests\ComicPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->paginate(5);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicPostRequest $request)
    {
        $data = $request->all();
        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->slug = $this->makeSlugOf($data['title']);
        $new_comic->save();
        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        if ($comic) return view('comics.show', compact('comic'));
        abort(404, 'Fumetto insistente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        if ($comic) return view('comics.edit', compact('comic'));
        abort(404, 'Fumetto insistente');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicPostRequest $request, Comic $comic)
    {
        $data = $request->all();
        $data['slug'] = $this->makeSlugOf($data['title']);
        $comic->update($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('delete', "Il fumetto $comic->title é stato eliminato");
    }

    private function makeSlugOf($string) {
        $sluggedString = Str::slug($string, '-');
        return $this->setUniqueString($sluggedString);
    }

    private function setUniqueString($sluggedString) {
        $slugs = Comic::select('slug')
                            ->where('slug', $sluggedString)
                            ->get();

        if ($slugs) return $sluggedString = $sluggedString . '-' . count($slugs);

        return $sluggedString;
    }
}
