<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   public function index()
   {
    $tasks=Task::paginate(perPage:10);
    return view('tasks.index', [
    'tasks' => $tasks,
    ]);
   }

   public function create()
   {
    return view('tasks.create', [
      'tasks' => new Task(),
      'submitButtonText' => 'Crear Tarea'
    ]);
   }











}
