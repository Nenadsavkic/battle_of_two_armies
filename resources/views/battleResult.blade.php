@extends('layouts.app')

@section('content')

  <div class="container">

    <div class="row">
        <div class="col-6 offset-3 text-center">
            <h2 class="mt-5">Battle of two armies</h2>
            <h4 class="mt-5">Battle result</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3 text-center ">
           <h4 class="mt-5">{{ $attack }}</h4>
           <h4>Battle in the progress flames, arows, spears, swords clanging, screams of dying soldiers.</h4>
           <h4>{{ $event_army_1->description }}</h4>
           <h4>{{ $event_army_2->description }}</h4>
           <h4>{{ $winner }}</h4>

           <a href="{{ route('resetBattle') }}" class="btn btn-primary form-control mt-5">Start new battle</a>

        </div>
    </div>

  </div>

@endsection
