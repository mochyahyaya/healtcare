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
                     <section class="text-gray-600 body-font">
                       <div class="container px-5 py-24 mx-auto">
                         <div class="flex flex-col text-center w-full mb-20">
                           <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Medical Record</h1>
                           <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p>
                          </div>
                          <div class="flex flex-wrap -m-2">
                            @foreach ($users as $item)
                            <div class="p-2 lg:w-1/4 md:w-1/2 w-full">
                              <a href="{{ route('veterinarian/medicalusers', ['id'=>$item->id]) }}">
                                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                                  <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80" alt="" >
                                  <div class="flex-grow">
                                    <h2 class="text-gray-900 title-font font-medium">{{$item->name}}</h2>
                                    <p class="text-gray-500">{{$item->email}}</p>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </a>
                      </div>
                    </section>
                 </div>
               </div>
             </div>
               <div>
                 {{-- Showing {{$data -> firstItem()}} to {{$data -> lastItem()}} out of {{$data->total()}} items --}}
               </div>
               <div class="mt-5">
                   {{-- {{$data ->links()}} --}}
               </div>