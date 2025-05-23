 
 @extends('layouts.app')
 @section('content')
  <div class="mt-4">
     <form method="POST" action="{{ route('reservation.store')}}" >
         @csrf
         <div class="mb-4">
             <label for="visitDate" class="block text-sm font-medium text-gray-700">Date souhaitée</label>
             <input type="date" name="dateDemande"
                 class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
         </div>
         <div class="mb-4">
             <label for="visitTime" class="block text-sm font-medium text-gray-700">Heure souhaitée</label>
             <select id="visitTime" name="nbHours"
                 class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                 <option value="9h-12h">9h-12h</option>
                 <option value="14h-18h">14h-18h</option>
                 <option value="Soirée">Soirée</option>
                 <option value="Week-end">Week-end</option>
             </select>
         </div>
         <div class="mb-4">
             <label for="visitName" class="block text-sm font-medium text-gray-700">Votre nom complet</label>
             <input type="text" id="visitName" name="nameComplait"
                 class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
         </div>
         <div class="mb-4">
             <label for="visitPhone" class="block text-sm font-medium text-gray-700">Téléphone</label>
             <input type="tel" id="visitPhone" name="phone"
                 class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
         </div>
         <div class="mb-4">
             <label for="visitMessage" class="block text-sm font-medium text-gray-700">Message (optionnel)</label>
             <textarea id="visitMessage" name="message" rows="3"
                 class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
         </div>
         <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button  class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm" >
                        Envoyer la demande
                    </button>
                    <button class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" >
                        Annuler
                    </button>
                </div>
     </form>
 </div>
    
 @endsection
