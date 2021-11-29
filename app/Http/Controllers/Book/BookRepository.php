<?php

namespace App\Http\Controllers\Book;

use App\Models\Book;
use App\Repositories\Repository;

class BookRepository extends Repository
{

    public function __construct()
    {
        parent::__construct(new Book());
    }

}
