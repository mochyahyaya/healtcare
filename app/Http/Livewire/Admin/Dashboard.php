<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Illuminate\Support\Facades\Gate;

class Dashboard extends Component
{
    public $message = 'Hello World!';

    public function render()
    {
        if(Gate::denies('manage-admins')){
            abort(403);
        }
        $columnChartModelgroom = 
    (new ColumnChartModel())
        ->setTitle('Grooming')
        ->addColumn('Anjing', 100, '#fc8181')
        ->addColumn('Kucing', 200, '#349eeb');

        $columnChartModelboard = 
    (new ColumnChartModel())
        ->setTitle('Boarding')
        ->addColumn('Anjing', 100, '#fc8181')
        ->addColumn('Kucing', 200, '#349eeb');

        $columnChartModelbreed = 
    (new ColumnChartModel())
        ->setTitle('Breeding')
        ->addColumn('Anjing', 100, '#fc8181')
        ->addColumn('Kucing', 200, '#349eeb');

        return view('livewire.admin.dashboard')
        ->with([
            'columnChartModelgroom' => $columnChartModelgroom,
            'columnChartModelboard' => $columnChartModelboard,
            'columnChartModelbreed' => $columnChartModelbreed,
        ]);
    }
}
