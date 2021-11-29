<?php

namespace App\Http\Controllers\Book;


interface BookInterface
{

    public function createBook($data);

    public function updateBook($id,$data);

    public function deleteBook($id);

}
