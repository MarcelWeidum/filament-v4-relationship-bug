<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

final class Company extends Model
{
    public function openingHours(): HasOne
    {
        return $this->hasOne(CompanyOpeningHour::class);
    }
}
