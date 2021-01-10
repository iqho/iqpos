<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUser extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.show-user', [ 'users' => User::paginate(10), ]);
    }

}
