<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UserDatatables extends LivewireDatatable
{
    public $model = User::class;
    public $hideable = 'select';
    public $exportable = true;
    public function columns()
    {
        return [
            Column::name('id')->searchable(),
            Column::name('name')->searchable()->filterable()->editable(),
            Column::name('email')->searchable()->filterable()->editable()->truncate()->label('Email'),
            Column::name('address')->searchable()->filterable()->editable()->label('Address'),
            Column::name('mobile')->searchable()->filterable()->editable()->label('Mobile Number'),
            Column::name('status')->filterable()->editable()->label('Status'),
            Column::name('utype')->filterable()->editable()->label('User Type'),
            DateColumn::name('created_at')->filterable()->label('Regis. Date')
        ];
    }
}

