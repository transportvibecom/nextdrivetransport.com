<?php

namespace App\Livewire;

use App\Models\Zipcode;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LocationComponent extends Component
{
    public $location = '';
    public $name;
    public $placeholder;

    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        $results = Zipcode::where('zipcode', 'like', '%' . $this->location . '%')->orWhere('place', 'like', '%' . $this->location . '%')->get()->take(5);
        return view('livewire.location-component', ['results' => $results]);
    }
}
