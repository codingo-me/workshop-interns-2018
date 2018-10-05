@extends('layouts.main')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Zdravo, unesi broj indeksa:</h1>
            <form action="{{ route('index') }}" method="POST" class="col-md-4">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <input class="form-control" name="index" placeholder="70/07" style="margin-bottom:10px;" required>
                <button class="btn btn-primary" type="submit">Pošalji</button>
            </form>
        </div>
    </div>

@endsection