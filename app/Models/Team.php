<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['nameTeam', 'member'];

    public function employers(){
        return $this->belongsTo(Employer::class, 'team_id', 'id');
    
    }


}
