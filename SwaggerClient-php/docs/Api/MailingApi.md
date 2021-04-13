# Swagger\Client\MailingApi

All URIs are relative to *http://api.postbyte.co.uk/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelMailing**](MailingApi.md#cancelmailing) | **POST** /mailings/{mailing_id}/cancel | Cancel a Mailing
[**confirmMailing**](MailingApi.md#confirmmailing) | **POST** /mailings/{mailing_id}/confirm | Confirm a Mailing
[**createMailing**](MailingApi.md#createmailing) | **POST** /mailings | Create a Mailing
[**getMailing**](MailingApi.md#getmailing) | **GET** /mailings/{mailing_id} | Get a Mailing

# **cancelMailing**
> cancelMailing($mailing_id)

Cancel a Mailing

Sets the status of a mailing to cancelled so that it cannot be sent.  This can be done upto 3 hours after the sending has been triggered, when the mailing is in 'Pending Printing' status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiTokenAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\MailingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailing_id = new \Swagger\Client\Model\MailingID(); // \Swagger\Client\Model\MailingID | Mailing ID of the mailing you want to cancel

try {
    $apiInstance->cancelMailing($mailing_id);
} catch (Exception $e) {
    echo 'Exception when calling MailingApi->cancelMailing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailing_id** | [**\Swagger\Client\Model\MailingID**](../Model/.md)| Mailing ID of the mailing you want to cancel |

### Return type

void (empty response body)

### Authorization

[ApiTokenAuth](../../README.md#ApiTokenAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmMailing**
> confirmMailing($mailing_id)

Confirm a Mailing

Sets the status of a mailing from `Awaiting Confirmation` to `Ready for Sending`  Once a mailing is in the 'Ready for Sending' the user must login to the web portal to review and send the mailing. Triggering the actual send cannot be done directly from the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiTokenAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\MailingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailing_id = new \Swagger\Client\Model\MailingID(); // \Swagger\Client\Model\MailingID | Mailing ID of the mailing you want to confirm

try {
    $apiInstance->confirmMailing($mailing_id);
} catch (Exception $e) {
    echo 'Exception when calling MailingApi->confirmMailing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailing_id** | [**\Swagger\Client\Model\MailingID**](../Model/.md)| Mailing ID of the mailing you want to confirm |

### Return type

void (empty response body)

### Authorization

[ApiTokenAuth](../../README.md#ApiTokenAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMailing**
> \Swagger\Client\Model\MailingNew createMailing($body)

Create a Mailing

This is the first request you will want to make when sending a mailing. This will create a new mailing and return the ID so that letters can be added to the mailing for sending

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiTokenAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\MailingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Mailing(); // \Swagger\Client\Model\Mailing | Mailing payload

try {
    $result = $apiInstance->createMailing($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingApi->createMailing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Mailing**](../Model/Mailing.md)| Mailing payload |

### Return type

[**\Swagger\Client\Model\MailingNew**](../Model/MailingNew.md)

### Authorization

[ApiTokenAuth](../../README.md#ApiTokenAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailing**
> \Swagger\Client\Model\MailingID getMailing($mailing_id)

Get a Mailing

Gets a mailing record. This can be used to poll for the status of a mailing, for example to check to see if all the letters have been correctly added to the mailing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiTokenAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\MailingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailing_id = new \Swagger\Client\Model\MailingPrinting(); // \Swagger\Client\Model\MailingPrinting | Mailing ID of the mailing you want to cancel

try {
    $result = $apiInstance->getMailing($mailing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingApi->getMailing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailing_id** | [**\Swagger\Client\Model\MailingPrinting**](../Model/.md)| Mailing ID of the mailing you want to cancel |

### Return type

[**\Swagger\Client\Model\MailingID**](../Model/MailingID.md)

### Authorization

[ApiTokenAuth](../../README.md#ApiTokenAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

