@extends('_layout.main_backsite')
@section('title', 'Backsite | Profile')
@section('content')
    <div class="container">

        <div class="d-flex justify-content-between mt-4">
            <ul class="nav nav-segment" id="expensesTab" role="tablist">
                <li class="nav-item page-nav active" data-page="profile">
                    Profile
                </li>
                <li class="nav-item page-nav" data-page="education">
                    Education
                </li>
                <li class="nav-item page-nav" data-page="contact">
                    Contact
                </li>
                <li class="nav-item page-nav" data-page="skill">
                    Skill
                </li>
                <li class="nav-item page-nav" data-page="link">
                    Link
                </li>
                <li class="nav-item page-nav" data-page="portofolio">
                    Portofolio
                </li>
            </ul>
            <div class="">
                <button class="btn btn-primary" id="btn-preview"><i class="fas fa-search me-2"></i></i>Preview</button>
                <button class="btn btn-success" id="btn-save"><i class="fas fa-save me-2"></i></i>Save</button>
            </div>

        </div>
        <div class="card mt-3 page active" id="view-profile">
            @include('partials.backsite.profile.profile')
        </div>
        <div class="card mt-3 page" id="view-education">
            @include('partials.backsite.profile.education')
        </div>
        <div class="card mt-3 page" id="view-contact">
            @include('partials.backsite.profile.contact')
        </div>
        <div class="card mt-3 page" id="view-skill">
            @include('partials.backsite.profile.skill')
        </div>
        <div class="card mt-3 page" id="view-link">
            @include('partials.backsite.profile.link')
        </div>
        <div class="card mt-3 page" id="view-portofolio">
           @include('partials.backsite.profile.portofolio')
        </div>
    </div>
@endsection
@section('after-script')
    <script src="{{asset('js/backsite/profile/navigation.js')}}"></script>
    <script src="{{asset('js/backsite/profile/index.js')}}"></script>
@endsection
