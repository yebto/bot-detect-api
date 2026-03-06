# YEB BotDetectAPI

PHP SDK for the YEB Bot Detection API. Detect bots, crawlers and automated traffic.

Works standalone (plain PHP) or with Laravel (Facade + auto-discovery).

## Requirements

- PHP 8.1+
- cURL extension
- [YEB API Key](https://yeb.to) (free tier available)

## Installation

```bash
composer require yebto/bot-detect-api
```

## Standalone Usage

```php
use Yebto\BotDetectAPI\BotDetectAPI;

$api = new BotDetectAPI(['key' => 'your-api-key']);
$result = $api->detect();
```

## Laravel Usage

Add your API key to `.env`:

```
YEB_KEY_ID=your-api-key
```

Use via Facade:

```php
use BotDetectAPI;

$result = BotDetectAPI::detect();
```

Or via dependency injection:

```php
use Yebto\BotDetectAPI\BotDetectAPI;

public function handle(BotDetectAPI $api)
{
    $result = $api->detect();
}
```

### Publish Config

```bash
php artisan vendor:publish --tag=yebto-bot-detect-config
```

## Available Methods

| Method | Description |
|--------|-------------|
| `detect()` | General bot detection |
| `google()` | Verify Googlebot |
| `bing()` | Verify Bingbot |
| `openai()` | Verify OpenAI bot |
| `yandex()` | Verify Yandex bot |
| `duck()` | Verify DuckDuckGo bot |
| `qwant()` | Verify Qwant bot |
| `meta()` | Verify Meta bot |
| `seznam()` | Verify Seznam bot |


All methods accept an optional `$extra` array parameter for additional API options.

## Error Handling

```php
use Yebto\ApiClient\Exceptions\ApiException;
use Yebto\ApiClient\Exceptions\AuthenticationException;
use Yebto\ApiClient\Exceptions\RateLimitException;

try {
    $result = $api->detect();
} catch (AuthenticationException $e) {
    // Missing or invalid API key (401)
} catch (RateLimitException $e) {
    // Too many requests (429)
} catch (ApiException $e) {
    echo $e->getMessage();
    echo $e->getHttpCode();
}
```

## Free API Access

Register at [yeb.to](https://yeb.to) with Google OAuth to get a free API key.

## Support

- API Documentation: [https://yeb.to/api/bot-detect](https://yeb.to/api/bot-detect)
- Email: support@yeb.to
- Issues: [GitHub Issues](https://github.com/yebto/bot-detect-api/issues)

## License

MIT - NETOX Ltd.
