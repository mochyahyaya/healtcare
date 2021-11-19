<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Rekam Medis
  </h2>
</x-slot>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-6">
              <div class="flex px-4 py-3 sm:px-6">
               <div class="flex-1 float-left">   
                   <x-jet-button wire:click="">
                       {{ __('Tambah') }}
                   </x-jet-button>
               </div>
               <div class="flex-2 float-right">
                   <x-jet-input id="name" type="text" wire:model.debounce.500ms="" placeholder="Search..." />
               </div>
              </div>  
           
               {{-- Data Tables --}}
               <!-- This example requires Tailwind CSS v2.0+ -->
           <div class="flex flex-col">
               <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                 <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                   <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                     <div class="row mb-4">
                       <div class="col form-inline">
                         Per Page: &nbsp;
                         <select wire:model="perPage" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                           <option>5</option>
                           <option>10</option>
                           <option>25</option>
                           <option>50</option>
                         </select>
                       </div>
                     </div>
                     @foreach ($users as $item)
                     <div class="inline-flex items-center bg-white border border-gray-200 rounded-lg shadow shadow-lg p-3 w-full md:w-1/4 m-4">
                        <div class="text-gray-700">
                          <h2 class="text-gray-800 font-bold text-2xl">{{$item->name}}</h2>
                          <p class="text-sm">Director of Marketing</p>
                          <p class="text-sm">hola@rocketfy.es</p>
                          <p class="text-sm">+34 951043774</p>
                        </div>     
                      </div>
                        @endforeach
                 </div>
               </div>
             </div>
               <div>
                 {{-- Showing {{$data -> firstItem()}} to {{$data -> lastItem()}} out of {{$data->total()}} items --}}
               </div>
               <div class="mt-5">
                   {{-- {{$data ->links()}} --}}
               </div>