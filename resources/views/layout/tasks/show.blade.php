 @extends('layout.layout')

@section('content')
            

    <div class="jumbotron text-center">
    	<h1 style="color: Green">Showing Task:  {{ $task->title }}</h1>
    	<hr>
        <p>
            <strong>Task Title:</strong> {{ $task->title }}<br>
            <strong>Description:</strong> {{ $task->description }}
        </p>
    </div>
@endsection