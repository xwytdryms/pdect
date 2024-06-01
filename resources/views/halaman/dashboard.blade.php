@extends('layouts.app')

@section('title')
    PDect
@endsection

{{-- @push('addon-style')
    <!-- Custom styles for this page -->
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush --}}

@section('content-pdect')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Monitoring Dashboard</h1>
        </div>

        {{-- COGS --}}
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>

        {{-- SSE --}}
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>

        {{-- GA --}}
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>

@endpush