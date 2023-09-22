<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Espace Client') }}
        </h2>
            @if (auth()->user()->is_admin)
            <h1>Ce compte est de type Admin</h1>
            @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenue,  ") }} {{ $user->name }}
                </div>

                <link rel="stylesheet" href="{{ asset('css/style4.css') }}">

                <!-- Dans la zone blanche -->

                @if (!auth()->user()->is_admin)

                <div class="reserv">
                    <h2>Vos Réservations</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID Réservation</th>
                            <th>ID Voiture</th>
                            <th>Date de début</th>
                            <th>Date de fin</th>
                            <th>Nombre de Jours</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->id }}</td>
                                <td>{{ $reservation->voiture->name }}</td>
                                <td>{{ $reservation->datedebut }}</td>
                                <td>{{ $reservation->datefin }}</td>
                                <td>{{ $reservation->nbJours }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">Pas de réservations pour le moment.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
