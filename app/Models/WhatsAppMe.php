<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsAppMe extends Model
{
    use HasFactory;

    protected $table = 'whats_app_me';

    protected $guarded = ['id'];
}
