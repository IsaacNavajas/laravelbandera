

@extends('layout')


@section('content')

    <strong> Are you sure? </strong>



    <form action="/developer/{{$report->id}}" method="POST">

        @csrf
        @method('DELETE')

        <br>

        <input type="submit" value="Confirm delete" class="col-2">


    </form>

    <br>
    <br>
    <br>

    <a href="/developer/"><input type="submit" value="&#8592" class="col-1 btn btn-info"></a>


@endsection




