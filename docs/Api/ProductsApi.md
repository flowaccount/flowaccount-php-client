# OpenAPI\Client\ProductsApi

All URIs are relative to *https://openapi.flowaccount.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsGet**](ProductsApi.md#productsGet) | **GET** /products | Get list all products.
[**productsIdGet**](ProductsApi.md#productsIdGet) | **GET** /products/{id} | Get products.
[**productsIdPut**](ProductsApi.md#productsIdPut) | **PUT** /products/{id} | Update products.
[**productsPost**](ProductsApi.md#productsPost) | **POST** /products | Create products.



## productsGet

> \OpenAPI\Client\Model\ProductResponse productsGet($authorization)

Get list all products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer accessToken'; // string | 

try {
    $result = $apiInstance->productsGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [default to &#39;Bearer accessToken&#39;]

### Return type

[**\OpenAPI\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## productsIdGet

> \OpenAPI\Client\Model\ProductResponse productsIdGet($authorization, $id)

Get products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer accessToken'; // string | เลข Id Product
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->productsIdGet($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| เลข Id Product | [default to &#39;Bearer accessToken&#39;]
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## productsIdPut

> \OpenAPI\Client\Model\ProductResponse productsIdPut($authorization, $id)

Update products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer accessToken'; // string | เลข Id Product
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->productsIdPut($authorization, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| เลข Id Product | [default to &#39;Bearer accessToken&#39;]
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## productsPost

> \OpenAPI\Client\Model\ProductResponse productsPost($authorization, $product)

Create products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer accessToken'; // string | 
$product = new \OpenAPI\Client\Model\Product(); // \OpenAPI\Client\Model\Product | 

try {
    $result = $apiInstance->productsPost($authorization, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [default to &#39;Bearer accessToken&#39;]
 **product** | [**\OpenAPI\Client\Model\Product**](../Model/Product.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

