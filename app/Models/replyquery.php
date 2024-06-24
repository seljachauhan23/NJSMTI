<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class replyquery extends Model
{
    use HasFactory;
    protected $table="replyquery";
    protected $primaryKey="email";
    protected $keyType = "string";
}
