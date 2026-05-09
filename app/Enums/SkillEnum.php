<?php

namespace App\Enums;

enum SkillEnum: string
{
    case BEGINNER = 'beginner';
    case INTERMIDIATE = 'intermidiate';
    case ADVANCE = 'advance';
    case EXPERT = 'expert';


    

    public function title(): string{
        return match ($this) {
           self::BEGINNER => 'Beginner',
           self::INTERMIDIATE => 'Intermidiate',
           self::ADVANCE => 'Advance',
           self::EXPERT => 'Expert',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::BEGINNER     => 'bg-gradient-to-r from-green-500 to-emerald-500',
            self::INTERMIDIATE => 'bg-gradient-to-r from-blue-500 to-cyan-500',
            self::ADVANCE     => 'bg-gradient-to-r from-purple-500 to-indigo-500',
            self::EXPERT       => 'bg-gradient-to-r from-orange-500 to-red-500',
        };
    }

      public static function fromString(string $level): ?SkillEnum
    {
        return match (strtolower($level)) {
            'beginner', 'novice', 'junior' => self::BEGINNER,
            'intermediate', 'mid-level'    => self::INTERMIDIATE,
            'advanced', 'senior'           => self::ADVANCE,
            'expert', 'master'             => self::EXPERT,
            default                        => null,
        };
    }

}
