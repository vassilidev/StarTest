<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Star extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'surname',
        'image_url',
        'description',
    ];

    /**
     * @var string[]
     */
    protected $appends = [
        'full_name',
    ];

    /**
     * Get the full name.
     *
     * @return Attribute
     */
    public function fullName(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->getFullName(),
        );
    }

    /**
     * Concat the Name and the Surname with format.
     *
     * @return string
     */
    private function getFullName(): string
    {
        return ucwords(Str::lower($this->name))
            . ' '
            . ucwords(Str::lower($this->surname));
    }
}
