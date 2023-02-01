@extends('_layout.main_backsite')
@section('title', 'Backsite | Blog')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mt-4 mb-2">
            <ul class="nav nav-segment" id="expensesTab" role="tablist">
                <li class="nav-item page-nav active" data-page="dashboard">
                    Dashboard
                </li>
                <li class="nav-item page-nav" data-page="create">
                    Create Post
                </li>
            </ul>
        </div>
        <div class="card page shadow-sm active" id="view-dashboard">
            @include('partials.backsite.blog.dashboard')
        </div>
        <div class="card page shadow-sm" id="view-create">
            @include('partials.backsite.blog.create')
        </div>
    </div>
@endsection
@section('after-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    <script src="{{asset('js/backsite/blog/index.js')}}"></script>
@endsection
