# Cloudinary\MediaDelivery\DeliveryProfileApi

All URIs are relative to https://api.cloudinary.com/v2/demo.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeliveryProfile()**](DeliveryProfileApi.md#createDeliveryProfile) | **POST** /media_delivery/profiles | Create a new Delivery Profile
[**deleteDeliveryProfile()**](DeliveryProfileApi.md#deleteDeliveryProfile) | **DELETE** /media_delivery/profiles/{id} | Delete the Delivery Profile
[**getDeliveryProfile()**](DeliveryProfileApi.md#getDeliveryProfile) | **GET** /media_delivery/profiles/{id} | Get the Delivery Profile
[**getDeliveryProfiles()**](DeliveryProfileApi.md#getDeliveryProfiles) | **GET** /media_delivery/profiles | Get the Delivery Profiles
[**updateDeliveryProfile()**](DeliveryProfileApi.md#updateDeliveryProfile) | **PATCH** /media_delivery/profiles/{id} | Update the Delivery Profile


## `createDeliveryProfile()`

```php
createDeliveryProfile($delivery_profile_create_payload): \Cloudinary\MediaDelivery\Model\DeliveryProfile
```

Create a new Delivery Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\DeliveryProfileApi(null, $config);

$delivery_profile_create_payload = new \Cloudinary\MediaDelivery\Model\DeliveryProfileCreatePayload(); // \Cloudinary\MediaDelivery\Model\DeliveryProfileCreatePayload | Payload to create Delivery Profile

try {
    $result = $apiInstance->createDeliveryProfile($delivery_profile_create_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryProfileApi->createDeliveryProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_profile_create_payload** | [**\Cloudinary\MediaDelivery\Model\DeliveryProfileCreatePayload**](../Model/DeliveryProfileCreatePayload.md)| Payload to create Delivery Profile |

### Return type

[**\Cloudinary\MediaDelivery\Model\DeliveryProfile**](../Model/DeliveryProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDeliveryProfile()`

```php
deleteDeliveryProfile($id)
```

Delete the Delivery Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\DeliveryProfileApi(null, $config);

$id = 1abc2def345g678hij90; // string | ID of the Delivery Profile

try {
    $apiInstance->deleteDeliveryProfile($id);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryProfileApi->deleteDeliveryProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Delivery Profile |

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

## `getDeliveryProfile()`

```php
getDeliveryProfile($id): \Cloudinary\MediaDelivery\Model\DeliveryProfile
```

Get the Delivery Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\DeliveryProfileApi(null, $config);

$id = 1abc2def345g678hij90; // string | ID of the Delivery Profile

try {
    $result = $apiInstance->getDeliveryProfile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryProfileApi->getDeliveryProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Delivery Profile |

### Return type

[**\Cloudinary\MediaDelivery\Model\DeliveryProfile**](../Model/DeliveryProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeliveryProfiles()`

```php
getDeliveryProfiles(): \Cloudinary\MediaDelivery\Model\DeliveryProfile[]
```

Get the Delivery Profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\DeliveryProfileApi(null, $config);


try {
    $result = $apiInstance->getDeliveryProfiles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryProfileApi->getDeliveryProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Cloudinary\MediaDelivery\Model\DeliveryProfile[]**](../Model/DeliveryProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeliveryProfile()`

```php
updateDeliveryProfile($id, $delivery_profile_update_payload): \Cloudinary\MediaDelivery\Model\DeliveryProfile
```

Update the Delivery Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary URL: basicAuth
$config = Cloudinary\MediaDelivery\Configuration::getDefaultConfiguration()
              ->setCloudinaryUrl('cloudinary://key:secret@cloud_name');



$apiInstance = new Cloudinary\MediaDelivery\Api\DeliveryProfileApi(null, $config);

$id = 1abc2def345g678hij90; // string | ID of the Delivery Profile
$delivery_profile_update_payload = new \Cloudinary\MediaDelivery\Model\DeliveryProfileUpdatePayload(); // \Cloudinary\MediaDelivery\Model\DeliveryProfileUpdatePayload | Payload to update the Delivery Profile

try {
    $result = $apiInstance->updateDeliveryProfile($id, $delivery_profile_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryProfileApi->updateDeliveryProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Delivery Profile |
 **delivery_profile_update_payload** | [**\Cloudinary\MediaDelivery\Model\DeliveryProfileUpdatePayload**](../Model/DeliveryProfileUpdatePayload.md)| Payload to update the Delivery Profile |

### Return type

[**\Cloudinary\MediaDelivery\Model\DeliveryProfile**](../Model/DeliveryProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
