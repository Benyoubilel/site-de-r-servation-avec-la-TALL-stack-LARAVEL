<div class="py-4 text-left px-6 text-indigo-500">
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form wire:submit.prevent="submit" class="col-span-1 lg:col-span-6">
        <h4 class="text-3xl text-gray-700 mb-5">Informations de paiement</h4>
        <div class="p-10 rounded-md shadow-md bg-white">
            <div class="mb-6">
                <label class="block mb-3 text-gray-600" for="">Nom sur la carte</label>
                <input wire:model="name" name="name" type="text" class="border border-gray-500 @error('name')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-wider"/>
            </div>
            <div class="mb-6">
                <label class="block mb-3 text-gray-600" for="">Numéro de la carte</label>
                <input wire:model="number" name="number" type="text" class="border  border-gray-500 @error('number')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>
            </div>
            <div class="mb-6 flex flex-wrap -mx-3w-full">
                <div class="w-2/3 px-3">
                    <label class="block mb-3 text-gray-600" for="">Date d'expiration</label>
                    <div class="flex">
                        <input wire:model="month" name="month" class="border border-gray-500 @error('month')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest mr-6" placeholder="Mois">
                        <input wire:model="year" name="year" class="border border-gray-500 @error('year')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest" placeholder="Année">           
                    </div>
                </div>
                <div class="w-1/3 px-3">
                    <label class="block mb-3 text-gray-600" for="">CVC</label>
                    <input wire:model="cvc" name="cvc" type="text" class="border border-gray-500 @error('cvc')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>
                </div>

            </div>
        </div>                
        <div class="flex justify-end pt-2 my-2">
            <button type="submit" class="w-full text-ceenter px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
                Confirmation du paiment
            </button>
        </div>
    </form>        
</div>