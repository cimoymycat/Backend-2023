<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Create property data animals (array)
     */
    public $animal = ['Kucing', 'Ayam', 'Ikan'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        #tampilkan data animals
        echo "Menampilkan data animals";
        foreach ($this->animal as $this->index) {
            echo "$this->index <br>";
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "Menambahkan hewan baru";
        array_push($this->animals,$request->namma);
        $this->index();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "Mengupdate data hewan id $id";
        $this->animal[$id]= $request->nama; 
        $this->index();   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "Menghapus data hewan id $id";
        unset($this->animal[$id],$id);
        $this->index();
    }
}
