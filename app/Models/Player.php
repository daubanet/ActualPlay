<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'players';

    public $orderable = [
        'id',
        'name',
        'sex',
        'occupation',
        'age',
        'income',
        'savings',
        'nationality',
        'residence',
        'str',
        'dex',
        'int',
        'idea',
        'con',
        'app',
        'pow',
        'luck',
        'siz',
        'san',
        'edu',
        'know',
        'schools',
        'degrees',
        'damage',
    ];

    public $filterable = [
        'id',
        'name',
        'sex',
        'occupation',
        'age',
        'income',
        'savings',
        'nationality',
        'residence',
        'str',
        'dex',
        'int',
        'idea',
        'con',
        'app',
        'pow',
        'luck',
        'siz',
        'san',
        'edu',
        'know',
        'schools',
        'degrees',
        'damage',
        'skill.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'sex',
        'occupation',
        'age',
        'income',
        'savings',
        'nationality',
        'residence',
        'str',
        'dex',
        'int',
        'idea',
        'con',
        'app',
        'pow',
        'luck',
        'siz',
        'san',
        'edu',
        'know',
        'schools',
        'degrees',
        'damage',
    ];

    public function skill()
    {
        return $this->belongsToMany(Skill::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
