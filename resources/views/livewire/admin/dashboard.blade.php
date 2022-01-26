<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }} 
    </h2>
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-green-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Total Member</h5>
                                        <h3 class="font-bold text-3xl">3 <span class="text-green-500"><i class="fas fa-user"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-cat fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Total Pet</h5>
                                        <h3 class="font-bold text-3xl">5 <span class="text-pink-500"><i class="fas fa-dog"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-home fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Total Kandang</h5>
                                        <h3 class="font-bold text-3xl">2 <span class="text-yellow-600"><i class="fab fa-simplybuilt"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                    </div>
        
        
                    <div class="flex flex-row flex-wrap flex-grow mt-2">
        
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h5 class="font-bold uppercase text-gray-600">Grooming</h5>
                                </div>
                                <div class="p-5" style="height: 280px !important">
                                    <livewire:livewire-column-chart
                                    :column-chart-model="$columnChartModelgroom "
                                />  
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>
        
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h5 class="font-bold uppercase text-gray-600">Boarding</h5>
                                </div>
                                <div class="p-5">
                                    <div class="p-5" style="height: 240px !important">
                                        <livewire:livewire-column-chart
                                        :column-chart-model="$columnChartModelboard"
                                    />  
                                    </div>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>
        
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h5 class="font-bold uppercase text-gray-600">Breeding</h5>
                                </div>
                                    <div class="p-5" style="height: 280px !important">
                                        <livewire:livewire-column-chart
                                        :column-chart-model="$columnChartModelbreed"
                                    />  
                                    </div>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>
        
                        <div class="w-full p-6">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h5 class="font-bold uppercase text-gray-600">Notifikasi</h5>
                                </div>
                                <div class="p-5"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><canvas id="chartjs-4" class="chartjs chartjs-render-monitor" width="482" height="241" style="display: block; width: 482px; height: 241px;"></canvas>
                                    <script>
                                        new Chart(document.getElementById("chartjs-4"), {
                                            "type": "doughnut",
                                            "data": {
                                                "labels": ["P1", "P2", "P3"],
                                                "datasets": [{
                                                    "label": "Issues",
                                                    "data": [300, 50, 100],
                                                    "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                                }]
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <livewire:scripts />
    @livewireChartsScripts
