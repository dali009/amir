@extends('layouts.app')
@section('content')
<center>
    @if(session('deleteInput'))
<br>
        <div class="alert alert-danger" role="alert">
            {{ session('deleteInput')}}
         </div>
    @endif
</center>
<br><br><br>
<center>
@if ($alert=Session::get('success'))
    <div class="alert alert-success" role="alert">
        File imported succesfuly
    </div>
@endif
</center>
@error('file')
<center>
    <div class=" d-grid gap-2 col-6 alert alert-danger d-flex align-items-center" role="alert">
        The uploaded file is not excel
    </div>
</center>
 @enderror
 <div class="container">
    <div class="border">
<form method=POST action="{{ route('import')}}" enctype="multipart/form-data" >
    {{ csrf_field() }}
    @method('POST')
<br><br><br>
<center>
    <div class="mb-3">
    <input type="file" name="file" >
    </div>
</center>
    </div>
  <br><br>
<center>
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary btn-lg" >Import</button>
        </div>
</center>
</form>
<br><br>
<div id="print">
    <table class="table table-striped table-hover" >
        <thead>
            <tr>
                <th>Record</th>
                <th>Date import </th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inputs as $input)
                <td> {{$input->record}}</td>
                <td> {{$input->created_at}}</td>
                <td>
               <form action="{{ route('delete', $input->record)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('show', $input->record)}}" type="submit" class="btn btn-info">Show</a>
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
 </div>


<script>
    function loading () {
    document.getElementById("loading").style.display = "block";
    };
</script>
@endsection
