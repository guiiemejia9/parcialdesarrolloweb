<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Editorial;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function create()
    {

        $editorials = Editorial::all();
        return view("books.create", compact('editorials'));
    }

    public function index()
    {
        $bookss = DB::table('books')
            ->join('Editorial','Editorial.id_editorial','=', 'Books.Editorial_id')
            ->select('Books.*','Editorial.name as Editorial_id')
            ->get();

        return view('books.read', compact('bookss'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Books::create([

            'name' => $data['name'],
            'edition' => $data['edition'],
            'year' => $data['year'],
            'author' => $data['author'],
            'Editorial_id' => $data['Editorial_id'],
        ]);
        Session::flash('save','Se ha registrado correctamente');
        return redirect()->route('books-visualize')->with('success', 'Registro realizado exitosamente');
    }


}
