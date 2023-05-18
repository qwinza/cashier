@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <div class="full-size-container">
        <div class="login-container">
            <div class="logo-container">
                <img src="{{ asset('logo.png') }}" alt="App logo">
            </div>
            <form class="login-form" action="{{ route('login.store') }}" method="post">
                @csrf
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <h1>Login</h1>
                <div class="field-container">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="field-container">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <button>Log in</button>
                <a href="#">Forgot password</a>
            </form>
        </div>
    </div>
@endsection
