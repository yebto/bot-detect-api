<?php

namespace Yebto\BotDetectAPI;

use Yebto\ApiClient\YebtoClient;

class BotDetectAPI extends YebtoClient
{
    protected function module(): string
    {
        return 'bot/detect';
    }

    protected function defaults(): array
    {
        return [
            'base_url' => 'https://api.yeb.to/v1',
            'key'      => null,
            'curl'     => [
                CURLOPT_TIMEOUT        => 30,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
                CURLOPT_USERAGENT      => 'yebto-bot-detect-api-php',
            ],
        ];
    }

    /**
     * General bot detection
     */
    public function detect(array $extra = []): array
    {
        return $this->post('', $extra);
    }

    /**
     * Verify Googlebot
     */
    public function google(array $extra = []): array
    {
        return $this->post('google', $extra);
    }

    /**
     * Verify Bingbot
     */
    public function bing(array $extra = []): array
    {
        return $this->post('bing', $extra);
    }

    /**
     * Verify OpenAI bot
     */
    public function openai(array $extra = []): array
    {
        return $this->post('openai', $extra);
    }

    /**
     * Verify Yandex bot
     */
    public function yandex(array $extra = []): array
    {
        return $this->post('yandex', $extra);
    }

    /**
     * Verify DuckDuckGo bot
     */
    public function duck(array $extra = []): array
    {
        return $this->post('duck', $extra);
    }

    /**
     * Verify Qwant bot
     */
    public function qwant(array $extra = []): array
    {
        return $this->post('qwant', $extra);
    }

    /**
     * Verify Meta bot
     */
    public function meta(array $extra = []): array
    {
        return $this->post('meta', $extra);
    }

    /**
     * Verify Seznam bot
     */
    public function seznam(array $extra = []): array
    {
        return $this->post('seznam', $extra);
    }
}
