<?php

declare(strict_types=1);

namespace App\DTO;

readonly class Languages
{
    public function __construct(
        public string $language,
        public string $fluency,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            language: $data['language'] ?? '',
            fluency: $data['fluency'] ?? '',
        );
    }
}