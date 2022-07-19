# Cloudinary\MediaTargetApi

All URIs are relative to https://api.cloudinary.com/v2/demo.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMediaTarget()**](MediaTargetApi.md#createMediaTarget) | **POST** /media_delivery/media_targets | Create a new Media Target
[**deleteMediaTarget()**](MediaTargetApi.md#deleteMediaTarget) | **DELETE** /media_delivery/media_targets/{id} | Delete the Media Target
[**getMediaTarget()**](MediaTargetApi.md#getMediaTarget) | **GET** /media_delivery/media_targets/{id} | Get the Media Target
[**getMediaTargets()**](MediaTargetApi.md#getMediaTargets) | **GET** /media_delivery/media_targets | Get the Media Targets
[**updateMediaTarget()**](MediaTargetApi.md#updateMediaTarget) | **PATCH** /media_delivery/media_targets/{id} | Update the Media Target


## `createMediaTarget()`

```php
createMediaTarget($media_target_create_payload): \Cloudinary\Model\MediaTarget
```

Create a new Media Target

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');

// Configure Bearer (JWT) authorization: bearerAuth
// $config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\MediaTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_target_create_payload = {"display_name":"my_media_target","source_type":"s3","config":{"s3_bucket_name":"my_bucket","s3_bucket_folder":"my_bucket_folder","s3_access_key":"123456789","s3_secret_key":"123456789","s3_uri_template":"s3://mybucket/images/{{vars.signature}}/{{fwd_key}}"}}; // \Cloudinary\Model\MediaTargetCreatePayload | Payload to create Media Target

try {
    $result = $apiInstance->createMediaTarget($media_target_create_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaTargetApi->createMediaTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_target_create_payload** | [**\Cloudinary\Model\MediaTargetCreatePayload**](../Model/MediaTargetCreatePayload.md)| Payload to create Media Target |

### Return type

[**\Cloudinary\Model\MediaTarget**](../Model/MediaTarget.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMediaTarget()`

```php
deleteMediaTarget($id): \Cloudinary\Model\MessageResponse
```

Delete the Media Target

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');

// Configure Bearer (JWT) authorization: bearerAuth
// $config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\MediaTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1abc2def345g678hij90; // string | ID of the Media Target

try {
    $result = $apiInstance->deleteMediaTarget($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaTargetApi->deleteMediaTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Media Target |

### Return type

[**\Cloudinary\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaTarget()`

```php
getMediaTarget($id): \Cloudinary\Model\MediaTarget
```

Get the Media Target

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');

// Configure Bearer (JWT) authorization: bearerAuth
// $config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\MediaTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1abc2def345g678hij90; // string | ID of the Media Target

try {
    $result = $apiInstance->getMediaTarget($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaTargetApi->getMediaTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Media Target |

### Return type

[**\Cloudinary\Model\MediaTarget**](../Model/MediaTarget.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaTargets()`

```php
getMediaTargets(): \Cloudinary\Model\MediaTarget[]
```

Get the Media Targets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');

// Configure Bearer (JWT) authorization: bearerAuth
// $config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\MediaTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMediaTargets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaTargetApi->getMediaTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Cloudinary\Model\MediaTarget[]**](../Model/MediaTarget.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMediaTarget()`

```php
updateMediaTarget($id, $media_target_update_payload): \Cloudinary\Model\MediaTarget
```

Update the Media Target

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');

// Configure Bearer (JWT) authorization: bearerAuth
// $config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\MediaTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1abc2def345g678hij90; // string | ID of the Media Target
$media_target_update_payload = new \Cloudinary\Model\MediaTargetUpdatePayload(); // \Cloudinary\Model\MediaTargetUpdatePayload | Payload to update the Media Target

try {
    $result = $apiInstance->updateMediaTarget($id, $media_target_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaTargetApi->updateMediaTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Media Target |
 **media_target_update_payload** | [**\Cloudinary\Model\MediaTargetUpdatePayload**](../Model/MediaTargetUpdatePayload.md)| Payload to update the Media Target |

### Return type

[**\Cloudinary\Model\MediaTarget**](../Model/MediaTarget.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
