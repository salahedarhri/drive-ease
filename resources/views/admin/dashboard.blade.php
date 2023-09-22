@extends('admin.layout')

@section('content')
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1>Espace Administrative</h1>
        </div>
        <div class="dashboard-widgets">
            <div class="widget">
                <h2>Utilisateurs</h2>
                <div class="widget-content">
                    <!-- Display user-related statistics, charts, or information -->
                </div>
            </div>
            <div class="widget">
                <h2>Réservations</h2>
                <div class="widget-content">
                    <!-- Display reservation-related statistics, charts, or information -->
                </div>
            </div>
            <div class="widget">
                <h2>Voitures</h2>
                <div class="widget-content">
                    <!-- Display car-related statistics, charts, or information -->
                </div>
            </div>
            <!-- Add more widgets as needed -->
        </div>
    </div>
@endsection
