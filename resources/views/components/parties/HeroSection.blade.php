<!-- Hero Section with Search -->
    <div  id="accueil" class="relative bg-blue-700">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
            <div class="absolute inset-0 bg-blue-700 mix-blend-multiply" aria-hidden="true"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Trouvez votre maison de rêve</h1>
            <p class="mt-6 text-xl text-blue-100 max-w-3xl">Parcourez notre sélection de propriétés exclusives dans les meilleurs quartiers.</p>
        </div>
    </div>

        <!-- Search Box -->
    <div id="proprietes" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 mb-16">
        <div class="search-box rounded-lg shadow-xl p-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700">Localisation</label>
                    <select id="location" name="location" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                        <option>Tous</option>
                        <option>Paris</option>
                        <option>Lyon</option>
                        <option>Marseille</option>
                        <option>Bordeaux</option>
                    </select>
                </div>
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                    <select id="type" name="type" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                        <option>Tous</option>
                        <option>Appartement</option>
                        <option>Maison</option>
                        <option>Villa</option>
                        <option>Terrain</option>
                    </select>
                </div>
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Prix max</label>
                    <select id="price" name="price" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                        <option>Illimité</option>
                        <option>200,000 €</option>
                        <option>300,000 €</option>
                        <option>500,000 €</option>
                        <option>1,000,000 €</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button type="button" class="w-full inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-search mr-2"></i> Rechercher
                    </button>
                </div>
            </div>
        </div>
    </div>