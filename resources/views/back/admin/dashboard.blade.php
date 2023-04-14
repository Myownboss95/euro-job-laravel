@extends('layouts.back')
@section('title', 'Admin Dashboard')

@section('content')
    <!-- row -->
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
            <h2 class="mb-3 me-auto">Dashboard</h2>
        </div>


    </div>
@endsection

@push('js')
    <!-- Apex Chart -->
    <script src="/assets/back/vendor/apexchart/apexchart.js"></script>
    <script src="/assets/back/js/dashboard/dashboard-1.js"></script>
    <script src="/assets/back/js/dashboard/dotted-map-init.js"></script>

@endpush

