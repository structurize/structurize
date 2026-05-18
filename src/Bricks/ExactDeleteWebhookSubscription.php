<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactDeleteWebhookSubscription extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private string $topic
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.deleteWebhookSubscription",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "topic"      => $this->topic,
            ],
        ]);
    }
}
