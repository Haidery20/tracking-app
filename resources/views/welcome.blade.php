@extends('layouts.app')

@section('title', 'KONEKTA - Web Hosting, Web Design, and Bulk SMS Services')

@push('styles')
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
@endpush

@section('content')
    <div id="app">
        <!-- React app will be mounted here -->
    </div>

    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
@endsection

@push('scripts')
    <script>
        console.log('welcome.blade.php: Page loaded');
        window.addEventListener('error', function(event) {
            console.error('Script loading error:', event);
        });
    </script>
@endpush 