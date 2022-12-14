<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all(); 
        $data = [
            'comics' => $comics,
        ];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->GetValidationFields() );
        //
        $form_data = $request->all();
        $temp_comic = new Comic();

        $temp_comic->fill($form_data);
        $temp_comic->save();

        return redirect()->route('comics.show', ['comic' => $temp_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $comic = Comic::findOrFail($id);
        $data = [
            'comic' => $comic
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comic_to_edit = Comic::findOrFail($id);
        $data = [
            'comic' => $comic_to_edit,
        ];
        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //controllo che i dati passati siano validi
        $request->validate($this->GetValidationFields());
        $form_data = $request->all();

        $comic_to_edit = Comic::findOrFail($id);
        $comic_to_edit->update($form_data);

        return redirect()->route('comics.show', ['comic' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $comic_to_delete = Comic::findOrFail($id);
        $comic_to_delete->delete();

        return redirect()->route('comics.index');
    }

    /******************************************* */
    // CUSTOM FUNCTIONS
    /******************************************* */

    protected function GetValidationFields(){
        return [
            'title' => 'required | max: 255',
            'description' => 'required | max: 1000',
            'thumb' => 'required | max: 1000',
            'price' => 'required | numeric',
            'series' => 'required | max: 50',
            'sale_date' => 'required | date',
            'type' => 'required | max: 50',
        ];
    }
}
