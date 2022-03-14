<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/002-planting.png">
    <title>Register</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="log.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/log.css') }}">
</head>

<body>
    <div
        style="margin-left: 565px; margin-top: 130px; margin-bottom: -130px; background-color: #ffe3e6;color: black;  font-size: .9rem; width: 26%; border-radius: 6px;text-align: center">

        {{ session('msg') }}
    </div>
    <div class="register">
        <h1>Register</h1>
        <form method="POST" action="{{ route('register.submit') }}">
            {{csrf_field()}}
            <label for="name">First name:</label><br>
            <input type="text" id="name" placeholder="Name..." value="{{ old('name') }}" name="name"><br>
            @error('name')
                <span class="text-danger"> {{ $message }}</span><br>
            @enderror
            <label for="name">Username:</label><br>
            <input type="text" id="name" placeholder="User Name..." value="{{ old('username') }}" name="username"><br>
            @error('username')
                <span class="text-danger"> {{ $message }}</span><br>
            @enderror
            <label for="name">Email:</label><br>
            <input id="name" type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
            @error('email')
                <span class="text-danger"> {{ $message }}</span><br>
            @enderror
            <br>
            <select class="form-control" id="name" name="problem">
                <option>patient</option>

            </select>
            <label for="name">Password:</label><br>
            <input id="pass" type="password" name="password" placeholder="Password..."><br>
            @error('password')
                <span class="text-danger"> {{ $message }}</span><br>
            @enderror
            <label for="name">Confirm Password:</label><br>
            <input id="pass" type="password" name="confirmpassword" placeholder="Password..."><br>
            @error('confirmpassword')
                <span class="text-danger"> {{ $message }}</span><br>
            @enderror
            {{-- <input  id="name" type="number" name="activee" defaultvalue=1><br> --}}
            <input id="button" type="submit" name="submit" value="Register">
        </form>
        {{-- <p>Not registerd?<a href="{{route('register')}}">Create an account</a></p> --}}
    </div>

</body>

</html>
