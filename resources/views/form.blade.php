@extends('layouts')
@section('content')
<body>
    <form action="/register" method="post">
        @csrf
        <div class="container">
            @if($errors->any())
            <div class="text text-danger">
                {{ $errors->first() }}
            </div>
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="" class="form-control @error('name') is-inavlid @enderror" value="{{ old('name') }}">
                @error('name')
                <small class="form-text text-danger">{{ $message}}</small>
                @enderror
            </div>
            <br> <br>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="form-control @error('email') is-inavlid @enderror" value="{{ old('email') }}">
                @error('email')
                <small class="form-text text-danger">{{ $message}}</small>
                @enderror
            </div>
            <br> <br>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="" class="form-control @error('address') is-inavlid @enderror" value="{{ old('address') }}">
                @error('address')
                <small class="form-text text-danger">{{ $message}}</small>
                @enderror
            </div>
            <br> <br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="" class="form-control @error('password') is-inavlid @enderror" value="{{ old('password') }}">
                @error('password')
                <small class="form-text text-danger">{{ $message}}</small>
                @enderror
            </div>
            <br> <br>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="" class="form-control @error('password_confirmation') is-inavlid @enderror" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                <small class="form-text text-danger">{{ $message}}</small>
                @enderror
            </div>
            <br> <br>
            <button class="btn btn-primary">
                Submit
            </button>
        </div>

    </form>

</body>
@endsection