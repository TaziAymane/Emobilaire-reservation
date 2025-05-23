@extends('layouts.app')
@section('content')
        <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Nos dernières propriétés</h2>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    <i class="fas fa-th-list mr-1"></i> Liste
                </button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    <i class="fas fa-map-marker-alt mr-1"></i> Carte
                </button>
            </div>
        </div>

        <!-- Property Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Property Card 1 -->
            <div class="property-card bg-white rounded-lg overflow-hidden shadow-md">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Modern house">
                    <div class="absolute top-2 right-2 bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded">Nouveau</div>
                    <div class="absolute bottom-2 left-2 bg-white text-gray-800 text-xs font-bold px-2 py-1 rounded flex items-center">
                        <i class="fas fa-camera mr-1 text-blue-600"></i> 12
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Belle maison moderne</h3>
                            <p class="text-gray-500 text-sm"><i class="fas fa-map-marker-alt text-blue-600 mr-1"></i> Paris 15ème</p>
                        </div>
                        <div class="text-blue-600 font-bold text-xl">450,000 €</div>
                    </div>
                    <div class="flex justify-between mt-4 text-sm text-gray-500">
                        <span><i class="fas fa-bed text-blue-600 mr-1"></i> 3 chambres</span>
                        <span><i class="fas fa-bath text-blue-600 mr-1"></i> 2 salles de bain</span>
                        <span><i class="fas fa-ruler-combined text-blue-600 mr-1"></i> 120 m²</span>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                        <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            <i class="far fa-heart mr-1"></i> Favoris
                        </button>
                        <a href="{{ route('reservation.create')}}"  class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm font-medium">
                            <i class="far fa-calendar-alt mr-1"></i> Visite
                        </a>
                    </div>
                </div>
            </div>



        <!-- Pagination -->
        
    </div>
@endsection