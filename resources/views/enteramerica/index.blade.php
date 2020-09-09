

@extends('layout')



@section('content')

@if (\Session::has('success'))
    <div class="alert alert-success col-4">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<a href="/"><input type="submit" value="&#8592" class="col-1 btn btn-info bottomright"></a>

<a href="/developer/create">Create citizen</a>
<br><br>

@foreach ($report as $user)

        <p > {{ $user->created_at->format('D / M / Y') }} |
            <a href="/developer/{{ $user->id }}" >{{ $user->title }}</a>  |
            <a href="/developer/{{ $user->id }}/edit">Change</a> |
            <a href="/developer/{{ $user->id }}/delete">Delete</a>

        </p>


@endforeach

<div class="center">{{ $report->links() }}</div>



@endsection




