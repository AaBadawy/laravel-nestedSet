<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Team extends Model
{
    use HasFactory,NodeTrait;

    public $fillable = ['name' , 'team_leader_id'];

    public function members()
    {
        return $this->belongsToMany('App\Models\User', 'team_user');
    }
}
