@extends('layouts.app')

@section('content')

<div class="" style="background-color: #ffc107;">
    <h1 style="color: black;text-align: center;padding-top: -60px"><strong>Login</strong></h1>
</div>
        <div class="container" style="margin-top: 100px;margin-bottom: 100px">
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form" method="POST" action="{{ route('login') }}">
                      @csrf
                        <div class="row">
                            <div class=" col-md-12">
                                <input class="form-control" type="email" class="form-control " name="email" placeholder="Email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class=" col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class=" col-md-12">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
