# vite.config.js

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

```

# phpunit.xml

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="vendor/phpunit/phpunit/phpunit.xsd"
         bootstrap="vendor/autoload.php"
         colors="true"
>
    <testsuites>
        <testsuite name="Unit">
            <directory>tests/Unit</directory>
        </testsuite>
        <testsuite name="Feature">
            <directory>tests/Feature</directory>
        </testsuite>
    </testsuites>
    <source>
        <include>
            <directory>app</directory>
        </include>
    </source>
    <php>
        <env name="APP_ENV" value="testing"/>
        <env name="APP_MAINTENANCE_DRIVER" value="file"/>
        <env name="BCRYPT_ROUNDS" value="4"/>
        <env name="CACHE_STORE" value="array"/>
        <!-- <env name="DB_CONNECTION" value="sqlite"/> -->
        <!-- <env name="DB_DATABASE" value=":memory:"/> -->
        <env name="MAIL_MAILER" value="array"/>
        <env name="PULSE_ENABLED" value="false"/>
        <env name="QUEUE_CONNECTION" value="sync"/>
        <env name="SESSION_DRIVER" value="array"/>
        <env name="TELESCOPE_ENABLED" value="false"/>
    </php>
</phpunit>

```

# package.json

```json
{
    "private": true,
    "type": "module",
    "scripts": {
        "dev": "vite",
        "build": "vite build"
    },
    "devDependencies": {
        "axios": "^1.7.4",
        "laravel-vite-plugin": "^1.0",
        "vite": "^5.0"
    }
}

```

# composer.json

```json
{
    "name": "laravel/laravel",
    "type": "project",
    "description": "The skeleton application for the Laravel framework.",
    "keywords": ["laravel", "framework"],
    "license": "MIT",
    "require": {
        "php": "^8.2",
        "laravel/framework": "^11.9",
        "laravel/tinker": "^2.9"
    },
    "require-dev": {
        "fakerphp/faker": "^1.23",
        "laravel/pint": "^1.13",
        "laravel/sail": "^1.26",
        "mockery/mockery": "^1.6",
        "nunomaduro/collision": "^8.0",
        "phpunit/phpunit": "^11.0.1"
    },
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        }
    },
    "scripts": {
        "post-autoload-dump": [
            "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
            "@php artisan package:discover --ansi"
        ],
        "post-update-cmd": [
            "@php artisan vendor:publish --tag=laravel-assets --ansi --force"
        ],
        "post-root-package-install": [
            "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
        ],
        "post-create-project-cmd": [
            "@php artisan key:generate --ansi",
            "@php -r \"file_exists('database/database.sqlite') || touch('database/database.sqlite');\"",
            "@php artisan migrate --graceful --ansi"
        ]
    },
    "extra": {
        "laravel": {
            "dont-discover": []
        }
    },
    "config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true,
        "allow-plugins": {
            "pestphp/pest-plugin": true,
            "php-http/discovery": true
        }
    },
    "minimum-stability": "stable",
    "prefer-stable": true
}

```

# artisan

```
#!/usr/bin/env php
<?php

use Symfony\Component\Console\Input\ArgvInput;

define('LARAVEL_START', microtime(true));

// Register the Composer autoloader...
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and handle the command...
$status = (require_once __DIR__.'/bootstrap/app.php')
    ->handleCommand(new ArgvInput);

exit($status);

```

# README.md

```md
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

```

# .gitignore

```
/.phpunit.cache
/node_modules
/public/build
/public/hot
/public/storage
/storage/*.key
/vendor
.env
.env.backup
.env.production
.phpactor.json
.phpunit.result.cache
Homestead.json
Homestead.yaml
auth.json
npm-debug.log
yarn-error.log
/.fleet
/.idea
/.vscode
/.zed

```

# .gitattributes

```
* text=auto eol=lf

*.blade.php diff=html
*.css diff=css
*.html diff=html
*.md diff=markdown
*.php diff=php

/.github export-ignore
CHANGELOG.md export-ignore
.styleci.yml export-ignore

```

# .editorconfig

```
root = true

[*]
charset = utf-8
end_of_line = lf
indent_size = 4
indent_style = space
insert_final_newline = true
trim_trailing_whitespace = true

[*.md]
trim_trailing_whitespace = false

[*.{yml,yaml}]
indent_size = 2

[docker-compose.yml]
indent_size = 4

```

# routes/web.php

```php
<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/razpis', 'razpis');
Route::view('/pravila', 'pravila');
Route::view('/rezultati', 'rezultati');
Route::view('/galerija', 'galerija');


```

# routes/console.php

```php
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

```

# public/robots.txt

```txt
User-agent: *
Disallow:

```

# public/index.php

```php
<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());

```

# public/favicon.ico

```ico

```

# public/.htaccess

```
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

```

# tests/TestCase.php

```php
<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    //
}

```

# database/database.sqlite

This is a binary file of the type: Binary

# database/.gitignore

```
*.sqlite*

```

# bootstrap/providers.php

```php
<?php

return [
    App\Providers\AppServiceProvider::class,
];

```

# bootstrap/app.php

```php
<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

```

# config/session.php

```php
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    |
    | This option determines the default session driver that is utilized for
    | incoming requests. Laravel supports a variety of storage options to
    | persist session data. Database storage is a great default choice.
    |
    | Supported: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to expire immediately when the browser is closed then you may
    | indicate that via the expire_on_close configuration option.
    |
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),

    /*
    |--------------------------------------------------------------------------
    | Session Encryption
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it's stored. All encryption is performed
    | automatically by Laravel and you may use the session like normal.
    |
    */

    'encrypt' => env('SESSION_ENCRYPT', false),

    /*
    |--------------------------------------------------------------------------
    | Session File Location
    |--------------------------------------------------------------------------
    |
    | When utilizing the "file" session driver, the session files are placed
    | on disk. The default storage location is defined here; however, you
    | are free to provide another location where they should be stored.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session drivers, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    |
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table to
    | be used to store sessions. Of course, a sensible default is defined
    | for you; however, you're welcome to change this to another table.
    |
    */

    'table' => env('SESSION_TABLE', 'sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Cache Store
    |--------------------------------------------------------------------------
    |
    | When using one of the framework's cache driven session backends, you may
    | define the cache store which should be used to store the session data
    | between requests. This must match one of your defined cache stores.
    |
    | Affects: "apc", "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE'),

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Some session drivers must manually sweep their storage location to get
    | rid of old sessions from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the session cookie that is created by
    | the framework. Typically, you should not need to change this value
    | since doing so does not grant a meaningful security improvement.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path
    |--------------------------------------------------------------------------
    |
    | The session cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application, but you're free to change this when necessary.
    |
    */

    'path' => env('SESSION_PATH', '/'),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | This value determines the domain and subdomains the session cookie is
    | available to. By default, the cookie will be available to the root
    | domain and all subdomains. Typically, this shouldn't be changed.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, session cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you when it can't be done securely.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. It's unlikely you should disable this option.
    |
    */

    'http_only' => env('SESSION_HTTP_ONLY', true),

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option determines how your cookies behave when cross-site requests
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | will set this value to "lax" to permit secure cross-site requests.
    |
    | See: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#samesitesamesite-value
    |
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    /*
    |--------------------------------------------------------------------------
    | Partitioned Cookies
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will tie the cookie to the top-level site for
    | a cross-site context. Partitioned cookies are accepted by the browser
    | when flagged "secure" and the Same-Site attribute is set to "none".
    |
    */

    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),

];

```

# config/services.php

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];

```

# config/queue.php

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    |
    | Laravel's queue supports a variety of backends via a single, unified
    | API, giving you convenient access to each backend using identical
    | syntax for each. The default queue connection is defined below.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection options for every queue backend
    | used by your application. An example configuration is provided for
    | each backend supported by Laravel. You're also free to add more.
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_QUEUE_CONNECTION'),
            'table' => env('DB_QUEUE_TABLE', 'jobs'),
            'queue' => env('DB_QUEUE', 'default'),
            'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => env('BEANSTALKD_QUEUE_HOST', 'localhost'),
            'queue' => env('BEANSTALKD_QUEUE', 'default'),
            'retry_after' => (int) env('BEANSTALKD_QUEUE_RETRY_AFTER', 90),
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => (int) env('REDIS_QUEUE_RETRY_AFTER', 90),
            'block_for' => null,
            'after_commit' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Job Batching
    |--------------------------------------------------------------------------
    |
    | The following options configure the database and table that store job
    | batching information. These options can be updated to any database
    | connection and table which has been defined by your application.
    |
    */

    'batching' => [
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'job_batches',
    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control how and where failed jobs are stored. Laravel ships with
    | support for storing failed jobs in a simple file or in a database.
    |
    | Supported drivers: "database-uuids", "dynamodb", "file", "null"
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'failed_jobs',
    ],

];

```

# config/mail.php

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send all email
    | messages unless another mailer is explicitly specified when sending
    | the message. All additional mailers can be configured within the
    | "mailers" array. Examples of each type of mailer are provided.
    |
    */

    'default' => env('MAIL_MAILER', 'log'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers that can be used
    | when delivering an email. You may specify which one you're using for
    | your mailers below. You may also add additional mailers if needed.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses", "ses-v2",
    |            "postmark", "resend", "log", "array",
    |            "failover", "roundrobin"
    |
    */

    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 2525),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url(env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'message_stream_id' => env('POSTMARK_MESSAGE_STREAM_ID'),
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'resend' => [
            'transport' => 'resend',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],

        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => [
                'ses',
                'postmark',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all emails sent by your application to be sent from
    | the same address. Here you may specify a name and address that is
    | used globally for all emails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

];

```

# config/logging.php

```php
<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that is utilized to write
    | messages to your logs. The value provided here should match one of
    | the channels present in the list of "channels" configured below.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    |
    | This option controls the log channel that should be used to log warnings
    | regarding deprecated PHP and library features. This allows you to get
    | your application ready for upcoming major versions of dependencies.
    |
    */

    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => env('LOG_DEPRECATIONS_TRACE', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Laravel
    | utilizes the Monolog PHP logging library, which includes a variety
    | of powerful log handlers and formatters that you're free to use.
    |
    | Available drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog", "custom", "stack"
    |
    */

    'channels' => [

        'stack' => [
            'driver' => 'stack',
            'channels' => explode(',', env('LOG_STACK', 'single')),
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => env('LOG_DAILY_DAYS', 14),
            'replace_placeholders' => true,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => env('LOG_SLACK_USERNAME', 'Laravel Log'),
            'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
            'level' => env('LOG_LEVEL', 'critical'),
            'replace_placeholders' => true,
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
            'replace_placeholders' => true,
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],

    ],

];

```

# config/filesystems.php

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application for file storage.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Below you may configure as many filesystem disks as necessary, and you
    | may even configure multiple disks for the same driver. Examples for
    | most supported storage drivers are configured here for reference.
    |
    | Supported drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];

```

# config/database.php

```php
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'sqlite'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];

```

# config/cache.php

```php
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache store that will be used by the
    | framework. This connection is utilized if another isn't explicitly
    | specified when running a cache operation inside the application.
    |
    */

    'default' => env('CACHE_STORE', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the cache "stores" for your application as
    | well as their drivers. You may even define multiple stores for the
    | same cache driver to group types of items stored in your caches.
    |
    | Supported drivers: "array", "database", "file", "memcached",
    |                    "redis", "dynamodb", "octane", "null"
    |
    */

    'stores' => [

        'array' => [
            'driver' => 'array',
            'serialize' => false,
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_CACHE_CONNECTION'),
            'table' => env('DB_CACHE_TABLE', 'cache'),
            'lock_connection' => env('DB_CACHE_LOCK_CONNECTION'),
            'lock_table' => env('DB_CACHE_LOCK_TABLE'),
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
            'lock_path' => storage_path('framework/cache/data'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_CACHE_CONNECTION', 'cache'),
            'lock_connection' => env('REDIS_CACHE_LOCK_CONNECTION', 'default'),
        ],

        'dynamodb' => [
            'driver' => 'dynamodb',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint' => env('DYNAMODB_ENDPOINT'),
        ],

        'octane' => [
            'driver' => 'octane',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | When utilizing the APC, database, memcached, Redis, and DynamoDB cache
    | stores, there might be other applications using the same cache. For
    | that reason, you may prefix every cache key to avoid collisions.
    |
    */

    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache_'),

];

```

# config/auth.php

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option defines the default authentication "guard" and password
    | reset "broker" for your application. You may change these values
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | which utilizes session storage plus the Eloquent user provider.
    |
    | All authentication guards have a user provider, which defines how the
    | users are actually retrieved out of your database or other storage
    | system used by the application. Typically, Eloquent is utilized.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication guards have a user provider, which defines how the
    | users are actually retrieved out of your database or other storage
    | system used by the application. Typically, Eloquent is utilized.
    |
    | If you have multiple user tables or models you may configure multiple
    | providers to represent the model / table. These providers may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | These configuration options specify the behavior of Laravel's password
    | reset functionality, including the table utilized for token storage
    | and the user provider that is invoked to actually retrieve users.
    |
    | The expiry time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    | The throttle setting is the number of seconds a user must wait before
    | generating more password reset tokens. This prevents the user from
    | quickly generating a very large amount of password reset tokens.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | window expires and users are asked to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];

```

# config/app.php

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => env('APP_TIMEZONE', 'UTC'),

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];

```

# storage/logs/laravel.log

```log
[2024-09-16 16:58:02] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 16:58:02] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 16:58:14] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 16:58:14] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 16:59:18] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 16:59:18] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 17:00:01] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 17:00:01] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 17:00:02] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 17:00:02] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 17:00:03] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 17:00:03] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 17:00:04] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 17:00:04] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 17:00:04] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 17:00:04] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 17:00:05] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 17:00:05] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 17:00:05] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 17:00:05] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 17:00:08] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 17:00:08] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 17:00:09] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 17:00:09] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 17:00:09] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 17:00:10] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 17:00:14] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(172): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#46 {main}
"} 
[2024-09-16 17:00:14] local.ERROR: No application encryption key has been specified. {"exception":"[object] (Illuminate\\Encryption\\MissingAppKeyException(code: 0): No application encryption key has been specified. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php:83)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Support/helpers.php(380): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}('')
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(81): tap('', Object(Closure))
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(64): Illuminate\\Encryption\\EncryptionServiceProvider->key(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php(32): Illuminate\\Encryption\\EncryptionServiceProvider->parseKey(Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(931): Illuminate\\Encryption\\EncryptionServiceProvider->Illuminate\\Encryption\\{closure}(Object(Illuminate\\Foundation\\Application), Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build(Object(Closure))
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('encrypter', Array, true)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('encrypter', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('encrypter', Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1108): Illuminate\\Foundation\\Application->make('encrypter')
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(1022): Illuminate\\Container\\Container->resolveClass(Object(ReflectionParameter))
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(973): Illuminate\\Container\\Container->resolveDependencies(Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(815): Illuminate\\Container\\Container->build('Illuminate\\\\Cook...')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1046): Illuminate\\Container\\Container->resolve('Illuminate\\\\Cook...', Array, true)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Container/Container.php(751): Illuminate\\Foundation\\Application->resolve('Illuminate\\\\Cook...', Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1028): Illuminate\\Container\\Container->make('Illuminate\\\\Cook...', Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(258): Illuminate\\Foundation\\Application->make('Illuminate\\\\Cook...')
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(216): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1190): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#21 {main}
"} 
[2024-09-16 21:24:14] local.ERROR: View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) {"exception":"[object] (Illuminate\\View\\ViewException(code: 0): View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(60): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(InvalidArgumentException), 1)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#58 {main}

[previous exception] [object] (InvalidArgumentException(code: 0): View [layouts.app] not found. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths('layouts.app', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Factory.php(151): Illuminate\\View\\FileViewFinder->find('layouts.app')
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/storage/framework/views/cff17d875664268deabf63118a68100d.php(7): Illuminate\\View\\Factory->make('layouts.app', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(123): require('/Applications/X...')
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(124): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('/Applications/X...', Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#62 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#63 {main}
"} 
[2024-09-16 21:25:36] local.ERROR: View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) {"exception":"[object] (Illuminate\\View\\ViewException(code: 0): View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(60): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(InvalidArgumentException), 1)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#58 {main}

[previous exception] [object] (InvalidArgumentException(code: 0): View [layouts.app] not found. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths('layouts.app', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Factory.php(151): Illuminate\\View\\FileViewFinder->find('layouts.app')
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/storage/framework/views/cff17d875664268deabf63118a68100d.php(7): Illuminate\\View\\Factory->make('layouts.app', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(123): require('/Applications/X...')
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(124): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('/Applications/X...', Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#62 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#63 {main}
"} 
[2024-09-16 21:26:49] local.ERROR: View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) {"exception":"[object] (Illuminate\\View\\ViewException(code: 0): View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(60): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(InvalidArgumentException), 1)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#58 {main}

[previous exception] [object] (InvalidArgumentException(code: 0): View [layouts.app] not found. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths('layouts.app', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Factory.php(151): Illuminate\\View\\FileViewFinder->find('layouts.app')
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/storage/framework/views/cff17d875664268deabf63118a68100d.php(7): Illuminate\\View\\Factory->make('layouts.app', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(123): require('/Applications/X...')
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(124): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('/Applications/X...', Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#62 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#63 {main}
"} 
[2024-09-16 21:26:50] local.ERROR: View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) {"exception":"[object] (Illuminate\\View\\ViewException(code: 0): View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(60): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(InvalidArgumentException), 1)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#58 {main}

[previous exception] [object] (InvalidArgumentException(code: 0): View [layouts.app] not found. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths('layouts.app', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Factory.php(151): Illuminate\\View\\FileViewFinder->find('layouts.app')
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/storage/framework/views/cff17d875664268deabf63118a68100d.php(7): Illuminate\\View\\Factory->make('layouts.app', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(123): require('/Applications/X...')
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(124): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('/Applications/X...', Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#62 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#63 {main}
"} 
[2024-09-16 21:27:05] local.ERROR: View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) {"exception":"[object] (Illuminate\\View\\ViewException(code: 0): View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(60): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(InvalidArgumentException), 1)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#58 {main}

[previous exception] [object] (InvalidArgumentException(code: 0): View [layouts.app] not found. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths('layouts.app', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Factory.php(151): Illuminate\\View\\FileViewFinder->find('layouts.app')
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/storage/framework/views/cff17d875664268deabf63118a68100d.php(7): Illuminate\\View\\Factory->make('layouts.app', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(123): require('/Applications/X...')
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(124): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('/Applications/X...', Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#62 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#63 {main}
"} 
[2024-09-16 21:27:06] local.ERROR: View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) {"exception":"[object] (Illuminate\\View\\ViewException(code: 0): View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(60): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(InvalidArgumentException), 1)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#58 {main}

[previous exception] [object] (InvalidArgumentException(code: 0): View [layouts.app] not found. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths('layouts.app', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Factory.php(151): Illuminate\\View\\FileViewFinder->find('layouts.app')
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/storage/framework/views/cff17d875664268deabf63118a68100d.php(7): Illuminate\\View\\Factory->make('layouts.app', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(123): require('/Applications/X...')
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(124): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('/Applications/X...', Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#62 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#63 {main}
"} 
[2024-09-16 21:27:07] local.ERROR: View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) {"exception":"[object] (Illuminate\\View\\ViewException(code: 0): View [layouts.app] not found. (View: /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php) at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(60): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(InvalidArgumentException), 1)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#58 {main}

[previous exception] [object] (InvalidArgumentException(code: 0): View [layouts.app] not found. at /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:139)
[stacktrace]
#0 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths('layouts.app', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Factory.php(151): Illuminate\\View\\FileViewFinder->find('layouts.app')
#2 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/storage/framework/views/cff17d875664268deabf63118a68100d.php(7): Illuminate\\View\\Factory->make('layouts.app', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(123): require('/Applications/X...')
#4 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(124): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#5 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('/Applications/X...', Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(74): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('/Applications/X...', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(208): Illuminate\\View\\Engines\\CompilerEngine->get('/Applications/X...', Array)
#8 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(191): Illuminate\\View\\View->getContents()
#9 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/View.php(160): Illuminate\\View\\View->renderContents()
#10 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(70): Illuminate\\View\\View->render()
#11 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#12 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(58): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#13 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ResponseFactory.php(88): Illuminate\\Routing\\ResponseFactory->make(Object(Illuminate\\View\\View), 200, Array)
#14 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(41): Illuminate\\Routing\\ResponseFactory->view('home', Array, 200, Array)
#15 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ViewController.php(58): Illuminate\\Routing\\ViewController->__invoke(view: 'home', data: Array, status: 200, headers: Array)
#16 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(43): Illuminate\\Routing\\ViewController->callAction('__invoke', Array)
#17 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(262): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Routing\\ViewController), '__invoke')
#18 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Route.php(208): Illuminate\\Routing\\Route->runController()
#19 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(808): Illuminate\\Routing\\Route->run()
#20 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#21 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(51): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php(88): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(75): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(807): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(786): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(750): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Routing/Router.php(739): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(201): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(51): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(110): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php(58): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/InvokeDeferredCallbacks.php(22): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(183): Illuminate\\Foundation\\Http\\Middleware\\InvokeDeferredCallbacks->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(145): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1188): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/public/index.php(17): Illuminate\\Foundation\\Application->handleRequest(Object(Illuminate\\Http\\Request))
#62 /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php(23): require_once('/Applications/X...')
#63 {main}
"} 

```

# storage/logs/.gitignore

```
*
!.gitignore

```

# storage/app/.gitignore

```
*
!private/
!public/
!.gitignore

```

# resources/views/welcome.blade.php

```php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <a
                                href="https://laravel.com/docs"
                                id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-light.svg"
                                        alt="Laravel documentation screenshot"
                                        class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                        onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        "
                                    />
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                                        alt="Laravel documentation screenshot"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                    />
                                    <div
                                        class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                    ></div>
                                </div>

                                <div class="relative flex items-center gap-6 lg:items-end">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="#FF2D20" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/><path fill="#FF2D20" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/></svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">Documentation</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                            </p>
                                        </div>
                                    </div>

                                    <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                                </div>
                            </a>

                            <a
                                href="https://laracasts.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <a
                                href="https://laravel-news.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z"/><path d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z"/><path d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <g fill="#FF2D20">
                                            <path
                                                d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"
                                            />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant Ecosystem</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white dark:focus-visible:ring-[#FF2D20]">Forge</a>, <a href="https://vapor.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Vapor</a>, <a href="https://nova.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Nova</a>, <a href="https://envoyer.io" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Envoyer</a>, and <a href="https://herd.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Herd</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Echo</a>, <a href="https://laravel.com/docs/horizon" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Telescope</a>, and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>

```

# resources/views/rezultati.blade.php

```php
@extends('layouts.app')

@section('title', 'Rezultati')

@section('content')
    <h1>Rezultati</h1>
    <p>Tukaj bodo prikazani rezultati.</p>
@endsection
```

# resources/views/razpis.blade.php

```php
@extends('layouts.app')

@section('title', 'Razpis')

@section('content')
    <h1>Razpis</h1>
    <p>Tukaj so informacije o našem razpisu.</p>
@endsection
```

# resources/views/pravila.blade.php

```php
@extends('layouts.app')

@section('title', 'Pravila')

@section('content')
    <h1>Pravila</h1>
    <p>Tukaj so navedena pravila našega projekta.</p>
@endsection
```

# resources/views/home.blade.php

```php
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZNOT 2023 - Zimsko nočno orientacijsko tekmovanje</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem 0;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        .info-box {
            background-color: #ecf0f1;
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 1rem;
        }
        .info-box h2 {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Domov</a></li>
                <li><a href="#razpis">Razpis</a></li>
                <li><a href="#pravila">Pravila</a></li>
                <li><a href="#rezultati">Rezultati</a></li>
                <li><a href="#galerija">Galerija</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>ZNOT 2023</h1>
        <h2>Zimsko nočno orientacijsko tekmovanje</h2>
        
        <div class="info-box">
            <h2>Datum</h2>
            <p>2. 12. – 3. 12. 2023</p>
            <p>Prijave se odprejo v petek ob 14.00 in zaprejo ob 15.30</p>
        </div>
        
        <div class="info-box">
            <h2>Lokacija</h2>
            <p>OŠ Simona Jenka Smlednik, Smlednik 73, 1216 Smlednik</p>
        </div>
        
        <div class="info-box">
            <h2>Starostne kategorije</h2>
            <ul>
                <li>Mlajši gozdovniki in gozdovnice (GG) – od 11 do 12 let</li>
                <li>Starejši gozdovniki in gozdovnice (GG) – od 13 do 14 let</li>
                <li>Popotniki in popotnice (PP) – od 15 do 20 let</li>
                <li>Raziskovalci in raziskovalke (RR) ter grče (Gr) – 21 let in več</li>
            </ul>
            <p>Petčlanske ekipe tekmujejo v ustrezni kategoriji. Starost tekmovalcev se računa po koledarskem letu.</p>
        </div>
        
        <div class="info-box">
            <h2>Prijava</h2>
            <p>Ob prijavi ekipa navede: starostno kategorijo, v kateri tekmuje, ime, priimek, elektronski naslov in telefonsko številko vodje ekipe, prehranske posebnosti.</p>
            <p>Na tekmovanju se uporablja elektronski sistem perforiranja (SportIdent), zato naj ekipe, ki imajo svoje čipe, to navedejo ob prijavi ter napišejo njegovo številko.</p>
            <p>Vse ostale ekipe, ki si bodo čip izposodile od organizatorja, morajo pri prijavi oz. pri plačilu štartnine plačati dodatna 2€ za izposojo.</p>
            <p><strong>Prijavnica:</strong> <a href="mailto:znot.rst@gmail.com">znot.rst@gmail.com</a></p>
        </div>
    </main>
</body>
</html>
```

# resources/views/galerija.blade.php

```php
@extends('layouts.app')

@section('title', 'Galerija')

@section('content')
    <h1>Galerija</h1>
    <p>Tukaj bo prikazana galerija slik.</p>
    <!-- Začasna rešitev: povezava do Google Drive mape -->
    <a href="https://drive.google.com/drive/folders/YOUR_FOLDER_ID" target="_blank" class="btn btn-primary">Oglej si galerijo na Google Drive</a>
@endsection
```

# storage/framework/.gitignore

```
compiled.php
config.php
down
events.scanned.php
maintenance.php
routes.php
routes.scanned.php
schedule-*
services.json

```

# resources/js/bootstrap.js

```js
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

```

# resources/js/app.js

```js
import './bootstrap';

```

# resources/css/app.css

```css

```

# public/images/rst-logo-1-e1616518258780.png

This is a binary file of the type: Image

# public/images/ZNOT-2024.png

This is a binary file of the type: Image

# tests/Feature/ExampleTest.php

```php
<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

```

# database/seeders/DatabaseSeeder.php

```php
<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

```

# database/migrations/0001_01_01_000002_create_jobs_table.php

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('queue')->index();
            $table->longText('payload');
            $table->unsignedTinyInteger('attempts');
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
        });

        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->integer('total_jobs');
            $table->integer('pending_jobs');
            $table->integer('failed_jobs');
            $table->longText('failed_job_ids');
            $table->mediumText('options')->nullable();
            $table->integer('cancelled_at')->nullable();
            $table->integer('created_at');
            $table->integer('finished_at')->nullable();
        });

        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');
    }
};

```

# database/migrations/0001_01_01_000001_create_cache_table.php

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration');
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};

```

# database/migrations/0001_01_01_000000_create_users_table.php

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};

```

# database/factories/UserFactory.php

```php
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

```

# app/Providers/AppServiceProvider.php

```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

```

# bootstrap/cache/services.php

```php
<?php return array (
  'providers' => 
  array (
    0 => 'Illuminate\\Auth\\AuthServiceProvider',
    1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    2 => 'Illuminate\\Bus\\BusServiceProvider',
    3 => 'Illuminate\\Cache\\CacheServiceProvider',
    4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    5 => 'Illuminate\\Concurrency\\ConcurrencyServiceProvider',
    6 => 'Illuminate\\Cookie\\CookieServiceProvider',
    7 => 'Illuminate\\Database\\DatabaseServiceProvider',
    8 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    9 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    10 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    11 => 'Illuminate\\Hashing\\HashServiceProvider',
    12 => 'Illuminate\\Mail\\MailServiceProvider',
    13 => 'Illuminate\\Notifications\\NotificationServiceProvider',
    14 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    15 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    16 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    17 => 'Illuminate\\Queue\\QueueServiceProvider',
    18 => 'Illuminate\\Redis\\RedisServiceProvider',
    19 => 'Illuminate\\Session\\SessionServiceProvider',
    20 => 'Illuminate\\Translation\\TranslationServiceProvider',
    21 => 'Illuminate\\Validation\\ValidationServiceProvider',
    22 => 'Illuminate\\View\\ViewServiceProvider',
    23 => 'Laravel\\Sail\\SailServiceProvider',
    24 => 'Laravel\\Tinker\\TinkerServiceProvider',
    25 => 'Carbon\\Laravel\\ServiceProvider',
    26 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    27 => 'Termwind\\Laravel\\TermwindServiceProvider',
    28 => 'App\\Providers\\AppServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Illuminate\\Auth\\AuthServiceProvider',
    1 => 'Illuminate\\Cookie\\CookieServiceProvider',
    2 => 'Illuminate\\Database\\DatabaseServiceProvider',
    3 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    4 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    5 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    6 => 'Illuminate\\Notifications\\NotificationServiceProvider',
    7 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    8 => 'Illuminate\\Session\\SessionServiceProvider',
    9 => 'Illuminate\\View\\ViewServiceProvider',
    10 => 'Carbon\\Laravel\\ServiceProvider',
    11 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    12 => 'Termwind\\Laravel\\TermwindServiceProvider',
    13 => 'App\\Providers\\AppServiceProvider',
  ),
  'deferred' => 
  array (
    'Illuminate\\Broadcasting\\BroadcastManager' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Factory' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Broadcaster' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\QueueingDispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Bus\\BatchRepository' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Bus\\DatabaseBatchRepository' => 'Illuminate\\Bus\\BusServiceProvider',
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.psr6' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'Illuminate\\Cache\\RateLimiter' => 'Illuminate\\Cache\\CacheServiceProvider',
    'Illuminate\\Foundation\\Console\\AboutCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Cache\\Console\\ClearCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Cache\\Console\\ForgetCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ClearCompiledCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Auth\\Console\\ClearResetsCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ConfigCacheCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ConfigClearCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ConfigShowCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\DbCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\MonitorCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\PruneCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\ShowCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\TableCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\WipeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\DownCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\EnvironmentCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\EnvironmentDecryptCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\EventCacheCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\EventClearCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\EventListCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Concurrency\\Console\\InvokeSerializedClosureCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\KeyGenerateCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\OptimizeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\OptimizeClearCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\PackageDiscoverCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Cache\\Console\\PruneStaleTagsCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\ClearCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\ListFailedCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\FlushFailedCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\ForgetFailedCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\ListenCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\MonitorCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\PruneBatchesCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\PruneFailedJobsCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\RestartCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\RetryCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\RetryBatchCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\WorkCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\RouteCacheCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\RouteClearCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\RouteListCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\DumpCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\Seeds\\SeedCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleListCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleRunCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleClearCacheCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleTestCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleWorkCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\ShowModelCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\StorageLinkCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\StorageUnlinkCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\UpCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ViewCacheCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ViewClearCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ApiInstallCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Cache\\Console\\CacheTableCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\CastMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ChannelListCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ChannelMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ClassMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ComponentMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ConfigPublishCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ConsoleMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Routing\\Console\\ControllerMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\DocsCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\EnumMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\EventGenerateCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\EventMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ExceptionMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\Factories\\FactoryMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\InterfaceMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\JobMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\LangPublishCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ListenerMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\MailMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Routing\\Console\\MiddlewareMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ModelMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\NotificationMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Notifications\\Console\\NotificationTableCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ObserverMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\PolicyMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ProviderMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\FailedTableCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\TableCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Queue\\Console\\BatchesTableCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\RequestMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ResourceMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\RuleMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ScopeMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\Seeds\\SeederMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Session\\Console\\SessionTableCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ServeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\StubPublishCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\TestMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\TraitMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\VendorPublishCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Foundation\\Console\\ViewMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migrator' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.repository' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.creator' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\Migrations\\MigrateCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\Migrations\\FreshCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\Migrations\\InstallCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\Migrations\\RefreshCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\Migrations\\ResetCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\Migrations\\RollbackCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\Migrations\\StatusCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Database\\Console\\Migrations\\MigrateMakeCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'composer' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Concurrency\\ConcurrencyManager' => 'Illuminate\\Concurrency\\ConcurrencyServiceProvider',
    'hash' => 'Illuminate\\Hashing\\HashServiceProvider',
    'hash.driver' => 'Illuminate\\Hashing\\HashServiceProvider',
    'mail.manager' => 'Illuminate\\Mail\\MailServiceProvider',
    'mailer' => 'Illuminate\\Mail\\MailServiceProvider',
    'Illuminate\\Mail\\Markdown' => 'Illuminate\\Mail\\MailServiceProvider',
    'auth.password' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'auth.password.broker' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'Illuminate\\Contracts\\Pipeline\\Hub' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    'pipeline' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    'queue' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.connection' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.failer' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.listener' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.worker' => 'Illuminate\\Queue\\QueueServiceProvider',
    'redis' => 'Illuminate\\Redis\\RedisServiceProvider',
    'redis.connection' => 'Illuminate\\Redis\\RedisServiceProvider',
    'translator' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'translation.loader' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'validator' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'validation.presence' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'Illuminate\\Contracts\\Validation\\UncompromisedVerifier' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'Laravel\\Sail\\Console\\InstallCommand' => 'Laravel\\Sail\\SailServiceProvider',
    'Laravel\\Sail\\Console\\PublishCommand' => 'Laravel\\Sail\\SailServiceProvider',
    'command.tinker' => 'Laravel\\Tinker\\TinkerServiceProvider',
  ),
  'when' => 
  array (
    'Illuminate\\Broadcasting\\BroadcastServiceProvider' => 
    array (
    ),
    'Illuminate\\Bus\\BusServiceProvider' => 
    array (
    ),
    'Illuminate\\Cache\\CacheServiceProvider' => 
    array (
    ),
    'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider' => 
    array (
    ),
    'Illuminate\\Concurrency\\ConcurrencyServiceProvider' => 
    array (
    ),
    'Illuminate\\Hashing\\HashServiceProvider' => 
    array (
    ),
    'Illuminate\\Mail\\MailServiceProvider' => 
    array (
    ),
    'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider' => 
    array (
    ),
    'Illuminate\\Pipeline\\PipelineServiceProvider' => 
    array (
    ),
    'Illuminate\\Queue\\QueueServiceProvider' => 
    array (
    ),
    'Illuminate\\Redis\\RedisServiceProvider' => 
    array (
    ),
    'Illuminate\\Translation\\TranslationServiceProvider' => 
    array (
    ),
    'Illuminate\\Validation\\ValidationServiceProvider' => 
    array (
    ),
    'Laravel\\Sail\\SailServiceProvider' => 
    array (
    ),
    'Laravel\\Tinker\\TinkerServiceProvider' => 
    array (
    ),
  ),
);
```

# bootstrap/cache/packages.php

```php
<?php return array (
  'laravel/sail' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Sail\\SailServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'nunomaduro/termwind' => 
  array (
    'providers' => 
    array (
      0 => 'Termwind\\Laravel\\TermwindServiceProvider',
    ),
  ),
);
```

# bootstrap/cache/.gitignore

```
*
!.gitignore

```

# tests/Unit/ExampleTest.php

```php
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
}

```

# app/Models/User.php

```php
<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

```

# storage/app/public/.gitignore

```
*
!.gitignore

```

# storage/app/private/.gitignore

```
*
!.gitignore

```

# resources/views/layouts/app.blade.php

```php
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">Moja Spletna Stran</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Domov</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/razpis">Razpis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pravila">Pravila</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/rezultati">Rezultati</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/galerija">Galerija</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>„„
```

# storage/framework/views/ecabcc469e1d20e0804e31904db10bac.php

```php
<section
    <?php echo e($attributes->merge(['class' => "@container flex flex-col p-6 sm:p-12 bg-white dark:bg-gray-900/80 text-gray-900 dark:text-gray-100 rounded-lg default:col-span-full default:lg:col-span-6 default:row-span-1 dark:ring-1 dark:ring-gray-800 shadow-xl"])); ?>

>
    <?php echo e($slot); ?>

</section>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/card.blade.php ENDPATH**/ ?>
```

# storage/framework/views/e572ef99ba489e8715db90e7edc5944e.php

```php
<svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    <?php echo e($attributes); ?>

>
    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
</svg>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/icons/moon.blade.php ENDPATH**/ ?>
```

# storage/framework/views/d8227143e11cb2e66dcab7f061eedffd.php

```php
<div class="hidden overflow-x-auto sm:col-span-1 lg:block">
    <div
        class="h-[35.5rem] scrollbar-hidden trace text-sm text-gray-400 dark:text-gray-300"
    >
        <div class="mb-2 inline-block rounded-full bg-red-500/20 px-3 py-2 dark:bg-red-500/20 sm:col-span-1">
            <button
                @click="includeVendorFrames = !includeVendorFrames"
                class="inline-flex items-center font-bold leading-5 text-red-500"
            >
                <span x-show="includeVendorFrames">Collapse</span>
                <span
                    x-cloak
                    x-show="!includeVendorFrames"
                    >Expand</span
                >
                <span class="ml-1">vendor frames</span>

                <div class="flex flex-col ml-1 -mt-2" x-cloak x-show="includeVendorFrames">
                    <?php if (isset($component)) { $__componentOriginal707ceba27255eae48fdb0f3529710ddf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal707ceba27255eae48fdb0f3529710ddf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.icons.chevron-down','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::icons.chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal707ceba27255eae48fdb0f3529710ddf)): ?>
<?php $attributes = $__attributesOriginal707ceba27255eae48fdb0f3529710ddf; ?>
<?php unset($__attributesOriginal707ceba27255eae48fdb0f3529710ddf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal707ceba27255eae48fdb0f3529710ddf)): ?>
<?php $component = $__componentOriginal707ceba27255eae48fdb0f3529710ddf; ?>
<?php unset($__componentOriginal707ceba27255eae48fdb0f3529710ddf); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal14b1cc5db95fcca4a0f06445821cff39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14b1cc5db95fcca4a0f06445821cff39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.icons.chevron-up','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::icons.chevron-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14b1cc5db95fcca4a0f06445821cff39)): ?>
<?php $attributes = $__attributesOriginal14b1cc5db95fcca4a0f06445821cff39; ?>
<?php unset($__attributesOriginal14b1cc5db95fcca4a0f06445821cff39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14b1cc5db95fcca4a0f06445821cff39)): ?>
<?php $component = $__componentOriginal14b1cc5db95fcca4a0f06445821cff39; ?>
<?php unset($__componentOriginal14b1cc5db95fcca4a0f06445821cff39); ?>
<?php endif; ?>
                </div>

                <div class="flex flex-col ml-1 -mt-2" x-cloak x-show="! includeVendorFrames">
                    <?php if (isset($component)) { $__componentOriginal14b1cc5db95fcca4a0f06445821cff39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14b1cc5db95fcca4a0f06445821cff39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.icons.chevron-up','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::icons.chevron-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14b1cc5db95fcca4a0f06445821cff39)): ?>
<?php $attributes = $__attributesOriginal14b1cc5db95fcca4a0f06445821cff39; ?>
<?php unset($__attributesOriginal14b1cc5db95fcca4a0f06445821cff39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14b1cc5db95fcca4a0f06445821cff39)): ?>
<?php $component = $__componentOriginal14b1cc5db95fcca4a0f06445821cff39; ?>
<?php unset($__componentOriginal14b1cc5db95fcca4a0f06445821cff39); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal707ceba27255eae48fdb0f3529710ddf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal707ceba27255eae48fdb0f3529710ddf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.icons.chevron-down','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::icons.chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal707ceba27255eae48fdb0f3529710ddf)): ?>
<?php $attributes = $__attributesOriginal707ceba27255eae48fdb0f3529710ddf; ?>
<?php unset($__attributesOriginal707ceba27255eae48fdb0f3529710ddf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal707ceba27255eae48fdb0f3529710ddf)): ?>
<?php $component = $__componentOriginal707ceba27255eae48fdb0f3529710ddf; ?>
<?php unset($__componentOriginal707ceba27255eae48fdb0f3529710ddf); ?>
<?php endif; ?>
                </div>
            </button>
        </div>

        <div class="mb-12 space-y-2">
            <?php $__currentLoopData = $exception->frames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $frame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(! $frame->isFromVendor()): ?>
                    <?php
                        $vendorFramesCollapsed = $exception->frames()->take($loop->index)->reverse()->takeUntil(fn ($frame) => ! $frame->isFromVendor());
                    ?>

                    <div x-show="! includeVendorFrames">
                        <?php if($vendorFramesCollapsed->isNotEmpty()): ?>
                            <div class="text-gray-500">
                                <?php echo e($vendorFramesCollapsed->count()); ?> vendor frame<?php echo e($vendorFramesCollapsed->count() > 1 ? 's' : ''); ?> collapsed
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <button
                    class="w-full text-left dark:border-gray-900"
                    x-show="<?php echo e($frame->isFromVendor() ? 'includeVendorFrames' : 'true'); ?>"
                    @click="index = <?php echo e($loop->index); ?>"
                >
                    <div
                        x-bind:class="
                            index === <?php echo e($loop->index); ?>

                                ? 'rounded-r-md bg-gray-100 dark:bg-gray-800 border-l dark:border dark:border-gray-700 border-l-red-500 dark:border-l-red-500'
                                : 'hover:bg-gray-100/75 dark:hover:bg-gray-800/75'
                        "
                    >
                        <div class="scrollbar-hidden overflow-x-auto border-l-2 border-transparent p-2">
                            <div class="nowrap text-gray-900 dark:text-gray-300">
                                <span class="inline-flex items-baseline">
                                    <span class="text-gray-900 dark:text-gray-300"><?php echo e($frame->source()); ?></span>
                                    <span class="font-mono text-xs">:<?php echo e($frame->line()); ?></span>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">
                                <?php echo e($exception->frames()->get($loop->index + 1)?->callable()); ?>

                            </div>
                        </div>
                    </div>
                </button>

                <?php if(! $frame->isFromVendor() && $exception->frames()->slice($loop->index + 1)->filter(fn ($frame) => ! $frame->isFromVendor())->isEmpty()): ?>
                    <?php if($exception->frames()->slice($loop->index + 1)->count()): ?>
                        <div x-show="! includeVendorFrames">
                            <div class="text-gray-500">
                                <?php echo e($exception->frames()->slice($loop->index + 1)->count()); ?> vendor
                                frame<?php echo e($exception->frames()->slice($loop->index + 1)->count() > 1 ? 's' : ''); ?> collapsed
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/trace.blade.php ENDPATH**/ ?>
```

# storage/framework/views/d7e334445a16d658c5eba7be3791cec3.php

```php
<?php if (isset($component)) { $__componentOriginal74daf2d0a9c625ad90327a6043d15980 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74daf2d0a9c625ad90327a6043d15980 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.card','data' => ['class' => 'mt-6 overflow-x-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-6 overflow-x-auto']); ?>
    <div
        x-data="{
            includeVendorFrames: false,
            index: <?php echo e($exception->defaultFrame()); ?>,
        }"
    >
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3" x-clock>
            <?php if (isset($component)) { $__componentOriginal92c1a431b4816bac5d5a20d0fc1238ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92c1a431b4816bac5d5a20d0fc1238ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.trace','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::trace'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92c1a431b4816bac5d5a20d0fc1238ab)): ?>
<?php $attributes = $__attributesOriginal92c1a431b4816bac5d5a20d0fc1238ab; ?>
<?php unset($__attributesOriginal92c1a431b4816bac5d5a20d0fc1238ab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92c1a431b4816bac5d5a20d0fc1238ab)): ?>
<?php $component = $__componentOriginal92c1a431b4816bac5d5a20d0fc1238ab; ?>
<?php unset($__componentOriginal92c1a431b4816bac5d5a20d0fc1238ab); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginala2de13eefed6710e7b4064d57c6d0e47 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala2de13eefed6710e7b4064d57c6d0e47 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.editor','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala2de13eefed6710e7b4064d57c6d0e47)): ?>
<?php $attributes = $__attributesOriginala2de13eefed6710e7b4064d57c6d0e47; ?>
<?php unset($__attributesOriginala2de13eefed6710e7b4064d57c6d0e47); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala2de13eefed6710e7b4064d57c6d0e47)): ?>
<?php $component = $__componentOriginala2de13eefed6710e7b4064d57c6d0e47; ?>
<?php unset($__componentOriginala2de13eefed6710e7b4064d57c6d0e47); ?>
<?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74daf2d0a9c625ad90327a6043d15980)): ?>
<?php $attributes = $__attributesOriginal74daf2d0a9c625ad90327a6043d15980; ?>
<?php unset($__attributesOriginal74daf2d0a9c625ad90327a6043d15980); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74daf2d0a9c625ad90327a6043d15980)): ?>
<?php $component = $__componentOriginal74daf2d0a9c625ad90327a6043d15980; ?>
<?php unset($__componentOriginal74daf2d0a9c625ad90327a6043d15980); ?>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/trace-and-editor.blade.php ENDPATH**/ ?>
```

# storage/framework/views/d6c61ab03d123913d797223cc089f87a.php

```php
<?php $__env->startSection('title', __('Not Found')); ?>
<?php $__env->startSection('code', '404'); ?>
<?php $__env->startSection('message', __('Not Found')); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/views/404.blade.php ENDPATH**/ ?>
```

# storage/framework/views/cff17d875664268deabf63118a68100d.php

```php
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZNOT 2023 - Zimsko nočno orientacijsko tekmovanje</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem 0;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        .info-box {
            background-color: #ecf0f1;
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 1rem;
        }
        .info-box h2 {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Domov</a></li>
                <li><a href="#razpis">Razpis</a></li>
                <li><a href="#pravila">Pravila</a></li>
                <li><a href="#rezultati">Rezultati</a></li>
                <li><a href="#galerija">Galerija</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>ZNOT 2023</h1>
        <h2>Zimsko nočno orientacijsko tekmovanje</h2>
        
        <div class="info-box">
            <h2>Datum</h2>
            <p>2. 12. – 3. 12. 2023</p>
            <p>Prijave se odprejo v petek ob 14.00 in zaprejo ob 15.30</p>
        </div>
        
        <div class="info-box">
            <h2>Lokacija</h2>
            <p>OŠ Simona Jenka Smlednik, Smlednik 73, 1216 Smlednik</p>
        </div>
        
        <div class="info-box">
            <h2>Starostne kategorije</h2>
            <ul>
                <li>Mlajši gozdovniki in gozdovnice (GG) – od 11 do 12 let</li>
                <li>Starejši gozdovniki in gozdovnice (GG) – od 13 do 14 let</li>
                <li>Popotniki in popotnice (PP) – od 15 do 20 let</li>
                <li>Raziskovalci in raziskovalke (RR) ter grče (Gr) – 21 let in več</li>
            </ul>
            <p>Petčlanske ekipe tekmujejo v ustrezni kategoriji. Starost tekmovalcev se računa po koledarskem letu.</p>
        </div>
        
        <div class="info-box">
            <h2>Prijava</h2>
            <p>Ob prijavi ekipa navede: starostno kategorijo, v kateri tekmuje, ime, priimek, elektronski naslov in telefonsko številko vodje ekipe, prehranske posebnosti.</p>
            <p>Na tekmovanju se uporablja elektronski sistem perforiranja (SportIdent), zato naj ekipe, ki imajo svoje čipe, to navedejo ob prijavi ter napišejo njegovo številko.</p>
            <p>Vse ostale ekipe, ki si bodo čip izposodile od organizatorja, morajo pri prijavi oz. pri plačilu štartnine plačati dodatna 2€ za izposojo.</p>
            <p><strong>Prijavnica:</strong> <a href="mailto:znot.rst@gmail.com">znot.rst@gmail.com</a></p>
        </div>
    </main>
</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/home.blade.php ENDPATH**/ ?>
```

# storage/framework/views/c8a79938b0d0df232bc9e9dd4dc2bc6a.php

```php
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" style="margin-bottom: -8px;">
    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
</svg>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/icons/chevron-down.blade.php ENDPATH**/ ?>
```

# storage/framework/views/b5a351152d5aa436eb0ca4eced453176.php

```php
<?php $__env->startSection('title', 'Rezultati'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Rezultati</h1>
    <p>Tukaj bodo prikazani rezultati.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/rezultati.blade.php ENDPATH**/ ?>
```

# storage/framework/views/a63fc1441f89d47ca7cbe25fbec882b8.php

```php
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">Moja Spletna Stran</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Domov</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/razpis">Razpis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pravila">Pravila</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/rezultati">Rezultati</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/galerija">Galerija</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>„„<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/layouts/app.blade.php ENDPATH**/ ?>
```

# storage/framework/views/a2b50a6a176d34ce5dbe16d46702cb75.php

```php
<script>

    (function () {
        const darkStyles = document.querySelector('style[data-theme="dark"]')?.textContent
        const lightStyles = document.querySelector('style[data-theme="light"]')?.textContent

        const removeStyles = () => {
            document.querySelector('style[data-theme="dark"]')?.remove()
            document.querySelector('style[data-theme="light"]')?.remove()
        }

        removeStyles()

        setDarkClass = () => {
            removeStyles()

            const isDark = localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)

            isDark ? document.documentElement.classList.add('dark') : document.documentElement.classList.remove('dark')

            if (isDark) {
                document.head.insertAdjacentHTML('beforeend', `<style data-theme="dark">${darkStyles}</style>`)
            } else {
                document.head.insertAdjacentHTML('beforeend', `<style data-theme="light">${lightStyles}</style>`)
            }
        }

        setDarkClass()

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setDarkClass)
    })();
</script>

<div
    class="relative"
    x-data="{
        menu: false,
        theme: localStorage.theme,
        darkMode() {
            this.theme = 'dark'
            localStorage.theme = 'dark'
            setDarkClass()
        },
        lightMode() {
            this.theme = 'light'
            localStorage.theme = 'light'
            setDarkClass()
        },
        systemMode() {
            this.theme = undefined
            localStorage.removeItem('theme')
            setDarkClass()
        },
    }"
    @click.outside="menu = false"
>
    <button
        x-cloak
        class="block rounded p-1 hover:bg-gray-100 dark:hover:bg-gray-800"
        :class="theme ? 'text-gray-700 dark:text-gray-300' : 'text-gray-400 dark:text-gray-600 hover:text-gray-500 focus:text-gray-500 dark:hover:text-gray-500 dark:focus:text-gray-500'"
        @click="menu = ! menu"
    >
        <?php if (isset($component)) { $__componentOriginalbfde029a2e31d1ec96b5017ff81a67a7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbfde029a2e31d1ec96b5017ff81a67a7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.icons.sun','data' => ['class' => 'block h-5 w-5 dark:hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::icons.sun'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'block h-5 w-5 dark:hidden']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbfde029a2e31d1ec96b5017ff81a67a7)): ?>
<?php $attributes = $__attributesOriginalbfde029a2e31d1ec96b5017ff81a67a7; ?>
<?php unset($__attributesOriginalbfde029a2e31d1ec96b5017ff81a67a7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbfde029a2e31d1ec96b5017ff81a67a7)): ?>
<?php $component = $__componentOriginalbfde029a2e31d1ec96b5017ff81a67a7; ?>
<?php unset($__componentOriginalbfde029a2e31d1ec96b5017ff81a67a7); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal6dda8ad3ea7f20f6c0a87e7037386745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6dda8ad3ea7f20f6c0a87e7037386745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.icons.moon','data' => ['class' => 'hidden h-5 w-5 dark:block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::icons.moon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hidden h-5 w-5 dark:block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6dda8ad3ea7f20f6c0a87e7037386745)): ?>
<?php $attributes = $__attributesOriginal6dda8ad3ea7f20f6c0a87e7037386745; ?>
<?php unset($__attributesOriginal6dda8ad3ea7f20f6c0a87e7037386745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6dda8ad3ea7f20f6c0a87e7037386745)): ?>
<?php $component = $__componentOriginal6dda8ad3ea7f20f6c0a87e7037386745; ?>
<?php unset($__componentOriginal6dda8ad3ea7f20f6c0a87e7037386745); ?>
<?php endif; ?>
    </button>

    <div
        x-show="menu"
        class="absolute right-0 z-10 flex origin-top-right flex-col rounded-md bg-white shadow-xl ring-1 ring-gray-900/5 dark:bg-gray-800"
        style="display: none"
        @click="menu = false"
    >
        <button
            class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700"
            :class="theme === 'light' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
            @click="lightMode()"
        >
            <?php if (isset($component)) { $__componentOriginalbfde029a2e31d1ec96b5017ff81a67a7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbfde029a2e31d1ec96b5017ff81a67a7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.icons.sun','data' => ['class' => 'h-5 w-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::icons.sun'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-5 w-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbfde029a2e31d1ec96b5017ff81a67a7)): ?>
<?php $attributes = $__attributesOriginalbfde029a2e31d1ec96b5017ff81a67a7; ?>
<?php unset($__attributesOriginalbfde029a2e31d1ec96b5017ff81a67a7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbfde029a2e31d1ec96b5017ff81a67a7)): ?>
<?php $component = $__componentOriginalbfde029a2e31d1ec96b5017ff81a67a7; ?>
<?php unset($__componentOriginalbfde029a2e31d1ec96b5017ff81a67a7); ?>
<?php endif; ?>
            Light
        </button>
        <button
            class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700"
            :class="theme === 'dark' ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
            @click="darkMode()"
        >
            <?php if (isset($component)) { $__componentOriginal6dda8ad3ea7f20f6c0a87e7037386745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6dda8ad3ea7f20f6c0a87e7037386745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.icons.moon','data' => ['class' => 'h-5 w-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::icons.moon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-5 w-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6dda8ad3ea7f20f6c0a87e7037386745)): ?>
<?php $attributes = $__attributesOriginal6dda8ad3ea7f20f6c0a87e7037386745; ?>
<?php unset($__attributesOriginal6dda8ad3ea7f20f6c0a87e7037386745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6dda8ad3ea7f20f6c0a87e7037386745)): ?>
<?php $component = $__componentOriginal6dda8ad3ea7f20f6c0a87e7037386745; ?>
<?php unset($__componentOriginal6dda8ad3ea7f20f6c0a87e7037386745); ?>
<?php endif; ?>
            Dark
        </button>
        <button
            class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700"
            :class="theme === undefined ? 'text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400'"
            @click="systemMode()"
        >
            <?php if (isset($component)) { $__componentOriginala52e607cb40b8eec566206ff9f3ca13c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala52e607cb40b8eec566206ff9f3ca13c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.icons.computer-desktop','data' => ['class' => 'h-5 w-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::icons.computer-desktop'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-5 w-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala52e607cb40b8eec566206ff9f3ca13c)): ?>
<?php $attributes = $__attributesOriginala52e607cb40b8eec566206ff9f3ca13c; ?>
<?php unset($__attributesOriginala52e607cb40b8eec566206ff9f3ca13c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala52e607cb40b8eec566206ff9f3ca13c)): ?>
<?php $component = $__componentOriginala52e607cb40b8eec566206ff9f3ca13c; ?>
<?php unset($__componentOriginala52e607cb40b8eec566206ff9f3ca13c); ?>
<?php endif; ?>
            System
        </button>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/theme-switcher.blade.php ENDPATH**/ ?>
```

# storage/framework/views/8c9332a0dd6c34673c5f528603493788.php

```php
<?php use \Illuminate\Foundation\Exceptions\Renderer\Renderer; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    />

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link rel="icon" type="image/svg+xml"
          href="data:image/svg+xml,%3Csvg viewBox='0 -.11376601 49.74245785 51.31690859' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z' fill='%23ff2d20'/%3E%3C/svg%3E" />

    <link
        href="https://fonts.bunny.net/css?family=figtree:300,400,500,600"
        rel="stylesheet"
    />

    <?php echo Renderer::css(); ?>


    <style>
        <?php $__currentLoopData = $exception->frames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $frame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            #frame-<?php echo e($loop->index); ?> .hljs-ln-line[data-line-number='<?php echo e($frame->line()); ?>'] {
                background-color: rgba(242, 95, 95, 0.4);
            }
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </style>
</head>
<body class="bg-gray-200/80 font-sans antialiased dark:bg-gray-950/95">
    <?php echo e($slot); ?>


    <?php echo Renderer::js(); ?>


    <script>
        !function(r,o){"use strict";var e,i="hljs-ln",l="hljs-ln-line",h="hljs-ln-code",s="hljs-ln-numbers",c="hljs-ln-n",m="data-line-number",a=/\r\n|\r|\n/g;function u(e){for(var n=e.toString(),t=e.anchorNode;"TD"!==t.nodeName;)t=t.parentNode;for(var r=e.focusNode;"TD"!==r.nodeName;)r=r.parentNode;var o=parseInt(t.dataset.lineNumber),a=parseInt(r.dataset.lineNumber);if(o==a)return n;var i,l=t.textContent,s=r.textContent;for(a<o&&(i=o,o=a,a=i,i=l,l=s,s=i);0!==n.indexOf(l);)l=l.slice(1);for(;-1===n.lastIndexOf(s);)s=s.slice(0,-1);for(var c=l,u=function(e){for(var n=e;"TABLE"!==n.nodeName;)n=n.parentNode;return n}(t),d=o+1;d<a;++d){var f=p('.{0}[{1}="{2}"]',[h,m,d]);c+="\n"+u.querySelector(f).textContent}return c+="\n"+s}function n(e){try{var n=o.querySelectorAll("code.hljs,code.nohighlight");for(var t in n)n.hasOwnProperty(t)&&(n[t].classList.contains("nohljsln")||d(n[t],e))}catch(e){r.console.error("LineNumbers error: ",e)}}function d(e,n){"object"==typeof e&&r.setTimeout(function(){e.innerHTML=f(e,n)},0)}function f(e,n){var t,r,o=(t=e,{singleLine:function(e){return!!e.singleLine&&e.singleLine}(r=(r=n)||{}),startFrom:function(e,n){var t=1;isFinite(n.startFrom)&&(t=n.startFrom);var r=function(e,n){return e.hasAttribute(n)?e.getAttribute(n):null}(e,"data-ln-start-from");return null!==r&&(t=function(e,n){if(!e)return n;var t=Number(e);return isFinite(t)?t:n}(r,1)),t}(t,r)});return function e(n){var t=n.childNodes;for(var r in t){var o;t.hasOwnProperty(r)&&(o=t[r],0<(o.textContent.trim().match(a)||[]).length&&(0<o.childNodes.length?e(o):v(o.parentNode)))}}(e),function(e,n){var t=g(e);""===t[t.length-1].trim()&&t.pop();if(1<t.length||n.singleLine){for(var r="",o=0,a=t.length;o<a;o++)r+=p('<tr><td class="{0} {1}" {3}="{5}"><div class="{2}" {3}="{5}"></div></td><td class="{0} {4}" {3}="{5}">{6}</td></tr>',[l,s,c,m,h,o+n.startFrom,0<t[o].length?t[o]:" "]);return p('<table class="{0}">{1}</table>',[i,r])}return e}(e.innerHTML,o)}function v(e){var n=e.className;if(/hljs-/.test(n)){for(var t=g(e.innerHTML),r=0,o="";r<t.length;r++){o+=p('<span class="{0}">{1}</span>\n',[n,0<t[r].length?t[r]:" "])}e.innerHTML=o.trim()}}function g(e){return 0===e.length?[]:e.split(a)}function p(e,t){return e.replace(/\{(\d+)\}/g,function(e,n){return void 0!==t[n]?t[n]:e})}r.hljs?(r.hljs.initLineNumbersOnLoad=function(e){"interactive"===o.readyState||"complete"===o.readyState?n(e):r.addEventListener("DOMContentLoaded",function(){n(e)})},r.hljs.lineNumbersBlock=d,r.hljs.lineNumbersValue=function(e,n){if("string"!=typeof e)return;var t=document.createElement("code");return t.innerHTML=e,f(t,n)},(e=o.createElement("style")).type="text/css",e.innerHTML=p(".{0}{border-collapse:collapse}.{0} td{padding:0}.{1}:before{content:attr({2})}",[i,c,m]),o.getElementsByTagName("head")[0].appendChild(e)):r.console.error("highlight.js not detected!"),document.addEventListener("copy",function(e){var n,t=window.getSelection();!function(e){for(var n=e;n;){if(n.className&&-1!==n.className.indexOf("hljs-ln-code"))return 1;n=n.parentNode}}(t.anchorNode)||(n=-1!==window.navigator.userAgent.indexOf("Edge")?u(t):t.toString(),e.clipboardData.setData("text/plain",n),e.preventDefault())})}(window,document);

        hljs.initLineNumbersOnLoad()

        window.addEventListener('load', function() {
            document.querySelectorAll('.renderer').forEach(function(element, index) {
                if (index > 0) {
                    element.remove();
                }
            });

            document.querySelector('.default-highlightable-code').style.display = 'block';

            document.querySelectorAll('.highlightable-code').forEach(function(element) {
                element.style.display = 'block';
            })
        });
    </script>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/layout.blade.php ENDPATH**/ ?>
```

# storage/framework/views/8c5f8fcb79702eed393028703c2f1a5b.php

```php
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" style="margin-bottom: -8px;">
  <path fill-rule="evenodd" d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z" clip-rule="evenodd" />
</svg>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/icons/chevron-up.blade.php ENDPATH**/ ?>
```

# storage/framework/views/888268da01796c69e669558c2f1cdd53.php

```php
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                        </div>
                        <?php if(Route::has('login')): ?>
                            <nav class="-mx-3 flex flex-1 justify-end">
                                <?php if(auth()->guard()->check()): ?>
                                    <a
                                        href="<?php echo e(url('/dashboard')); ?>"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                <?php else: ?>
                                    <a
                                        href="<?php echo e(route('login')); ?>"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    <?php if(Route::has('register')): ?>
                                        <a
                                            href="<?php echo e(route('register')); ?>"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </nav>
                        <?php endif; ?>
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <a
                                href="https://laravel.com/docs"
                                id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-light.svg"
                                        alt="Laravel documentation screenshot"
                                        class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                        onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        "
                                    />
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                                        alt="Laravel documentation screenshot"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                    />
                                    <div
                                        class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                    ></div>
                                </div>

                                <div class="relative flex items-center gap-6 lg:items-end">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="#FF2D20" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/><path fill="#FF2D20" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/></svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">Documentation</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                            </p>
                                        </div>
                                    </div>

                                    <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                                </div>
                            </a>

                            <a
                                href="https://laracasts.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <a
                                href="https://laravel-news.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z"/><path d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z"/><path d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <g fill="#FF2D20">
                                            <path
                                                d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"
                                            />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant Ecosystem</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white dark:focus-visible:ring-[#FF2D20]">Forge</a>, <a href="https://vapor.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Vapor</a>, <a href="https://nova.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Nova</a>, <a href="https://envoyer.io" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Envoyer</a>, and <a href="https://herd.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Herd</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Echo</a>, <a href="https://laravel.com/docs/horizon" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Telescope</a>, and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/welcome.blade.php ENDPATH**/ ?>
```

# storage/framework/views/702d042c307c10ef3e38ea96b599c767.php

```php
<?php $__env->startSection('title', 'Galerija'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Galerija</h1>
    <p>Tukaj bo prikazana galerija slik.</p>
    <!-- Začasna rešitev: povezava do Google Drive mape -->
    <a href="https://drive.google.com/drive/folders/YOUR_FOLDER_ID" target="_blank" class="btn btn-primary">Oglej si galerijo na Google Drive</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/galerija.blade.php ENDPATH**/ ?>
```

# storage/framework/views/661e4f6939e869919202039c77ba9722.php

```php
<?php $__currentLoopData = $exception->frames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $frame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div
        class="sm:col-span-2"
        x-show="index === <?php echo e($loop->index); ?>"
    >
        <div class="mb-3">
            <div class="text-md text-gray-500 dark:text-gray-400">
                <div class="mb-2">

                    <?php if(config('app.editor')): ?>
                        <a href="<?php echo e($frame->editorHref()); ?>" class="text-blue-500 hover:underline">
                            <span class="wrap text-gray-900 dark:text-gray-300"><?php echo e($frame->file()); ?></span>
                        </a>
                    <?php else: ?>
                        <span class="wrap text-gray-900 dark:text-gray-300"><?php echo e($frame->file()); ?></span>
                    <?php endif; ?>

                    <span class="font-mono text-xs">:<?php echo e($frame->line()); ?></span>
                </div>
            </div>
        </div>
        <div class="pt-4 text-sm text-gray-500 dark:text-gray-400">
            <pre class="h-[32.5rem] rounded-md dark:bg-gray-800 border dark:border-gray-700"><template x-if="true"><code
                    style="display: none;"
                    id="frame-<?php echo e($loop->index); ?>"
                    class="language-php highlightable-code <?php if($loop->index === $exception->defaultFrame()): ?> default-highlightable-code <?php endif; ?> scrollbar-hidden overflow-y-hidden"
                    data-line-number="<?php echo e($frame->line()); ?>"
                    data-ln-start-from="<?php echo e(max($frame->line() - 5, 1)); ?>"
                ><?php echo e($frame->snippet()); ?></code></template></pre>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/editor.blade.php ENDPATH**/ ?>
```

# storage/framework/views/561ca83e447dd4a4af040ae865fdc07e.php

```php
<svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    <?php echo e($attributes); ?>

>
    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
</svg>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/icons/computer-desktop.blade.php ENDPATH**/ ?>
```

# storage/framework/views/4d40881e1cb4ab3a431293697e86f2a9.php

```php
<?php $__env->startSection('title', 'Pravila'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Pravila</h1>
    <p>Tukaj so navedena pravila našega projekta.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/pravila.blade.php ENDPATH**/ ?>
```

# storage/framework/views/3ad9be3756eff09c5b08d7f3573922a2.php

```php
<header class="mt-3 px-5 sm:mt-10">
    <div class="py-3 dark:border-gray-900 sm:py-5">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="rounded-full bg-red-500/20 p-4 dark:bg-red-500/20">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6 fill-red-500 text-gray-50 dark:text-gray-950"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                    </svg>
                </div>

                <span class="text-dark ml-3 text-2xl font-bold dark:text-white sm:text-3xl">
                    <?php echo e($exception->title()); ?>

                </span>
            </div>

            <div class="flex items-center gap-3 sm:gap-6">
                <?php if (isset($component)) { $__componentOriginal9b6ddd2809dd60ece07dfaf1f3ef876f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b6ddd2809dd60ece07dfaf1f3ef876f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.theme-switcher','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::theme-switcher'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b6ddd2809dd60ece07dfaf1f3ef876f)): ?>
<?php $attributes = $__attributesOriginal9b6ddd2809dd60ece07dfaf1f3ef876f; ?>
<?php unset($__attributesOriginal9b6ddd2809dd60ece07dfaf1f3ef876f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b6ddd2809dd60ece07dfaf1f3ef876f)): ?>
<?php $component = $__componentOriginal9b6ddd2809dd60ece07dfaf1f3ef876f; ?>
<?php unset($__componentOriginal9b6ddd2809dd60ece07dfaf1f3ef876f); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/navigation.blade.php ENDPATH**/ ?>
```

# storage/framework/views/37c45c4f3b4749705c10c25ccf0a3698.php

```php
<?php $__env->startSection('title', 'Razpis'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Razpis</h1>
    <p>Tukaj so informacije o našem razpisu.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/resources/views/razpis.blade.php ENDPATH**/ ?>
```

# storage/framework/views/32fef644bfc45f7984b0ac76d00fed6b.php

```php
<svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    <?php echo e($attributes); ?>

>
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
</svg>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/icons/sun.blade.php ENDPATH**/ ?>
```

# storage/framework/views/29f571fa8fab8d9a78857ff2a52c86bd.php

```php
<?php if (isset($component)) { $__componentOriginal74daf2d0a9c625ad90327a6043d15980 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74daf2d0a9c625ad90327a6043d15980 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="md:flex md:items-center md:justify-between md:gap-2">
        <div class="min-w-0">
            <div class="inline-block rounded-full bg-red-500/20 px-3 py-2 max-w-full text-sm font-bold leading-5 text-red-500 truncate lg:text-base dark:bg-red-500/20">
                <span class="hidden md:inline">
                    <?php echo e($exception->class()); ?>

                </span>
                <span class="md:hidden">
                    <?php echo e(implode(' ', array_slice(explode('\\', $exception->class()), -1))); ?>

                </span>
            </div>
            <div class="mt-4 text-lg font-semibold text-gray-900 break-words dark:text-white lg:text-2xl">
                <?php echo e($exception->message()); ?>

            </div>
        </div>

        <div class="hidden text-right shrink-0 md:block md:min-w-64 md:max-w-80">
            <div>
                <span class="inline-block rounded-full bg-gray-200 px-3 py-2 text-sm leading-5 text-gray-900 max-w-full truncate dark:bg-gray-800 dark:text-white">
                    <?php echo e($exception->request()->method()); ?> <?php echo e($exception->request()->httpHost()); ?>

                </span>
            </div>
            <div class="px-4">
                <span class="text-sm text-gray-500 dark:text-gray-400">PHP <?php echo e(PHP_VERSION); ?> — Laravel <?php echo e(app()->version()); ?></span>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74daf2d0a9c625ad90327a6043d15980)): ?>
<?php $attributes = $__attributesOriginal74daf2d0a9c625ad90327a6043d15980; ?>
<?php unset($__attributesOriginal74daf2d0a9c625ad90327a6043d15980); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74daf2d0a9c625ad90327a6043d15980)): ?>
<?php $component = $__componentOriginal74daf2d0a9c625ad90327a6043d15980; ?>
<?php unset($__componentOriginal74daf2d0a9c625ad90327a6043d15980); ?>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/header.blade.php ENDPATH**/ ?>
```

# storage/framework/views/1732deeac083cbe3328bb1883ebf63ac.php

```php
<?php use \Illuminate\Support\Str; ?>
<?php if (isset($component)) { $__componentOriginal74daf2d0a9c625ad90327a6043d15980 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74daf2d0a9c625ad90327a6043d15980 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.card','data' => ['class' => 'mt-6 overflow-x-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-6 overflow-x-auto']); ?>
    <div>
        <span class="text-xl font-bold lg:text-2xl">Request</span>
    </div>

    <div class="mt-2">
        <span><?php echo e($exception->request()->method()); ?></span>
        <span class="text-gray-500"><?php echo e(Str::start($exception->request()->path(), '/')); ?></span>
    </div>

    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white">Headers</span>
    </div>

    <dl class="mt-1 grid grid-cols-1 rounded border dark:border-gray-800">
        <?php $__empty_1 = true; $__currentLoopData = $exception->requestHeaders(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="flex items-center gap-2 <?php echo e($loop->first ? '' : 'border-t'); ?> dark:border-gray-800">
                <span
                    data-tippy-content="<?php echo e($key); ?>"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                >
                    <?php echo e($key); ?>

                </span>
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x"><?php echo e($value); ?></code></pre>
                </span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <span
                class="min-w-0 flex-grow"
                style="-webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem))"
            >
                <pre class="scrollbar-hidden mx-5 my-3 overflow-y-hidden text-xs lg:text-sm"><code class="overflow-y-hidden scrollbar-hidden overflow-x-scroll scrollbar-hidden-x">No headers data</code></pre>
            </span>
        <?php endif; ?>
    </dl>

    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white">Body</span>
    </div>

    <div class="mt-1 rounded border dark:border-gray-800">
        <div class="flex items-center">
            <span
                class="min-w-0 flex-grow"
                style="-webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem))"
            >
                <pre class="scrollbar-hidden mx-5 my-3 overflow-y-hidden text-xs lg:text-sm"><code class="overflow-y-hidden scrollbar-hidden overflow-x-scroll scrollbar-hidden-x"><?php echo $exception->requestBody() ?: 'No body data'; ?></code></pre>
            </span>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74daf2d0a9c625ad90327a6043d15980)): ?>
<?php $attributes = $__attributesOriginal74daf2d0a9c625ad90327a6043d15980; ?>
<?php unset($__attributesOriginal74daf2d0a9c625ad90327a6043d15980); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74daf2d0a9c625ad90327a6043d15980)): ?>
<?php $component = $__componentOriginal74daf2d0a9c625ad90327a6043d15980; ?>
<?php unset($__componentOriginal74daf2d0a9c625ad90327a6043d15980); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal74daf2d0a9c625ad90327a6043d15980 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74daf2d0a9c625ad90327a6043d15980 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.card','data' => ['class' => 'mt-6 overflow-x-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-6 overflow-x-auto']); ?>
    <div>
        <span class="text-xl font-bold lg:text-2xl">Application</span>
    </div>

    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white"> Routing </span>
    </div>

    <dl class="mt-1 grid grid-cols-1 rounded border dark:border-gray-800">
        <?php $__empty_1 = true; $__currentLoopData = $exception->applicationRouteContext(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="flex items-center gap-2 <?php echo e($loop->first ? '' : 'border-t'); ?> dark:border-gray-800">
                <span
                    data-tippy-content="<?php echo e($name); ?>"
                    class="lg:text-md w-[8rem] flex-none cursor-pointer truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]"
                    ><?php echo e($name); ?></span
                >
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x"><?php echo e($value); ?></code></pre>
                </span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <span
                class="min-w-0 flex-grow"
                style="-webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem))"
            >
                <pre class="scrollbar-hidden mx-5 my-3 overflow-y-hidden text-xs lg:text-sm"><code class="overflow-y-hidden scrollbar-hidden overflow-x-scroll scrollbar-hidden-x">No routing data</code></pre>
            </span>
        <?php endif; ?>
    </dl>

    <?php if($routeParametersContext = $exception->applicationRouteParametersContext()): ?>
        <div class="mt-4">
            <span class="text-gray-900 dark:text-white text-sm"> Routing Parameters </span>
        </div>

        <div class="mt-1 rounded border dark:border-gray-800">
            <div class="flex items-center">
                <span
                    class="min-w-0 flex-grow"
                    style="-webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem))"
                >
                    <pre class="scrollbar-hidden mx-5 my-3 overflow-y-hidden text-xs lg:text-sm"><code class="overflow-y-hidden scrollbar-hidden overflow-x-scroll scrollbar-hidden-x"><?php echo $routeParametersContext; ?></code></pre>
                </span>
            </div>
        </div>
    <?php endif; ?>

    <div class="mt-4">
        <span class="font-semibold text-gray-900 dark:text-white"> Database Queries </span>
        <span class="text-xs text-gray-500 dark:text-gray-400">
            <?php if(count($exception->applicationQueries()) === 100): ?>
                only the first 100 queries are displayed
            <?php endif; ?>
        </span>
    </div>

    <dl class="mt-1 grid grid-cols-1 rounded border dark:border-gray-800">
        <?php $__empty_1 = true; $__currentLoopData = $exception->applicationQueries(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as ['connectionName' => $connectionName, 'sql' => $sql, 'time' => $time]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="flex items-center gap-2 <?php echo e($loop->first ? '' : 'border-t'); ?> dark:border-gray-800">
                <div class="lg:text-md w-[8rem] flex-none truncate border-r px-5 py-3 text-sm dark:border-gray-800 lg:w-[12rem]">
                    <span><?php echo e($connectionName); ?></span>
                    <span class="hidden text-xs text-gray-500 lg:inline-block">(<?php echo e($time); ?> ms)</span>
                </div>
                <span
                    class="min-w-0 flex-grow"
                    style="
                        -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem));
                    "
                >
                    <pre class="scrollbar-hidden overflow-y-hidden text-xs lg:text-sm"><code class="px-5 py-3 overflow-y-hidden scrollbar-hidden max-h-32 overflow-x-scroll scrollbar-hidden-x"><?php echo e($sql); ?></code></pre>
                </span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <span
                class="min-w-0 flex-grow"
                style="-webkit-mask-image: linear-gradient(90deg, transparent 0, #000 1rem, #000 calc(100% - 3rem), transparent calc(100% - 1rem))"
            >
                <pre class="scrollbar-hidden mx-5 my-3 overflow-y-hidden text-xs lg:text-sm"><code class="overflow-y-hidden scrollbar-hidden overflow-x-scroll scrollbar-hidden-x">No query data</code></pre>
            </span>
        <?php endif; ?>
    </dl>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74daf2d0a9c625ad90327a6043d15980)): ?>
<?php $attributes = $__attributesOriginal74daf2d0a9c625ad90327a6043d15980; ?>
<?php unset($__attributesOriginal74daf2d0a9c625ad90327a6043d15980); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74daf2d0a9c625ad90327a6043d15980)): ?>
<?php $component = $__componentOriginal74daf2d0a9c625ad90327a6043d15980; ?>
<?php unset($__componentOriginal74daf2d0a9c625ad90327a6043d15980); ?>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/components/context.blade.php ENDPATH**/ ?>
```

# storage/framework/views/1537f15533de144143734c2c66cfb9d7.php

```php
<?php if (isset($component)) { $__componentOriginalbbd4eeea836234825f7514ed20d2d52d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbbd4eeea836234825f7514ed20d2d52d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.layout','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
    <div class="renderer container mx-auto lg:px-8">
        <?php if (isset($component)) { $__componentOriginal10cd8b81fdad4ce00a06c99f27003014 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10cd8b81fdad4ce00a06c99f27003014 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.navigation','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10cd8b81fdad4ce00a06c99f27003014)): ?>
<?php $attributes = $__attributesOriginal10cd8b81fdad4ce00a06c99f27003014; ?>
<?php unset($__attributesOriginal10cd8b81fdad4ce00a06c99f27003014); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10cd8b81fdad4ce00a06c99f27003014)): ?>
<?php $component = $__componentOriginal10cd8b81fdad4ce00a06c99f27003014; ?>
<?php unset($__componentOriginal10cd8b81fdad4ce00a06c99f27003014); ?>
<?php endif; ?>

        <main class="px-6 pb-12 pt-6">
            <div class="container mx-auto">
                <?php if (isset($component)) { $__componentOriginal1e817eb3c41fe3ea9eb0c15213c4b557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e817eb3c41fe3ea9eb0c15213c4b557 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.header','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e817eb3c41fe3ea9eb0c15213c4b557)): ?>
<?php $attributes = $__attributesOriginal1e817eb3c41fe3ea9eb0c15213c4b557; ?>
<?php unset($__attributesOriginal1e817eb3c41fe3ea9eb0c15213c4b557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e817eb3c41fe3ea9eb0c15213c4b557)): ?>
<?php $component = $__componentOriginal1e817eb3c41fe3ea9eb0c15213c4b557; ?>
<?php unset($__componentOriginal1e817eb3c41fe3ea9eb0c15213c4b557); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal1dc7d865c9b6045c4d68faf8bde572ed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1dc7d865c9b6045c4d68faf8bde572ed = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.trace-and-editor','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::trace-and-editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1dc7d865c9b6045c4d68faf8bde572ed)): ?>
<?php $attributes = $__attributesOriginal1dc7d865c9b6045c4d68faf8bde572ed; ?>
<?php unset($__attributesOriginal1dc7d865c9b6045c4d68faf8bde572ed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1dc7d865c9b6045c4d68faf8bde572ed)): ?>
<?php $component = $__componentOriginal1dc7d865c9b6045c4d68faf8bde572ed; ?>
<?php unset($__componentOriginal1dc7d865c9b6045c4d68faf8bde572ed); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal523928ff754f95aea6faf87444393a04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal523928ff754f95aea6faf87444393a04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-exceptions-renderer::components.context','data' => ['exception' => $exception]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('laravel-exceptions-renderer::context'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['exception' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exception)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal523928ff754f95aea6faf87444393a04)): ?>
<?php $attributes = $__attributesOriginal523928ff754f95aea6faf87444393a04; ?>
<?php unset($__attributesOriginal523928ff754f95aea6faf87444393a04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal523928ff754f95aea6faf87444393a04)): ?>
<?php $component = $__componentOriginal523928ff754f95aea6faf87444393a04; ?>
<?php unset($__componentOriginal523928ff754f95aea6faf87444393a04); ?>
<?php endif; ?>
            </div>
        </main>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbbd4eeea836234825f7514ed20d2d52d)): ?>
<?php $attributes = $__attributesOriginalbbd4eeea836234825f7514ed20d2d52d; ?>
<?php unset($__attributesOriginalbbd4eeea836234825f7514ed20d2d52d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbbd4eeea836234825f7514ed20d2d52d)): ?>
<?php $component = $__componentOriginalbbd4eeea836234825f7514ed20d2d52d; ?>
<?php unset($__componentOriginalbbd4eeea836234825f7514ed20d2d52d); ?>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Providers/../resources/exceptions/renderer/show.blade.php ENDPATH**/ ?>
```

# storage/framework/views/0b0f59e39718457a11df0d8f8a995c8e.php

```php
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}code{font-family:monospace,monospace;font-size:1em}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}code{font-family:Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-gray-400{--border-opacity:1;border-color:#cbd5e0;border-color:rgba(203,213,224,var(--border-opacity))}.border-t{border-top-width:1px}.border-r{border-right-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-xl{max-width:36rem}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.uppercase{text-transform:uppercase}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.tracking-wider{letter-spacing:.05em}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@-webkit-keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@-webkit-keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@-webkit-keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@-webkit-keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                    <div class="px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">
                        <?php echo $__env->yieldContent('code'); ?>
                    </div>

                    <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                        <?php echo $__env->yieldContent('message'); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/znot-spletna-stran/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/views/minimal.blade.php ENDPATH**/ ?>
```

# storage/framework/views/.gitignore

```
*
!.gitignore

```

# storage/framework/testing/.gitignore

```
*
!.gitignore

```

# storage/framework/sessions/.gitignore

```
*
!.gitignore

```

# storage/framework/cache/.gitignore

```
*
!data/
!.gitignore

```

# app/Http/Controllers/Controller.php

```php
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

```

# storage/framework/cache/data/.gitignore

```
*
!.gitignore

```

