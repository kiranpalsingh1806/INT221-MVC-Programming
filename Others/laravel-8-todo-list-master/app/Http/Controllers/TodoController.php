<?php
namespace App\Http\Controllers;
use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo;
 


class TodoController extends Controller{
    
    public function index(){
        $todos = auth()->user()->todos()->orderBy('completed')->get();
        return view('todos.index')->with(['todos' => $todos]);
        
        // $todos = Todo::orderBy('completed')->get();
        //  return view('todos.index', compact('todos'));
   }
 

    public function create(){
        return view('todos.create');
}

   
    public function store(TodoRequest $request){
        auth()->user()->todos()->create($request->all());
        // Todo::create($request->all());
        return redirect(route('todo.index'))->with('message', 'Todo Created Successfully');
    }

   
    public function edit($id){
       $todo = Todo::find($id);
       return view('todos.edit')->with(['todo' => $todo]);
      
    }
 
    public function update(TodoRequest $request,Todo $todo){
         $todo->update(['title' => $request->title]);
         return redirect(route('todo.index'))->with('message', 'Task Updated');
    }

   
    public function destroy(Todo $todo){
       $todo->delete();
       return redirect(route('todo.index'))->with('message', 'Task Deleted');
      }

    public function complete(Todo $todo){
     $todo->update(['completed' => true]);
     return redirect()->back()->with('message', 'Task Completed');
    }

    public function incomplete(Todo $todo){
     $todo->update(['completed' => false]);
     return redirect()->back()->with('message', 'Task incomplete');
    }
}
