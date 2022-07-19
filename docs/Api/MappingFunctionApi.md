# Cloudinary\MappingFunctionApi

All URIs are relative to https://api.cloudinary.com/v2/demo.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMappingFunction()**](MappingFunctionApi.md#createMappingFunction) | **POST** /media_delivery/mapping_functions | Create a new Mapping Function
[**deleteMappingFunction()**](MappingFunctionApi.md#deleteMappingFunction) | **DELETE** /media_delivery/mapping_functions/{id} | Delete the Mapping Function
[**getMappingFunction()**](MappingFunctionApi.md#getMappingFunction) | **GET** /media_delivery/mapping_functions/{id} | Get the Mapping Function
[**getMappingFunctions()**](MappingFunctionApi.md#getMappingFunctions) | **GET** /media_delivery/mapping_functions | Get the Mapping Functions
[**updateMappingFunction()**](MappingFunctionApi.md#updateMappingFunction) | **PATCH** /media_delivery/mapping_functions/{id} | Update the Mapping Function


## `createMappingFunction()`

```php
createMappingFunction($mapping_function_create_payload): \Cloudinary\Model\MappingFunction
```

Create a new Mapping Function

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');

// Configure Bearer (JWT) authorization: bearerAuth
// $config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\MappingFunctionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mapping_function_create_payload = new \Cloudinary\Model\MappingFunctionCreatePayload(); // \Cloudinary\Model\MappingFunctionCreatePayload | Payload to create Mapping Function

try {
    $result = $apiInstance->createMappingFunction($mapping_function_create_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingFunctionApi->createMappingFunction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapping_function_create_payload** | [**\Cloudinary\Model\MappingFunctionCreatePayload**](../Model/MappingFunctionCreatePayload.md)| Payload to create Mapping Function |

### Return type

[**\Cloudinary\Model\MappingFunction**](../Model/MappingFunction.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMappingFunction()`

```php
deleteMappingFunction($id)
```

Delete the Mapping Function

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');

// Configure Bearer (JWT) authorization: bearerAuth
// $config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\MappingFunctionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1abc2def345g678hij90; // string | ID of the Mapping Function

try {
    $apiInstance->deleteMappingFunction($id);
} catch (Exception $e) {
    echo 'Exception when calling MappingFunctionApi->deleteMappingFunction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Mapping Function |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMappingFunction()`

```php
getMappingFunction($id): \Cloudinary\Model\MappingFunction
```

Get the Mapping Function

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');

// Configure Bearer (JWT) authorization: bearerAuth
// $config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\MappingFunctionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1abc2def345g678hij90; // string | ID of the Mapping Function

try {
    $result = $apiInstance->getMappingFunction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingFunctionApi->getMappingFunction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Mapping Function |

### Return type

[**\Cloudinary\Model\MappingFunction**](../Model/MappingFunction.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMappingFunctions()`

```php
getMappingFunctions(): \Cloudinary\Model\MappingFunction[]
```

Get the Mapping Functions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');

// Configure Bearer (JWT) authorization: bearerAuth
// $config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\MappingFunctionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMappingFunctions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingFunctionApi->getMappingFunctions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Cloudinary\Model\MappingFunction[]**](../Model/MappingFunction.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMappingFunction()`

```php
updateMappingFunction($id, $mapping_function_update_payload): \Cloudinary\Model\MappingFunction
```

Update the Mapping Function

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');

// Configure Bearer (JWT) authorization: bearerAuth
// $config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\MappingFunctionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1abc2def345g678hij90; // string | ID of the Mapping Function
$mapping_function_update_payload = new \Cloudinary\Model\MappingFunctionUpdatePayload(); // \Cloudinary\Model\MappingFunctionUpdatePayload | Payload to update the Mapping Function

try {
    $result = $apiInstance->updateMappingFunction($id, $mapping_function_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingFunctionApi->updateMappingFunction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Mapping Function |
 **mapping_function_update_payload** | [**\Cloudinary\Model\MappingFunctionUpdatePayload**](../Model/MappingFunctionUpdatePayload.md)| Payload to update the Mapping Function |

### Return type

[**\Cloudinary\Model\MappingFunction**](../Model/MappingFunction.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
