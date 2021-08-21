<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'games';

    public $orderable = [
        'id',
        'name',
        'start',
        'campaign.name',
    ];

    public $filterable = [
        'id',
        'name',
        'start',
        'campaign.name',
    ];

    protected $fillable = [
        'name',
        'start',
        'campaign_id',
    ];

    protected $dates = [
        'start',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getStartAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setStartAttribute($value)
    {
        $this->attributes['start'] = $value ? Carbon::createFromFormat(config('project.datetime_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function game(){
        return $this->belongsTo(Campaign::class);
    }
}
