<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agence Immobilière | Trouvez votre propriété idéale</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    html {
        scroll-behavior: smooth;
    }

    /* Highlight active section in navigation */
    .nav-link {
        transition: all 0.3s ease;
    }

    .nav-link.active {
        border-color: #3b82f6;
        color: #111827;
    }

    .property-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .property-card {
        transition: all 0.3s ease;
    }

    .search-box {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(5px);
    }

    .dashboard-sidebar {
        min-height: calc(100vh - 64px);
    }

    .notification-badge {
        position: absolute;
        top: -5px;
        right: -5px;
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

    #backToTop {
        transition: opacity 0.3s, visibility 0.3s;
    }

    #backToTop.visible {
        opacity: 1;
        visibility: visible;
    }

    #profile-menu {
        transition: all 0.3s ease;
        max-height: 500px;
        overflow: hidden;
    }

    #profile-menu.collapsed {
        max-height: 0;
        opacity: 0;
        padding: 0;
        margin: 0;
        border: none;
    }
</style>

<body class="bg-gray-50">

    {{-- Navigation --}}
    @include('components.parties.Navigation')
    {{-- Navigation --}}
    {{-- Hero Section --}}
     @if (request()->is('/'))
        @include('components.parties.HeroSection')
    @endif
    
    {{-- Hero Section --}}

    {{-- Content --}}
    @yield('content')

    {{-- Agent Section --}}
    @if (request()->is('/'))
    @include('components.parties.AgentsSection')
    @endif

    {{-- Client Review --}}
     @if (request()->is('/'))
    @include('components.parties.ClienReview')
    @endif

    {{-- Contact Section  --}}
     @if (request()->is('/'))
    @include('components.parties.Contact')
    @endif

    {{-- Footer --}}
    @if (request()->is('/'))
    @include('components.parties.Footer')
    @endif

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
