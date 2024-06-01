@extends('templates.main')

@section('css')
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
   integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
   crossorigin=""/>

<link href="/css/map.css" rel="stylesheet">
@endsection

@section('container')
<div class="container">

    <div class="card rounded mt-3">
        <div class="card-header">Titik Koordinat Pengukuran</div>
        <div class="card-body">
            <div id="map">
              
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script
src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>

<script src="/js/dashboard.js"></script></body>
@endsection