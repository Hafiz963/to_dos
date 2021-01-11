<?php

namespace App\Http\Controllers;
use App\Models\ToDo;
use App\DataTables\ToDosDataTable;
use App\Repositories\ToDoRepository;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public $repo;
    public function __construct()
    {
        $this->repo = new ToDoRepository();
    }

    public function index(ToDosDataTable $dataTable)
    {
        return $dataTable->render('to_dos.index');
    }

    public function create()
    {
        $html = view('to_dos.create')->render();
        return response($html);
    }

    public function store()
    {
        $this->repo->store(request()->task_name);
    }

    public function taskComplete()
    {
        $this->repo->taskComplete(request()->id);
    }
}
