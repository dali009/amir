@extends('layouts.app')
@section('content')
 <style>
     body{
        font-family: Arial, Helvetica, sans-serif;
        background-repeat: no-repeat;
        width: 100%;

        background: rgb(70,136,239);
        background-image: linear-gradient(90deg, #4688ef, #00a5fa, #00bffc, #43d6f9, #7debf5);
    }
</style>
    <div class="container">
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br>
        <form action="{{ route('printKitting') }}" method="POST" class="row g-3">
            @csrf
            @method('POST')
            <center>
<div class="d-grid gap-2 col-6 mx-auto">
    <input type="text" name="id" placeholder="Search material..." class="form-control">
    <button type="submit" class="btn btn-dark mb-3 ">Print</button>
</div>
            </center>
        </form>
    </div>
    </div>
@endsection




