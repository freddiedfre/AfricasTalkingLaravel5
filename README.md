## Introduction
The Africa's Talking Laravel 5 API package is an easy to use package for Laravel that adds the capability to send and receive SMS messages to your Laravel web application. 
This package allows you to use:
* Text Message Methods
* Subscription Services Methods 
* Call methods
* Airtime methods
* User info methods

## Official Documentation
This Africa's Talking Laravel 5 API package Documentation can be found [here](https://valentinemwangi.github.io/AfricasTalkingLaravel5).

## Requirements
1. **PHP 5.6+**
2. **Laravel 5.2+**

## Configuration
### Composer
Run the following command on the terminal at root folder of your project:
```php
$ composer require freddiedfre/africas_talking_laravel_5=dev-master
```
### Service Provider
Next, you will need to register the service provider with Laravel by adding the service provider by modifying the providers array in `config/app.php`:
```php
'providers' => [
    //...
    'FreddieDfre\AfricasTalkingLaravel5\AfricasTalkingLaravel5ServiceProvider::class,'
],
```

### Aliases
Finally, register the Facade.
Add 
```php
'SMSProvider' => FreddieDfre\AfricasTalkingLaravel5\AfricasTalkingLaravel5Facade::class
```
in your `config/app.php` configuration file within the aliases array.

### API Settings
You must run the following command to save your configuration files to your local app:
```bash
$ php artisan vendor:publish
```
### Driver Configuration
Navigate to `config/AfricastalkingGateway.php` and fill in your username and api_key that you will get from your AfricasTalking Dashboard under the `settings tab->API KEY` on the [AfricasTalking website.](https://www.africastalking.com)
```php
return [`
    'username' => 'Replace this text with your AfricasTalking username.',
    'api_key' => 'Replace this text with your API Key obtained from AfricasTalking.',`
    `];
```

## Usage
### Basic Usage
This package operates in much of the same way as the Laravel Mail service provider. If you are familiar with this then the basic usage should feel like home. 

Always make sure to include the `use SMSProvider;` at the top of every controller where you intend to use this package. Then in your controller functions, below is the the most basic way to handle the Africas Talking methods:
* Text Message Methods
```php
SMSProvider::sendMessage($phoneno, $message);
SMSProvider::sendMessage($to_, $message_, $from_ = null, $bulkSMSMode_ = 1, Array $options_ = array());
SMSProvider::fetchMessages($lastReceivedId_);
```
* Subscription Services Methods
```php
SMSProvider::createSubscription($phoneNumber_, $shortCode_, $keyword_);
SMSProvider::deleteSubscription($phoneNumber_, $shortCode_, $keyword_);
SMSProvider::fetchPremiumSubscriptions($shortCode_, $keyword_, $lastReceivedId_ = 0);
SMSProvider::getNumQueuedCalls($phoneNumber_, $queueName = null);
```
* Call methods
```php
SMSProvider::call($from_, $to_);
SMSProvider::getNumQueuedCalls($phoneNumber_, $queueName = null);
SMSProvider::uploadMediaFile($url_);
```
* Airtime method
```php
SMSProvider::sendAirtime($recipients);
```
* User Info method
```php
SMSProvider::getUserData();
```

## Licence
This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Contributing 
A great way to say thanks!

1. Report a bug.
2. Report a security issue.
3. Contribute to this project.

Fork this project, make your changes, and submit a pull request. It's that easy. Cheers.
