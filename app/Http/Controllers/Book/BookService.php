<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Book\BookInterface;

class BookService implements BookInterface
{

    private $repo;

    public function __construct(BookRepository $repo)
    {
        $this->repo = $repo;
    }

    public function createBook($request)
    {
        $data = [
            'title'  => $request->title,
            'author' => $request->author
        ];

        return $this->repo->create($data);
    }

    public function updateBook($id, $request)
    {
        $data = [
            'title'  => $request->title,
            'author' => $request->author
        ];

        return $this->repo->update($id,$data);
    }

    public function deleteBook($id)
    {
        return $this->repo->delete($id);
    }


}
