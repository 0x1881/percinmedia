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
            self::contact => '-1002704411524|2',
            self::errors => '-1002704411524|4',
            self::logs => '-1002704411524|6',
            default => '-1002704411524|1',
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
