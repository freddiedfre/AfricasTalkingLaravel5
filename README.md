INSTALLATION AND USAGE GUIDE


####################################################################################################################
NB. 
1. The Package was put together to work on laravel 5.2.
2. You will need a username and API key from https://www.africastalking.com/
3. 
####################################################################################################################

Installation Steps

1. run composer require freddiedfre/africas_talking_laravel_5=dev-master  from your projects root.
2. In aconfig/app.php add 
    a) FreddieDfre\AfricasTalkingLaravel5\AfricasTalkingLaravel5ServiceProvider::class, to 'providers' => []
    b) 'SMSProvider' =>FreddieDfre\AfricasTalkingLaravel5\AfricasTalkingLaravel5Facade::class, to 'aliases' => []
3. run php artisan vendor:publish
4. Navigate to YourApp/config/AfricastalkingGateway.php and fill in your username and api_key
5. run php artisan config:clear
5. run composer dump-autoload

####################################################################################################################

Usage Instructions

The AfricasTalkingGateway.php methods will now be available via a Facade. 
1. Text Message Methods
      SMSProvider::sendMessage($to_, $message_, $from_ = null, $bulkSMSMode_ = 1, Array $options_ = array());
      SMSProvider::fetchMessages($lastReceivedId_);

2. Subscription Services Methods
      SMSProvider::createSubscription($phoneNumber_, $shortCode_, $keyword_);
      SMSProvider::deleteSubscription($phoneNumber_, $shortCode_, $keyword_);
      SMSProvider::fetchPremiumSubscriptions($shortCode_, $keyword_, $lastReceivedId_ = 0);
      SMSProvider::getNumQueuedCalls($phoneNumber_, $queueName = null); 

3. Call methods
      SMSProvider::call($from_, $to_);
      SMSProvider::getNumQueuedCalls($phoneNumber_, $queueName = null);		
      SMSProvider::uploadMediaFile($url_);
   
4. Airtime method
      SMSProvider::sendAirtime($recipients);

5. User info method
      SMSProvider::getUserData();

####################################################################################################################
Test Example

Add the following route to your routes.php and navigate to it on your browser.

Route::get('test', function () {
    SMSProvider::sendMessage('ReplaceWithYouPhoneNumber', 'ReplaceWithYourSampleMessage');
});

####################################################################################################################
 


