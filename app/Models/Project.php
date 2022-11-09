<?php

namespace App\Models;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['nameProject', 'employer_id'];
    public function employers(){
        return $this->hasmany(Employer::class, 'employer_id', 'id');
    }



}
