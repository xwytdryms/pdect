@extends('templates.main')

@section('css')
    <link rel="stylesheet" href="/css/manajemen.css">
@endsection

@section('container')
    <h1 class="h1">Halaman Manajemen Perangkat</h1>
 
    <div class="d-flex p-2">
      <table class="table table-hover table-light table-striped" id="device_table">
      <thead>
        <tr>
          <th scope="col">Num</th>
          <th scope="col">Device id</th>
          <th scope="col">Device Name</th>
          <th scope="col">Device EUI</th>
          <th scope="col">Description</th>
          <th scope="col">Address</th>
          <th scope="col">Latitude</th>
          <th scope="col">Longitude</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($device as $device)
        <tr>
          <th scope="row">{{ $device['id'] }}</th>
          <td>{{ $device['device_id'] }}</td>
          <td>{{ $device['device_name'] }}</td>
          <td>{{ $device['device_eui'] }}</td>
          <td>{{ $device['description'] }}</td>
          <td>{{ $device['address'] }}</td>
          <td>{{ $device['latitude'] }}</td>
          <td>{{ $device['longitude'] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <button type="button" class="btn-tambah" >Tambah Perangkat</button>
  
@endsection

@section('javascript')
    <script src="/js/manajemen.js"></script>
@endsection