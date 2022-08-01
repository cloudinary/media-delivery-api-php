# Cloudinary\MediaDelivery\MediaSourceApi

All URIs are relative to https://api.cloudinary.com/v2/demo.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMediaSource()**](MediaSourceApi.md#createMediaSource) | **POST** /media_delivery/media_sources | Create a new Media Source
[**deleteMediaSource()**](MediaSourceApi.md#deleteMediaSource) | **DELETE** /media_delivery/media_sources/{id} | Delete the Media Source
[**getMediaSource()**](MediaSourceApi.md#getMediaSource) | **GET** /media_delivery/media_sources/{id} | Get the Media Source
[**getMediaSources()**](MediaSourceApi.md#getMediaSources) | **GET** /media_delivery/media_sources | Get the Media Sources
[**updateMediaSource()**](MediaSourceApi.md#updateMediaSource) | **PATCH** /media_delivery/media_sources/{id} | Update the Media Source


## `createMediaSource()`

```php
createMediaSource($media_source_create_payload): \Cloudinary\MediaDelivery\Model\MediaSource
```

Create a new Media Source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\MediaSourceApi(null, $config);

$media_source_create_payload = {"display_name":"my_media_source","source_type":"s3","config":{"s3_bucket_name":"my_bucket","s3_bucket_folder":"my_bucket_folder","s3_access_key":"123456789","s3_secret_key":"123456789","s3_uri_template":"s3://mybucket/images/{{vars.signature}}/{{fwd_key}}"}}; // \Cloudinary\MediaDelivery\Model\MediaSourceCreatePayload | Payload to create Media Source

try {
    $result = $apiInstance->createMediaSource($media_source_create_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourceApi->createMediaSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_source_create_payload** | [**\Cloudinary\MediaDelivery\Model\MediaSourceCreatePayload**](../Model/MediaSourceCreatePayload.md)| Payload to create Media Source |

### Return type

[**\Cloudinary\MediaDelivery\Model\MediaSource**](../Model/MediaSource.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMediaSource()`

```php
deleteMediaSource($id): \Cloudinary\MediaDelivery\Model\MessageResponse
```

Delete the Media Source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\MediaSourceApi(null, $config);

$id = 1abc2def345g678hij90; // string | ID of the Media Source

try {
    $result = $apiInstance->deleteMediaSource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourceApi->deleteMediaSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Media Source |

### Return type

[**\Cloudinary\MediaDelivery\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaSource()`

```php
getMediaSource($id): \Cloudinary\MediaDelivery\Model\MediaSource
```

Get the Media Source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\MediaSourceApi(null, $config);

$id = 1abc2def345g678hij90; // string | ID of the Media Source

try {
    $result = $apiInstance->getMediaSource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourceApi->getMediaSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Media Source |

### Return type

[**\Cloudinary\MediaDelivery\Model\MediaSource**](../Model/MediaSource.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaSources()`

```php
getMediaSources(): \Cloudinary\MediaDelivery\Model\MediaSource[]
```

Get the Media Sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\MediaSourceApi(null, $config);


try {
    $result = $apiInstance->getMediaSources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourceApi->getMediaSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Cloudinary\MediaDelivery\Model\MediaSource[]**](../Model/MediaSource.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMediaSource()`

```php
updateMediaSource($id, $media_source_update_payload): \Cloudinary\MediaDelivery\Model\MediaSource
```

Update the Media Source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\MediaSourceApi(null, $config);

$id = 1abc2def345g678hij90; // string | ID of the Media Source
$media_source_update_payload = {"display_name":"my_media_source","source_type":"s3","config":{"s3_bucket_name":"my_bucket","s3_bucket_folder":"my_bucket_folder","s3_access_key":"123456789","s3_secret_key":"123456789","s3_uri_template":"s3://mybucket/images/{{vars.signature}}/{{fwd_key}}"}}; // \Cloudinary\MediaDelivery\Model\MediaSourceUpdatePayload | Payload to update the Media Source

try {
    $result = $apiInstance->updateMediaSource($id, $media_source_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourceApi->updateMediaSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Media Source |
 **media_source_update_payload** | [**\Cloudinary\MediaDelivery\Model\MediaSourceUpdatePayload**](../Model/MediaSourceUpdatePayload.md)| Payload to update the Media Source |

### Return type

[**\Cloudinary\MediaDelivery\Model\MediaSource**](../Model/MediaSource.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
