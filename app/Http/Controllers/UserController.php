<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\DataTables\UsersDataTable;



class UserController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render("users.index");
    }

    public function delete()
    {
        User::where('id',request()->id)->delete();
    }
}
