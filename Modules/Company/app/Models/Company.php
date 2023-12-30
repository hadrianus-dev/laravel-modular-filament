<?php

namespace Modules\Company;

use Modules\Company\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $filament = [
        'title',
        'description',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(related: Service::class, foreignKey: 'company_id');
    }
}
