<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();
        if ($authors && $authors->count() > 0) {
            return response(['message' => 'Show data successful', 'data' => $authors], 200);
 
        }
        return response(['message' => 'No data to be displayed', 'data' => null], 404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // id, name, date_of_birth, place_of_birth, gender, email, hp , create_at, update_at.
        $data = Author::create([
            "name" => $request->input('name'),
            "date_of_birth" => $request->input('date_of_birth'),
            "place_of_birth" => $request->input('place_of_birth'),
            "gender" => $request->input('gender'),
            "email" => $request->input('email'),
            "hp" => $request->input('hp'),
        ]);

        return response(['message' => 'Create data success', 'data' => $data], 201);
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
        $author = Author::find($id);
        if ($author) {
            return response(['message' => 'Show data success', 'data' => $author], 200);
        }
        return response(['message' => 'Author not found', 'data' => null], 404);
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
        //
        $author = Author::find($id);
        if ($author) {
            $data = $author->update([
                "name" => $request->input('name'),
                "date_of_birth" => $request->input('date_of_birth'),
                "place_of_birth" => $request->input('place_of_birth'),
                "gender" => $request->input('gender'),
                "email" => $request->input('email'),
                "hp" => $request->input('hp'),
            ]);
            return response(['message' => 'Author updated succesfully.', 'data' => $data], 201);
        }

        return response(['message' => 'no author to update', 'data' => null], 404);
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
        $author = Author::find($id);
        if ($author) {
            $data = Author::destroy($id);
            return response(['message' => 'author deleted succesfully', 'data' => $data], 201);
        }

        return response(['message' => 'no author to delete', 'data' => null], 404);
    }
}