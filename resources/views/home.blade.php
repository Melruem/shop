@extends('master')

@section('breadcrumbs')
    <div class="breadcrumbs">
       
    </div>
@endsection

@section('content')
    @include('dashboard')
@endsection

@section('script')
    <script src="{{ asset('js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/widgets.js') }}"></script>
    <script src="{{ asset('js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('js/jquery.vmap.world.js') }}"></script>
@endsection
