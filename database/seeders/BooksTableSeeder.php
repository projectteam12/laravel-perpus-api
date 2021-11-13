<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $model = new Book;
        $model->namaBuku = "Android Dasar 1";
        $model->tahunTerbit = "2021";
        $model->penulis = "Ahmad";
        $model->deskripsi = "buku android dasar untuk pemula";
        $model->kategori = "IT";
        $model->stok = 5;
        $model->urlBuku = "";
        $model->save();

        $model = new Book;
        $model->namaBuku = "JAVA Dasar 1";
        $model->tahunTerbit = "2021";
        $model->penulis = "Surya";
        $model->deskripsi = "buku java dasar untuk pemula";
        $model->kategori = "IT";
        $model->stok = 3;
        $model->urlBuku = "";
        $model->save();
    }
}
