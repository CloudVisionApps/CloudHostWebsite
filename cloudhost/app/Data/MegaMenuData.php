<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class MegaMenuData extends Data
{
    public function __construct(
        public ?string $name = null,
        public ?string $url = null,
        public ?string $icon = null,
        public ?array $sections = [],
    ) {

    }
}
