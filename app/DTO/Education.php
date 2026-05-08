<?php

declare(strict_types=1);

namespace App\DTO;

use Carbon\Carbon;

readonly class Education
{
    public function __construct(
        public string $institution,
        public string $url,
        public string $area,
        public string $studyType,
        public ?Carbon $startDate,
        public ?Carbon $endDate,
        public string $score,
        public array $courses,
    ) {}

    public static function fromArray(array $data): self
    {

        $startDate = isset($data['startDate']) ? Carbon::parse($data['startDate']) : null;
        $endDate = isset($data['endDate']) ? Carbon::parse($data['endDate']) : null;

        return new self(
            institution: $data['institution'] ?? '',
            url: $data['url'] ?? '',
            area: $data['area'] ?? '',
            studyType: $data['studyType'] ?? '',
            startDate: $startDate,
            endDate: $endDate,
            score: $data['score'] ?? '',
            courses: $data['courses'] ?? [],
        );
    }
}