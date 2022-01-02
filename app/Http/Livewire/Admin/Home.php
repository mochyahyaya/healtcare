<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class Home extends Component
{
    public function render()
    {
        $view = $this->getView();

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

            return view($view)
            ->with([
                'columnChartModelgroom' => $columnChartModelgroom,
                'columnChartModelboard' => $columnChartModelboard,
                'columnChartModelbreed' => $columnChartModelbreed,
            ]);

    }
    private function getView()
    {
        /** @var User $user */
        $user = Auth::user();
        if ($user->hasRole('Admin'))
        {
            return 'livewire.admin.dashboard';
        } else if ($user->hasRole('Dokter'))
        {
            return 'livewire.veterinarian.dashboard';
        }
        else if ($user->hasRole('User'))
        {
            return 'livewire.user.dashboard';
        }
    }
}
