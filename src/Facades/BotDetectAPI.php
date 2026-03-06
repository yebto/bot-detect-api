<?php

namespace Yebto\BotDetectAPI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array detect(array $extra = [])
 * @method static array google(array $extra = [])
 * @method static array bing(array $extra = [])
 * @method static array openai(array $extra = [])
 * @method static array yandex(array $extra = [])
 * @method static array duck(array $extra = [])
 * @method static array qwant(array $extra = [])
 * @method static array meta(array $extra = [])
 * @method static array seznam(array $extra = [])
 */
class BotDetectAPI extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'yebto-bot-detect';
    }
}
