<?php

namespace Modules\Company;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $filament = [
        'title',
        'description',
        'company_id',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(related: Company::class, foreignKey: 'company_id');
    }
}
