<?php

declare(strict_types=1);

namespace App\DTO;

use App\Enums\SkillEnum;

readonly class Skill
{
    public function __construct(
        public string $name = '',
        public ?SkillEnum $level,
        public array $keywords = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            level: SkillEnum::fromString($data['level'] ?? ''),
            keywords: $data['keywords'] ?? [],
        );
    }
}