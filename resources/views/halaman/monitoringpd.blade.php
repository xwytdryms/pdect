@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="/css/monitoringpd.css">
@endsection

@section('title')
    PD Views
@endsection

@section('content-pdect')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Monitoring Dashboard</h1>
    </div>

@if ($uplink)

        {{-- Status --}}
        <div class="row">
            <div class="col-md-6 offset-3 col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h6 class="mb-3 text-center text-gray-800"><b>Status : {{ $uplink['status'] }}</b></h6>
                        <div class="card shadow item-center border-bottom-dark ">alo</div>
                    </div>
                </div>
            </div>
        </div>
    
        {{-- Value 1 --}}
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h6 class="mb-3 text-center text-gray-800"><b>dB Min : {{ $uplink['dBMin'] }}</b></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h6 class="mb-3 text-center text-gray-800"><b>dB Max : {{ $uplink['dBMax'] }}</b></h6>
                    </div>
                </div>
            </div>
        </div>
    
        {{-- Value 2 --}}
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h6 class="mb-3 text-center text-gray-800"><b>dB Avg : {{ $uplink['dBA'] }}</b></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h6 class="mb-3 text-center text-gray-800"><b>Arc Counter : {{ $uplink['Arc'] }}</b></h6>
                    </div>
                </div>
            </div>
        </div>

@else

<div class="container-fluid">
    <h3>No Uplink Detected</h3>
</div>

@endif

</div>

@endsection

@section('javascript')
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            @if($uplink)
                let uplink = {!! json_encode($uplink) !!};
                let Waspada = uplink.status === 'Waspada';
                let Kritis = uplink.status === 'Kritis';

                // Call stateBox function from monitoringpd.js with initial state box color
                stateBox('#ffffff', Waspada, Kritis);
            @endif
        });
    </script>
    <script src="/js/monitoringpd.js"></script>
@endsection

