<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>To Do List Application</title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
<!--[if lt IE 9]><script
src="//html5shim.googlecode.com/svn/trunk/html5.js">
</script><![endif]-->
</head>
<body>
<h1>ToDo List App</h1>
<div class="container">
    <section id="data_section" class="todo">
        <ul class="todo-controls">
            {{--<li>--}}
                {{--<img src="{{ asset('assets/img/add.png') }}" alt="" width="14px" onclick="show_form('add_task')"/>--}}
            {{--</li>--}}
            <li>
                <button class="btn" onclick="show_form('add_task')">Add To-Do</button>
            </li>
        </ul>
        <br/>
        <h2>List of available Tasks</h2>
        <ul id="task_list" class="todo-list">
        @foreach($todos as $todo)
            @if($todo->status)
            <li id="{{ $todo->id }}" class="done">
                <a href="#" class="toggle"></a>
                <span id="span_{{ $todo->id }}">{{ $todo->title }}</span>
                <a href="#" onclick="delete_task('{{ $todo->id }}')"><i class="fa fa-trash-o fa-lg"></i> Delete</a>
                <a href="#" onclick="edit_task('{{ $todo->id }}','{{ $todo->title }}');"><i class="fa fa-pencil fa-fw"></i> Edit</a>
            </li><br/>
            @else
            <li id="{{$todo->id}}">
                <span id="span_{{$todo->id}}">{{$todo->title}}</span>
                <a href="#" onclick="task_done('{{$todo->id}}');"><i class="fa fa-check-square"></i> Done</a>
                <a href="#" onclick="delete_task('{{$todo->id}}');"><i class="fa fa-trash-o fa-lg"></i> Delete</a>
                <a href="#" onclick="edit_task('{{$todo->id}}','{{$todo->title}}');"><i class="fa fa-pencil fa-fw"></i> Edit</a>
            </li><br/>
            @endif
        @endforeach
        </ul>
    </section>
    <section id="form_section">
        <form id="add_task" class="todo" style="display:none">
            <input id="task_title" type="text" name="title" placeholder="Enter a task name" value=""/>
            <button name="submit">Add Task</button>
        </form>
        <form id="edit_task" class="todo" style="display:none">
            <input id="edit_task_id" type="hidden" value="" />
            <input id="edit_task_title" type="text" name="title" value="" />
            <button name="submit">Edit Task</button>
        </form>
    </section>
</div>
<footer>
<p>Copyright &copy; 2014 Xplorer</p>
</footer>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"type="text/javascript"></script>
    <script src="{{ asset('assets/js/todo.js') }}" type="text/javascript"></script>
</body>
</html>