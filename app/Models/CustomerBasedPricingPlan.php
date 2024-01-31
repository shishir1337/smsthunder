<?php

namespace App\Models;

use App\Library\Traits\HasUid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerBasedPricingPlan extends Model
{

    use HasUid;

    protected $fillable = ['user_id', 'country_id', 'plan_id', 'options', 'status', 'sending_server'];

    protected $casts = [
            'status' => 'boolean',
    ];


    /**
     * User
     *
     * @return BelongsTo
     */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

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
