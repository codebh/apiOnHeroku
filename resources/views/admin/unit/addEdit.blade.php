@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">units</div>

                  {{--<div class="card-body">--}}
                      {{--@if (session('status'))--}}
                          {{--<div class="alert alert-success" role="alert">--}}
                              {{--{{ session('status') }}--}}
                          {{--</div>--}}
                      {{--@endif--}}
<ul>
    @foreach($units as $unit)
    <li>{{$unit->unit_name}}</li>
        @endforeach
</ul>
                      You are logged in!
                  </div>
          </div>
      </div>
  </div>
@endsection