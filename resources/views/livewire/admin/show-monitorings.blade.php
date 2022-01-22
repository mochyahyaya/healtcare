<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        List Data Hotel
    </h2>
  </x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6">
             <div class="flex px-4 py-3 sm:px-6">
                <div class="flex-1 float-left">   
                    <a href="{{ route('admin/hotels') }}"> 
                        <button class="inline-flex items-center px-4 py-2 bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 active:bg-white focus:outline-none focus:border-white focus:ring focus:ring-white disabled:opacity-25 transition">
                            {{ __('Boarding') }}
                        </button>
                    </a>
                    <a href="{{ route('admin/showmonitorings') }}"> 
                        <button class="inline-flex items-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-500 active:bg-white focus:outline-none focus:border-white focus:ring focus:ring-white disabled:opacity-25 transition">
                            {{ __('Monitoring') }}
                        </button>
                    </a>
                </div>
                <div class="flex-2 float-right">
                    <x-jet-input id="name" type="text" wire:model.debounce.500ms="searchTerm" placeholder="Search..." />
                </div>
              </div>
              <div class="flex flex-col">
                  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                     <div class="">
                        <div class="container my-6 mx-auto px-4 md:px-6">
                            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                                @foreach ($data as $items)
                                <!-- Column -->
                                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                                        <!-- Article -->
                                        <article class="overflow-hidden rounded-lg shadow-lg">
                                           @if ($items->pets->typepet->name == 'Kucing')
                                            <div>
                                                <img alt="Kucing" class="block h-full w-full fit" style="height: 150px; width: 500px" src="{!! asset('tempt/images/cat.jpg') !!}">
                                            </div>
                                            @elseif($items->pets->typepet->name == 'Anjing')
                                            <div>
                                                <img alt="Anjing" class="block h-auto w-full " style="height: 150px; width: 500px"  src="{!! asset('tempt/images/dog-2.jpg') !!}">
                                            </div>
                                            @else
                                           @endif
                        
                                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                                <h1 class="text-lg">
                                                    <a class="no-underline hover:underline text-black" href="#">
                                                        <span> Kandang </span> <br>
                                                        {{$items->cages->typecages->alias ?? '' }} - {{$items->cages->number ?? ''}} 
                                                    </a>
                                                </h1>
                                                <p class="text-grey-darker text-sm">
                                                    <span> Tanggal keluar </span> <br>
                                                    {{ \Carbon\Carbon::parse($items->end_date)->locale('id')->format('d M Y')}}
                                                </p>
                                            </header>
                        
                                            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                                <a class="flex items-center no-underline hover:underline text-black" href="#">
                                                    <img alt="{{$items->pets->name}}" class="h-10 w-10 rounded-full" src="{{  url('storage/featured_image/'.$items->pets->featured_image )}}">
                                                    <p class="ml-2 text-sm">
                                                       {{$items->pets->name}}
                                                    </p>
                                                </a>
                                                <a class="no-underline text-grey-darker hover:text-red-dark" href="{{ route('monitorings', ['id'=>$items->id]) }}">
                                                    <span class="hidden">Lihat</span>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                            </footer>
                        
                                        </article>
                                        <!-- END Article -->
                        
                                    </div>
                                    <!-- END Column -->
                                    @endforeach
                            </div>
                        </div>
                     </div>
                    </div>
                  </div>
              </div> 
            </div>
        </div>
    </div>
</div>
