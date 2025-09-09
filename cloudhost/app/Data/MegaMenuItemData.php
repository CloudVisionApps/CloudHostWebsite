<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class MegaMenuItemData extends Data
{
    public function __construct(
        public ?string $name = null,
        public ?string $url = null,
        public ?string $icon = null,
        public ?string $image = null,
        public ?string $description = null,
        public ?array $sub_items = [],
    ) {}
}
