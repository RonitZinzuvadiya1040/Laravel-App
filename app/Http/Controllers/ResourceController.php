<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo "Hello from index() !!";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo "Hello from create() !!";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        echo "Hello from store() !!";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        echo "Hello from show() !!";
        echo "<br>";
        echo $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        echo "Hello from edit() !!";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        echo "Hello from update() !!";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        echo "Hello from destroy() !!";
    }
}
