<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Models\User;
use App\Repositories\UserRepository;
use http\Env\Request;
use Illuminate\Support\Facades\Storage;



class UserController extends Controller
{
    public $repo;

    public function __construct()
    {
        $this->repo = new UserRepository();
    }

    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render("users.index");
    }

    public function edit()
    {
        $user = User::find(request()->id);
        $html = view("users.modals.edit",['user' => $user])->render();
        return $html;
    }

    public function update()
    {
        $this->repo->update(request()->id, request()->profile_image, request()->user_name);
    }

    public function delete()
    {
        $this->repo->delete(request()->id);
    }
}
