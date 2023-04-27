<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role_Client;

class client extends Model
{
    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_clients');
    }
 
    use HasFactory;
}

