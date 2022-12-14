<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Person extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = ['name','surname','age','phone','email'];

}
