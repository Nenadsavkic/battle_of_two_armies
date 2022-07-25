<?php

   use App\Models\Army1;
   use App\Models\Army2;

   $total1 = Army1::all()->count();
   $total2 = Army2::all()->count();

?>

@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <h2 class="mt-5">Battle of two armies</h2>
            <h4 class="mt-5">Enter below number of soldiers for each army.</h4>
        </div>

        <div class="col-3 offset-3 mt-5 mb-5">
            <form action="{{ route('createArmy1') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">Enter a number of soldiers of Army1</label>
                  <input type="number" class="form-control" name="army1">
                </div>
                <button class=" btn btn-primary mt-3">Create Army 1</button>
              </form>
        </div>
        <div class="col-3 mt-5 mb-5">
            <form action="{{ route('createArmy2') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">Enter a number of soldiers of Army2</label>
                  <input type="number" class="form-control" name="army2">
                </div>
                <button class=" btn btn-primary mt-3">Create Army 2</button>
              </form>
        </div>
    </div>
    <div class="col-6 offset-3">
    @include('layouts.flashMessages')

    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <h4>Army1 has total number of soldiers {{ $total1 }} you can add more soldiers if you want.</h4>
            <br>
            <h4>Army2 has total number of soldiers {{ $total2 }}  you can add more soldiers if you want.</h4>

     {{-- Dugme 'Start battle ce se pojaviti tek kada su kreirane obe armije --}}
          @if ($total1 && $total2)
              <a href="{{ route('startBattle') }}" class="btn btn-success form-control mt-5">Start battle</a>
          @endif

        </div>
    </div>

  </div>

@endsection
