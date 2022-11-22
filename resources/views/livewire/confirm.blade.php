<div class="bg-white rounded-lg shadow-lg z-50 overflow-y-auto">
  <div class="py-4 text-left px-6 text-indigo-500">

      <div class="flex justify-between items-center pb-3">
        <p class="text-2xl font-bold">Vous êtes presque arrivé !</p>
      </div>

      <p>Vous avez sélectionné ces dates :</p>
      <br>
      <p>Date de début : {{ \Carbon\Carbon::parse($dateStart)->format('d-m-Y') }}</p>
      <p>Date de fin : {{ \Carbon\Carbon::parse($dateEnd)->format('d-m-Y') }}</p>
      <br>        
      @guest
        <p class="text-center text-red-700">Vous devez être connecté pour réserver !</p>
      @else
        @if($stepRented)
          <p class="text-justify">Votre séjour est maintenant préréservé. Vous devez procéder au paiement dans un délai de 7 jours ou la veille du départ pour un séjour commençant avant 7 jours. Pour effectuer votre réglement veuillez vous rendre sur votre compte.</p>
        @endif
        @if($errorRented)
          <p class="text-center text-red-700">Désolé mais quelqu'un a réservé avant vous !</p>
        @endif
      @endguest          
      <br>

      @auth
        <div class="flex justify-end pt-2">
            @unless($stepRented || $errorRented)
              <button wire:click="checkEvent" class="px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400 mr-2 ">Je confirme</button>
            @endunless
        </div>
      @endauth

    </div>      
</div>