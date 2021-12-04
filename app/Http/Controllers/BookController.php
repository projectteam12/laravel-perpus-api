<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    public function index(Request $request){
		
		$buku = Book::all();
		
		$data['status'] = 200;
		$data['message'] = "success";
		$data['data'] = [
			'data_buku' => $buku
		];
		
    	return response($data, $data['status']);
    }

    /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
    public function create()
    {
        //
    }

    /**
        * Store a newly created resource in storage.
        *
        * @return Response
        */
    public function store()
    {
        //
    }

    public function show($id)
    {
        return Book::findOrFail($id);
    }

    /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function edit($id)
    {
        //
    }

    /**
        * Update the specified resource in storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function update($id)
    {
        //
        $book = Book::where('id', $id)->first();

        $stok = $book->stok - 1;


        Book::where('id', $id)
          ->update(['stok' => $stok]);

        return $book = Book::where('id', $id)->first();
    }

    /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function destroy($id)
    {
        //
    }

    public function saveAllTransaction(Request $request){

        
        // for ($i = 0; $i < count($request->books); $i++){
        //     $transaction = new Transaction;

        //     $transaction->namaBuku = $request->namaBuku;
        //     $transaction->tahunTerbit = $request->tahunTerbit;
        //     $transaction->penulis = $request->penulis;
        //     $transaction->deskripsi = $request->deskripsi;
        //     $transaction->kategori = $request->kategori;
        //     $transaction->stok = $request->stok;
        //     $transaction->urlBuku = $request->urlBuku;

        //     $transaction->save();
        // }

        // Log::info('Log message', json_encode($request->books));

        $data['status'] = 201;
        $data['message'] = count($request->books)+"";
        $data['data'] = null;
        
        return response($data, $data['status']);

    }

}
