<?php

namespace App\Http\Controllers\Book;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{

    private $repo;
    private $service;

    public function __construct(BookService $service,BookRepository $repo)
    {
        $this->service = $service;
        $this->repo    = $repo;
    }

    public function index()
    {
        $data = $this->repo->all();
        return view('book.index',compact('data'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(BookStoreRequest $request)
    {
        $this->service->createBook($request);
        return redirect()->route('book.index');
    }

    public function edit($id)
    {
        $data = $this->repo->find($id);
        return view('book.edit',compact('data'));
    }

    public function update($id,BookUpdateRequest $request)
    {
        $this->service->updateBook($id,$request);
        return redirect()->route('book.index');
    }

    public function delete(Request $request)
    {
        $this->service->deleteBook($request->id);
        return redirect()->route('book.index');
    }

}
