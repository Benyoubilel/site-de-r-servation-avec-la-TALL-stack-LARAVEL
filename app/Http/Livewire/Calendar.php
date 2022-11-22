<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{ Home, Event };
use Carbon\Carbon;

class Calendar extends Component
{
    public $events = [];
    public $idCalendar;

    public function addEvent($event)
    {
        // Détermination date limite de paiement
        $start = Carbon::createFromFormat('Y-m-d', $event['start']);
        $diff = Carbon::now()->diffInDays($start);
        $event['limit'] = $start->subDays($diff < 8 ? 1 : 7)->toDateString();

        $event['user_id'] = auth()->id();
        $event['home_id'] = $this->idCalendar;
        Event::create($event);   
    }

    public function render()
    {
        $this->events = json_encode(Home::find($this->idCalendar)->events()->get());

        return view('livewire.calendar');
    }
}