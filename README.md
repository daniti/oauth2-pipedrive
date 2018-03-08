# oauth2-pipedrive
Pipedrive OAuth 2.0 client provider for PHP League OAuth2 Client

composer require daniti/oauth2-pipedrive

include `vendor/autoload.php`
```php
use Daniti\OAuth2\Client\Provider\Pipedrive;
$provider = new Daniti\OAuth2\Client\Provider\Pipedrive(array(
    'clientId' => 'XXXXX',    // The client ID assigned to you by the provider
    'clientSecret' => 'XXXXX',   // The client password assigned to you by the provider
    'redirectUri' => 'XXXXX'
));
```
Please look at League OAuth2 Client's documentation for examples on how to implement the auth flow: https://github.com/thephpleague/oauth2-client
