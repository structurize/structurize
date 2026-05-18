<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactCreateWebhookSubscription extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private string $topic,
        private ?string $callback = null
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.createWebhookSubscription",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "topic"      => $this->topic,
                "callback"   => $this->callback,
            ],
        ]);
    }
}
