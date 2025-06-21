<?php

namespace App\Jobs;

use App\Enums\TelegramChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use NotificationChannels\Telegram\Exceptions\CouldNotSendNotification;
use NotificationChannels\Telegram\Telegram;

class TelegramLog implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @param string               $message
     * @param TelegramChannel|null $channel
     */
    public function __construct(
        protected string           $message = '',
        protected ?TelegramChannel $channel = null,
    ) {
        $this->queue = 'telegram';
        if (!$this->channel) {
            $this->channel = TelegramChannel::general;
        }
    }

    /**
     * @return void
     */
    public function handle(): void
    {
        $telegram = new Telegram(config('services.telegram-bot-api.token'));

        try {
            $id = $this->channel->id();
            $id = explode('|', $id);

            $req = [
                'chat_id' => $id[0],
                'text' => $this->message,
                'parse_mode' => 'Markdown',
            ];

            if (isset($id[1])) {
                $req['message_thread_id'] = $id[1];
            }

            $telegram->sendMessage($req);
        } catch (CouldNotSendNotification $e) {
            Log::error('Channel: ' . $this->channel->value . ' Message: ' . $this->message . ' - ' . $e->getMessage());
        }
    }
}
