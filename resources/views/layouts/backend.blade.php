@extends('layouts.app', ['body_class' => 'bg-light'])

@push('styles')
    @vite('resources/styl/flatpickr.styl')
    <livewire:styles />
@endpush

@section('body')
    <header class="sticky-top shadow-sm mb-3">
        @include('partials.navbar.backend')
    </header>
    <div class="container py-5">
        @include('flash::message')
        @yield('breadcrumbs')
        <div class="row">
            <div class="d-none d-lg-block col-lg-3 col-xl-2">
                @include('partials.sidenav')
            </div>
            <div class="col-12 col-lg-9 col-xl-10">
                @yield('content')
            </div>
        </div>
    </div>
    <footer class="d-lg-none py-3">
        <p class="text-center mb-0">
            <small class="text-muted">
                {{ __(':app © :year.', ['app' => config('app.name', 'Laravel'), 'year' => date('Y')]) }}
                {{ __('All rights reserved.') }}
            </small>
        </p>
    </footer>
@endsection

@prepend('scripts')
    <livewire:scripts />
    <script>
        window.trumbowyg_icons = '{{ asset('images/trumbowyg-icons.svg') }}';
    </script>
    @routes
@endprepend
