@extends('layouts.app')
@section('content')
<h2> Ayo simpan data Anda !</h2>
<form action="/karya/alat/alat-simpan-data" method="POST">
    @csrf
    <label>Data 1</label>
    <input type="text" name="data1">
    <label>Data 2</label>
    <input type="text" name="data2"> 
    <button  type="submit" class="btn btn-primary">Submit</button>
</form>

<h2>Ini semua data yg tersimpan :</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">First</th>
        <th scope="col">Second</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
      <tr>
        <th scope="row">1</th>
        <td>{{$item['data1']}}</td>
        <td>{{$item['data2']}}</td>
      </tr>            
      @endforeach
    </tbody>
  </table>
@endsection