# Sendpulse API for Laravel

Sendpulse API package for Laravel

# Installation

```bash
composer require artjoker/sendpulse-laravel
```

Add `Artjoker\SendpulseLaravel\SendPulseProvider::class` to providers

**config/app.php**
```php
'providers' => [
    Artjoker\SendpulseLaravel\SendPulseProvider::class,
],

'aliases' => [
    'SendPulse' => Artjoker\SendpulseLaravel\SendPulse::class,
]
```

Publish config

```bash
php artisan vendor:publish --provider="Artjoker\SendpulseLaravel\SendPulseProvider" --tag="config"
```

Set the api key variables in your `.env` file

```
SENDPULSE_API_USER_ID=null
SENDPULSE_API_SECRET=null
```

# Usage API

https://sendpulse.com/ru/integrations/api

```php
// From container
$api = app('sendpulse-laravel');
$books = $api->listAddressBooks();

// From facade
$books = \SendPulse::listAddressBooks();

// From dependency injection
public function getBooks(\Artjoker\SendpulseLaravel\Contracts\SendPulseApi $api)
{
    $books = $api->listAddressBooks();
}
```