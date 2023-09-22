<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DE : Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <header class="admin-header">
        <div class="admin-header__logo">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Admin Logo">
            </a>
        </div>
        <nav class="admin-header__navigation">
            <ul class="admin-nav">
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.users.index') }}">Utilisateurs</a></li>
                <li><a href="{{ route('admin.reservations.index') }}">Réservations</a></li>
                <li><a href="{{ route('admin.voitures.index') }}">Voitures</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </nav>
        <div class="admin-header__user">
            <span>Bienvenue, {{ auth()->user()->name }}</span>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Se déconnecter
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </header>

    <main class="admin-main">
        <div class="admin-sidebar">
            <!-- Sidebar content -->
        </div>

        <div class="admin-content">
            @yield('content')
        </div>
    </main>

    <footer class="admin-footer">
        <p>&copy; {{ date('Y') }} Drive Ease. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
