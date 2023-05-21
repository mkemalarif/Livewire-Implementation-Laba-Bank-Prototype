<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use App\Models\data;

class DataStatus extends Component
{
    // public $isActive = [];

    // public function mount()
    // {
    //     // set initial values for isActive for each row
    //     $this->isActive = array_fill(0, count(data::all()), false);
    // }

    // public function toggle($index)
    // {
    //     $this->isActive[$index] = !$this->isActive[$index];
    // }

    public function toggleEdit($id)
    {
        $data = data::find($id);
        if ($data) {
            $data->update([
                'kehadiran' => $data->kehadiran === 'hadir' ? 'tidakHadir' : 'hadir'
            ], ['kehadiran']);
        }
    }

    public function render()
    {
        return view('livewire.data-status', [
            'data' => data::all()
        ]);
    }
}
