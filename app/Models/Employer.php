<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Worker;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'role', 'team_id'];



    public function teams()
    {
        return $this->hasMany(Team::class, 'team_id', 'id');
    }


    public function project()
    {
        return $this->belongsTo(Project::class, 'employer_id', 'id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'employer_id', 'id');
    }

    public function workers()
    {
        return $this->belongsTo(Worker::class, 'employer_id', 'id');
    }






}
