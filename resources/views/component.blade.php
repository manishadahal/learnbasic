@extends('layouts')
@section('content')
<body>
    <form action="/register" method="post">
        @csrf
        <div class="container">
            <x-input type="text" name="name" label="Enter your name"/><br>
            <x-input type="email" name="email" label="Enter your email"/><br>
            <x-input type="text" name="address" label="Enter your address"/><br>
            <x-input type="password" name="password" label="Enter your password"/><br>
            <x-input type="password" name="password_confirmation" label="Confirm Password"/><br>
            <button class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>
</body>
@endsection