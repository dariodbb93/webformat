<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['nameTask', 'details', 'status', 'employer_id', 'deadline'];

    public function employers()
    {
        return $this->belongsTo(Employer::class, 'employer_id', 'id');
    }

}

