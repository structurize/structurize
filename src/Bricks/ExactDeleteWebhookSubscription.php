<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactDeleteWebhookSubscription extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private ?int $division,
        private string $topic
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.deleteWebhookSubscription",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "division"   => $this->division,
                "topic"      => $this->topic,
            ],
        ]);
    }
}
