<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\Traits\OrganizationDatabaseTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $fillable = ['name', 'email', 'subject', 'message']; // Adjust fields as necessary
}
