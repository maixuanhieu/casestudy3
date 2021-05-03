@extends('layout.auth')

@section('form')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="/storage/css/style2.css">
<form method="POST">
    @csrf
    <label>
        <p class="label-txt">ENTER YOUR NAME</p>
        <input type="text" class="input">
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <label>
        <p class="label-txt">ENTER YOUR EMAIL</p>
        <input type="text" class="input">
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <label>
        <p class="label-txt">ENTER YOUR PASSWORD</p>
        <input type="text" class="input">
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <button type="submit">Sign in</button>
</form>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection('form')




    