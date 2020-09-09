

@extends('layout')


@section('content')

    <p> {{$report->title}} to lived in; </p>
    <a href="/developer/"><input type="submit" value="&#8592" class="col-1 btn btn-info bottomright"></a>
    <a href="/developer/{{$report->id}}/place/create"><input type="submit" value="create preferences"></a>


    @foreach ($report->place as $reports)


            @if ($report->gender == 'male')
                <p>This user lives in {{ $reports->place }}, and his dream is {{ $reports->dream }}.</p>

            @elseif ($report->gender == 'female')
                <p>This user lives in {{ $reports->place }}, and her dream is {{ $reports->dream }}.</p>

            @endif

            <form action="/developer/{{ $reports->id }}/place/delete" method="POST">
                @csrf
                @method('DELETE')

                    <input type="submit" value="Delete" class="marginbottom"  onclick="alert('your preference has been deleted')">

            </form>

    @endforeach


@endsection




