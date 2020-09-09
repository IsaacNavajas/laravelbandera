

@extends('layout')


@section('content')


    <form action="/developer/{{$report->id}}" method="POST">

        @csrf
        @method('PUT')

        <label for="title">Name and surname of {{$report->title}}: *</label>
        <input type="text" id="title" name="title" placeholder="Your name" value="{{old('title', optional($report)->title)}}">

        <br>

        <label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="male">

        <label for="female">&nbsp &nbsp Female</label>
        <input type="radio" id="female" name="gender" value="female" checked>

        <input type="submit" value="send name" class="col-1 bottomleft">

        <br>
        <br>

        <a href="/developer/"><input type="buttom" value="&#8592" class="col-3 btn btn-info"></a>

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




