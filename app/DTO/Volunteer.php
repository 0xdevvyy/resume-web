<?php

declare(strict_types = 1);

namespace App\DTO;

use Carbon\Carbon;

readonly class Volunteer{
    public function __construct(
        public string $organization,
        public string $position,
        public string $url,
        public ?Carbon $startDate,
        public ?Carbon $endDate,
        public string $summary,
        public array $highlights,
    ){}

      public static function fromArray(array $data): self {
        $startDate = isset($data['startDate']) ? Carbon::parse($data['startDate']) : null;
        $endDate = isset($data['endDate']) ? Carbon::parse($data['endDate']) : null; 

        return new self(
            organization: $data['organization'] ?? '',
            position: $data['position'] ?? '',
            url: $data['url'] ?? '',
            startDate: $startDate,
            endDate: $endDate,
            summary: $data['summary'] ?? '',
            highlights: $data['highlights'] ?? [],
        );
    }
}