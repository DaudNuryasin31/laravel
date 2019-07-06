@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-lg-12 col-xs-12">
    <h1 align="center" style="padding-top: 75px">Selamat Datang</h1>
    </div>
    <div class="col-lg-12 col-xs-12">
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    </div>
  </div>
</div>
@endsection
