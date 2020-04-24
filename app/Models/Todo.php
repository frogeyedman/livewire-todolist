<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    public $casts = [
        'is_done' => 'boolean'
    ];

    public function setDone(bool $done)
    {
        $this->is_done = $done;
        $this->save();
    }
}
