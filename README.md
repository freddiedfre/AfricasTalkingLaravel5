# INSTALLATION AND USAGE GUIDE

NB. 
- This package is a ServiceProvider for aricastalking SMS gateway laravel 5.2.
- You will need a username and API key from https://www.africastalking.com/


## Installation Steps

- run the following composer command at the root of your projects.


        composer require freddiedfre/africas_talking_laravel_5=dev-master

- Update the config/app.php with the following code. 


        'providers' => [
        ...
        FreddieDfre\AfricasTalkingLaravel5\AfricasTalkingLaravel5ServiceProvider::class,
        ]
        
        
        'aliases' => [
        ...
        'SMSProvider' =>FreddieDfre\AfricasTalkingLaravel5\AfricasTalkingLaravel5Facade::class,
        ]

- run `php artisan vendor:publish`

- Navigate to config/AfricastalkingGateway.php and fill in your username and api_key


        <?php 
        return [
            'username' => 'yourafricastalking username',
            'api_key' => 'Your API Key obtained from AfricasTalking.com',
            ];

- run `php artisan config:clear`

- run `composer dump-autoload`

## Usage Instructions

The AfricasTalkingGateway.php methods will now be available via a Facade. 
- Text Message Methods
    * `SMSProvider::sendMessage($to_, $message_, $from_ = null, $bulkSMSMode_ = 1, Array $options_ = array());`
    * `SMSProvider::fetchMessages($lastReceivedId_);`

- Subscription Services Methods
    * `SMSProvider::createSubscription($phoneNumber_, $shortCode_, $keyword_);`
    * `SMSProvider::deleteSubscription($phoneNumber_, $shortCode_, $keyword_);`
    * `SMSProvider::fetchPremiumSubscriptions($shortCode_, $keyword_, $lastReceivedId_ = 0);`
    * `SMSProvider::getNumQueuedCalls($phoneNumber_, $queueName = null);` 

- Call methods
    * `SMSProvider::call($from_, $to_);`
    * `SMSProvider::getNumQueuedCalls($phoneNumber_, $queueName = null);`		
    * `SMSProvider::uploadMediaFile($url_);`
   
- Airtime method
    * `SMSProvider::sendAirtime($recipients);`

- User info method
    * `SMSProvider::getUserData();`

## Test Example

Add the following route to your routes.php and navigate to it on your browser.

    Route::get('test', function () {
        SMSProvider::sendMessage('ReplaceWithYouPhoneNumber', 'ReplaceWithYourSampleMessage');
    });


