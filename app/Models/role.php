<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role_Client;

class role extends Model
{
    use HasFactory;
     public function client()
    {
        return $this->belongsToMany(Client::class, 'role_clients');
    }
}
