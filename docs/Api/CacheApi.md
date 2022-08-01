# Cloudinary\MediaDelivery\CacheApi

All URIs are relative to https://api.cloudinary.com/v2/demo.

Method | HTTP request | Description
------------- | ------------- | -------------
[**invalidate()**](CacheApi.md#invalidate) | **POST** /media_delivery/cache/invalidate | Invalidate the cache
[**warmup()**](CacheApi.md#warmup) | **POST** /media_delivery/cache/warmup | Warm up the cache


## `invalidate()`

```php
invalidate($cache_invalidate_request_payload)
```

Invalidate the cache

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\CacheApi(null, $config);

$cache_invalidate_request_payload = new \Cloudinary\MediaDelivery\Model\CacheInvalidateRequestPayload(); // \Cloudinary\MediaDelivery\Model\CacheInvalidateRequestPayload | Payload to invalidate the cache

try {
    $apiInstance->invalidate($cache_invalidate_request_payload);
} catch (Exception $e) {
    echo 'Exception when calling CacheApi->invalidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cache_invalidate_request_payload** | [**\Cloudinary\MediaDelivery\Model\CacheInvalidateRequestPayload**](../Model/CacheInvalidateRequestPayload.md)| Payload to invalidate the cache |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warmup()`

```php
warmup($cache_warmup_request_payload): \Cloudinary\MediaDelivery\Model\CacheWarmupSuccessResponse
```

Warm up the cache

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\CacheApi(null, $config);

$cache_warmup_request_payload = new \Cloudinary\MediaDelivery\Model\CacheWarmupRequestPayload(); // \Cloudinary\MediaDelivery\Model\CacheWarmupRequestPayload | Payload to warm up the cache

try {
    $result = $apiInstance->warmup($cache_warmup_request_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CacheApi->warmup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cache_warmup_request_payload** | [**\Cloudinary\MediaDelivery\Model\CacheWarmupRequestPayload**](../Model/CacheWarmupRequestPayload.md)| Payload to warm up the cache |

### Return type

[**\Cloudinary\MediaDelivery\Model\CacheWarmupSuccessResponse**](../Model/CacheWarmupSuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
