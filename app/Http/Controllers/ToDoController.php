<?php

namespace App\Http\Controllers;
use App\Models\ToDo;
use App\DataTables\ToDosDataTable;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
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
        ToDo::create([
            "name" => request()->task_name,
            "status" => "Not Completed",
            "user_id" => auth()->user()->id
        ]);
    }
    public function taskComplete()
    {
        ToDo::where('id',request()->id)->update([
            "status" => "Completed"
        ]);
    }
}
