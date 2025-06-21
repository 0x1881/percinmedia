<?php

namespace App\Enums;

enum TelegramChannel: string
{
    case general = 'general';
    case contact = 'contact';
    case errors = 'errors';
    case logs = 'logs';

    public function id(): string
    {
        return match ($this) {
            self::general => '-1002679675506',
            self::contact => '-1002679675506|6',
            self::errors => '-1002679675506|4',
            self::logs => '-1002679675506|2',
            default => '-1002679675506',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::general => 'Genel',
            self::contact => 'İletişim',
            self::errors => 'Hatalar',
            self::logs => 'Loglar',
            default => 'Bilinmeyen',
        };
    }
}
