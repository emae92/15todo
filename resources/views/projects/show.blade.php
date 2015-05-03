@extends('app')

@section('content')
<h2>{{ $project->name }}</h2>

    @if( !$project->tasks->count() )
    Your project has no tasks.
    @else 
        @foreach( $project->tasks as $task )
            <ul>
                <li><a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a></li>
            </ul>
        @endforeach
    @endif
@endsection
    
