<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;

class BookingManager extends Component
{
    public $start_date;
    public $end_date;
    public $property_id;

    public function book()
    {
        Booking::create([
            'user_id' => auth()->id(),
            'property_id' => $this->property_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        session()->flash('message', 'Booking successful!');
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}