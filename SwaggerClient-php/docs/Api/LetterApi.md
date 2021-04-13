# Swagger\Client\LetterApi

All URIs are relative to *http://api.postbyte.co.uk/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLetter**](LetterApi.md#addletter) | **POST** /mailings/{mailing_id}/letters | Add a Letter
[**getLetters**](LetterApi.md#getletters) | **GET** /mailings/{mailing_id}/letters | View letters for a mailing

# **addLetter**
> \Swagger\Client\Model\LetterResponse addLetter($body, $mailing_id)

Add a Letter

This adds a single letter to a mailing that must have been created previously.  Requests to this resource are idempotent, so if you submit an identical request multiple times then it will assume that is a single letter, it won't send duplicates. If you submit the same PDF file, with the same recipient info then you will get a `409 - Letter has already been added` response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiTokenAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\LetterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Letter(); // \Swagger\Client\Model\Letter | Mailing payload
$mailing_id = new \Swagger\Client\Model\MailingID(); // \Swagger\Client\Model\MailingID | Mailing ID of the mailing you want to add a letter to

try {
    $result = $apiInstance->addLetter($body, $mailing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LetterApi->addLetter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Letter**](../Model/Letter.md)| Mailing payload |
 **mailing_id** | [**\Swagger\Client\Model\MailingID**](../Model/.md)| Mailing ID of the mailing you want to add a letter to |

### Return type

[**\Swagger\Client\Model\LetterResponse**](../Model/LetterResponse.md)

### Authorization

[ApiTokenAuth](../../README.md#ApiTokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLetters**
> \Swagger\Client\Model\LetterResponse getLetters($mailing_id)

View letters for a mailing

Returns information about the letters of a given mailing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiTokenAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\LetterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailing_id = new \Swagger\Client\Model\MailingID(); // \Swagger\Client\Model\MailingID | ID of the Mailing the letters belong to

try {
    $result = $apiInstance->getLetters($mailing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LetterApi->getLetters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailing_id** | [**\Swagger\Client\Model\MailingID**](../Model/.md)| ID of the Mailing the letters belong to |

### Return type

[**\Swagger\Client\Model\LetterResponse**](../Model/LetterResponse.md)

### Authorization

[ApiTokenAuth](../../README.md#ApiTokenAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

