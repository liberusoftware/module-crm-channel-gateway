<?php

declare(strict_types=1);

namespace Liberu\CRM\ChannelGateway\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property string $key
 * @property string $kind
 * @property string $provider
 * @property string $status
 */
final class GatewayChannel extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_gateway_channels';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['configuration' => 'array', 'health' => 'array'];
    }
}
