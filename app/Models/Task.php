<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = "tasks";

    public function user()
    {
        return $this->belongsTo(User::class , 'assigned_to_id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class , 'assigned_by_id');
    }

}
