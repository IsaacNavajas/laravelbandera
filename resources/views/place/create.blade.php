

@extends('layout')


@section('content')






    <form action="/developer/{{$expense->id}}/place" method="POST">

        @csrf

        <label for="place">lives in: *</label>
        <input type="text" id="place" name="place" placeholder="Your name">

        <br>

        <label for="dream">dreams are: *</label>
        <input type="text" id="dream" name="dream" placeholder="Your name">

        <br>

        <input type="submit" value="send place" class="col-3">
        <br>

        <br>

        <br>

        <a href="/developer/{{$expense->id}}"><input type="buttom" value="&#8592" class="col-1 btn btn-info"></a>

        <br>

        {{-- This is validator --}}

        @if ($errors->any())
        <br>
            <div class="alert alert-danger col-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    {{-- Finished validator --}}


    </form>




@endsection




