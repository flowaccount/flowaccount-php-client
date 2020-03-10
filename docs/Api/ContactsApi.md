# OpenAPI\Client\ContactsApi

All URIs are relative to *https://openapi.flowaccount.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactsGet**](ContactsApi.md#contactsGet) | **GET** /contacts | Get list all contacts.
[**contactsIdDelete**](ContactsApi.md#contactsIdDelete) | **DELETE** /contacts/{id} | Delete contacts.
[**contactsIdGet**](ContactsApi.md#contactsIdGet) | **GET** /contacts/{id} | Get contacts.
[**contactsIdPut**](ContactsApi.md#contactsIdPut) | **PUT** /contacts/{id} | Update contacts.
[**contactsPost**](ContactsApi.md#contactsPost) | **POST** /contacts | Create contacts



## contactsGet

> \OpenAPI\Client\Model\ContactResponse contactsGet($authorization)

Get list all contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer accessToken'; // string | 

try {
    $result = $apiInstance->contactsGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [default to &#39;Bearer accessToken&#39;]

### Return type

[**\OpenAPI\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## contactsIdDelete

> \OpenAPI\Client\Model\DeleteResponse contactsIdDelete($authorization, $id)

Delete contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer accessToken'; // string | 
$id = 'id_example'; // string | เลข Id Contact

try {
    $result = $apiInstance->contactsIdDelete($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [default to &#39;Bearer accessToken&#39;]
 **id** | **string**| เลข Id Contact |

### Return type

[**\OpenAPI\Client\Model\DeleteResponse**](../Model/DeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## contactsIdGet

> \OpenAPI\Client\Model\ContactResponse contactsIdGet($authorization, $id)

Get contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer accessToken'; // string | 
$id = 'id_example'; // string | เลข Id Contact

try {
    $result = $apiInstance->contactsIdGet($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [default to &#39;Bearer accessToken&#39;]
 **id** | **string**| เลข Id Contact |

### Return type

[**\OpenAPI\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## contactsIdPut

> \OpenAPI\Client\Model\ContactResponse contactsIdPut($authorization, $id, $contact)

Update contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer accessToken'; // string | 
$id = 'id_example'; // string | เลข Id Contact
$contact = new \OpenAPI\Client\Model\Contact(); // \OpenAPI\Client\Model\Contact | 

try {
    $result = $apiInstance->contactsIdPut($authorization, $id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [default to &#39;Bearer accessToken&#39;]
 **id** | **string**| เลข Id Contact |
 **contact** | [**\OpenAPI\Client\Model\Contact**](../Model/Contact.md)|  |

### Return type

[**\OpenAPI\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## contactsPost

> \OpenAPI\Client\Model\ContactResponse contactsPost($authorization, $contact)

Create contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer accessToken'; // string | 
$contact = new \OpenAPI\Client\Model\Contact(); // \OpenAPI\Client\Model\Contact | 

try {
    $result = $apiInstance->contactsPost($authorization, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [default to &#39;Bearer accessToken&#39;]
 **contact** | [**\OpenAPI\Client\Model\Contact**](../Model/Contact.md)|  |

### Return type

[**\OpenAPI\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

