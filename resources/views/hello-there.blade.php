@extends('layouts.main')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <p>Zdravo {{ $student->first_name }},</p>
            <p>Odaberi svoje predmete</p>

        </div>
    </div>

@endsection