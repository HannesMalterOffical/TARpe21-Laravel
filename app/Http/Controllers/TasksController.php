<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TasksController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function create(Task $newTask)
    {

    }
    public function delete(Task $taskToDelete)
    {
        # code...
    }
    public function index()
    {
        return 'Wassup partner';
    }
}
