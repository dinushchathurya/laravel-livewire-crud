<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Users extends Component
{
    public $users,$name,$email,$user_id;
    public $updateMode = false;

    public function render()
    {    
        $this->users = User::all();    
        return view('livewire.users');
    }
}
