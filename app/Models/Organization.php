<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'organization_name',
        'description',
        'employees_count',
        'phone_number',
    ];

    protected $table = 'authorizations';

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
