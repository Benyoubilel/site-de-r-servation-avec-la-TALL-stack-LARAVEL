<?php

namespace App\Http\Livewire;

use App\Models\Event;
use LivewireUI\Modal\ModalComponent;

class Confirm extends ModalComponent
{
    public $calendarId;
    public $dateStart;
    public $dateEnd;
    public $stepRented = '';
    public $errorRented = false;

    public function mount($calendarId, $dateStart, $dateEnd)
    {
        $this->calendarId = $calendarId;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
    }

    public function render()
    {
        return view('livewire.confirm');
    }

    public function checkEvent()
    {
        $result = Event::whereRaw('home_id = ' . $this->calendarId . " and  (('" . $this->dateStart . "' >= start and '" . $this->dateStart  . "' < end) or ('" . $this->dateEnd . "' > start and '" . $this->dateEnd  . "' <= end) or (start >= '" . $this->dateStart . "' and start < '" . $this->dateEnd . "'))")->count();

        $this->stepRented = $result == 0;
        $this->errorRented = !$this->stepRented;

        $this->emit('eventChecked', [            
            'id' => $this->calendarId, 
            'ok' => $this->stepRented,
        ]);    
    }
}
