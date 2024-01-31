<?php

namespace App\Models;

use App\Library\Traits\HasUid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 * @method static whereLike(string[] $array, mixed $search)
 * @method static offset(mixed $start)
 * @method static count()
 * @method static where(string $string, mixed $id)
 * @method static insert(array[] $plan_coverage)
 */
class PlansCoverageCountries extends Model
{
    use HasUid;

    protected $fillable = ['country_id', 'plan_id', 'options','status', 'sending_server'];

    protected $casts = [
            'status' => 'boolean',
    ];


    /**
     * Country
     *
     * @return BelongsTo
     */

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Country
     *
     * @return BelongsTo
     */

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    /**
     * sending_server
     *
     * @return BelongsTo
     */

    public function sendingServer(): BelongsTo
    {
        return $this->belongsTo(SendingServer::class, 'sending_server', 'id');
    }

}
