<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        List Data Hotel
    </h2>
  </x-slot>

<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">

        @foreach ($data as $items)
        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">
                   @if ($items->cages->typecages->alias == 'CT')
                    <div>
                        <img alt="Kucing" class="block h-full w-full fit" style="height: 200px; width: 500px" src="{!! asset('tempt/images/cat.jpg') !!}">
                    </div>
                    @else
                    <div>
                        <img alt="Anjing" class="block h-auto w-full " style="height: 200px; width: 500px"  src="{!! asset('tempt/images/dog-2.jpg') !!}">
                    </div>
                   @endif

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black" href="#">
                                <span> Kandang </span> <br>
                                {{$items->cages->typecages->alias}}-{{$items->cages->number}}
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            <span> Tanggal keluar </span> <br>
                            {{ \Carbon\Carbon::parse($items->end_date)->locale('id')->format('d M Y')}}
                        </p>
                    </header>

                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                            <img alt="Placeholder" class="h-10 w-10 rounded-full" src="{{ url('storage/photos/'.$items->pets->featured_image )}}">
                            <p class="ml-2 text-sm">
                               {{$items->pets->name}}
                            </p>
                        </a>
                        <a class="no-underline text-grey-darker hover:text-red-dark" href="{{ route('monitorings', ['id'=>$items->id]) }}">
                            <span class="hidden">Lihat</span>
                            <i class="fa fa-book-medical"></i>
                        </a>
                    </footer>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->
            @endforeach
    </div>
