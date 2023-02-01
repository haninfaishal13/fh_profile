@extends('_layout.main_backsite')
@section('title', 'Profile | Dashboard')
@section('content')
    <div class="container mt-4">
        Ini halaman Dashboard
    </div>
@endsection
@section('after-script')
    <script src="{{asset('js/backsite/dashboard/index.js')}}"></script>
@endsection
