<?php

namespace App\Http\Livewire;

use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use LivewireUI\Modal\ModalComponent;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;

class Payment extends ModalComponent
{
    public $enventId;
    public $name;
    public $number;
    public $year = '2021';
    public $month = '01';
    public $cvc;

    protected function rules()
    {
        return [
            'name' => 'required|string',
            'number' => ['required', new CardNumber],
            'year' => ['required', new CardExpirationYear($this->month)],
            'month' => ['required', new CardExpirationMonth($this->year)],
            'cvc' => ['required', new CardCvc($this->number)]
        ];
    }

    public function mount($enventId)
    {
        $this->enventId = $enventId;
    }

    public function render()
    {
        return view('livewire.payment');
    }

    public function submit()
    {
        $this->validate();
        $this->closeModal(); 
        $this->emit('eventRented', $this->enventId);
    }
}