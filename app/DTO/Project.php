<?php

declare(strict_types=1);

namespace App\DTO;

use Carbon\Carbon;

readonly class Project
{
    public function __construct(
        public string $name,
        public ?Carbon $startDate,
        public ?Carbon $endDate,
        public string $description,
        public array $highlights,
        public string $url,
    ) {}

    public static function fromArray(array $data): self
    {

        $startDate = isset($data['startDate']) ? Carbon::parse($data['startDate']) : null;
        $endDate = isset($data['endDate']) ? Carbon::parse($data['endDate']) : null; 

        return new self(
            name: $data['name'] ?? '',
            startDate: $startDate,
            endDate: $endDate,
            description: $data['description'] ?? '',
            highlights: $data['highlights'] ?? [],
            url: $data['url'] ?? '',
        );
    }
}