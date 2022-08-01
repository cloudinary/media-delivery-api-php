# Media Delivery PHP SDK

Media Delivery API

For more information, please visit [https://cloudinary.com](https://cloudinary.com).

## Installation & Usage

### Requirements

PHP 7.3 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "cloudinary/media-delivery-api": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/media-delivery-api/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.cloudinary.com/v2/demo*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CacheApi* | [**invalidate**](docs/Api/CacheApi.md#invalidate) | **POST** /media_delivery/cache/invalidate | Invalidate the cache
*CacheApi* | [**warmup**](docs/Api/CacheApi.md#warmup) | **POST** /media_delivery/cache/warmup | Warm up the cache
*DeliveryProfileApi* | [**createDeliveryProfile**](docs/Api/DeliveryProfileApi.md#createdeliveryprofile) | **POST** /media_delivery/profiles | Create a new Delivery Profile
*DeliveryProfileApi* | [**deleteDeliveryProfile**](docs/Api/DeliveryProfileApi.md#deletedeliveryprofile) | **DELETE** /media_delivery/profiles/{id} | Delete the Delivery Profile
*DeliveryProfileApi* | [**getDeliveryProfile**](docs/Api/DeliveryProfileApi.md#getdeliveryprofile) | **GET** /media_delivery/profiles/{id} | Get the Delivery Profile
*DeliveryProfileApi* | [**getDeliveryProfiles**](docs/Api/DeliveryProfileApi.md#getdeliveryprofiles) | **GET** /media_delivery/profiles | Get the Delivery Profiles
*DeliveryProfileApi* | [**updateDeliveryProfile**](docs/Api/DeliveryProfileApi.md#updatedeliveryprofile) | **PATCH** /media_delivery/profiles/{id} | Update the Delivery Profile
*MappingFunctionApi* | [**createMappingFunction**](docs/Api/MappingFunctionApi.md#createmappingfunction) | **POST** /media_delivery/mapping_functions | Create a new Mapping Function
*MappingFunctionApi* | [**deleteMappingFunction**](docs/Api/MappingFunctionApi.md#deletemappingfunction) | **DELETE** /media_delivery/mapping_functions/{id} | Delete the Mapping Function
*MappingFunctionApi* | [**getMappingFunction**](docs/Api/MappingFunctionApi.md#getmappingfunction) | **GET** /media_delivery/mapping_functions/{id} | Get the Mapping Function
*MappingFunctionApi* | [**getMappingFunctions**](docs/Api/MappingFunctionApi.md#getmappingfunctions) | **GET** /media_delivery/mapping_functions | Get the Mapping Functions
*MappingFunctionApi* | [**updateMappingFunction**](docs/Api/MappingFunctionApi.md#updatemappingfunction) | **PATCH** /media_delivery/mapping_functions/{id} | Update the Mapping Function
*MediaSourceApi* | [**createMediaSource**](docs/Api/MediaSourceApi.md#createmediasource) | **POST** /media_delivery/media_sources | Create a new Media Source
*MediaSourceApi* | [**deleteMediaSource**](docs/Api/MediaSourceApi.md#deletemediasource) | **DELETE** /media_delivery/media_sources/{id} | Delete the Media Source
*MediaSourceApi* | [**getMediaSource**](docs/Api/MediaSourceApi.md#getmediasource) | **GET** /media_delivery/media_sources/{id} | Get the Media Source
*MediaSourceApi* | [**getMediaSources**](docs/Api/MediaSourceApi.md#getmediasources) | **GET** /media_delivery/media_sources | Get the Media Sources
*MediaSourceApi* | [**updateMediaSource**](docs/Api/MediaSourceApi.md#updatemediasource) | **PATCH** /media_delivery/media_sources/{id} | Update the Media Source
*MediaTargetApi* | [**createMediaTarget**](docs/Api/MediaTargetApi.md#createmediatarget) | **POST** /media_delivery/media_targets | Create a new Media Target
*MediaTargetApi* | [**deleteMediaTarget**](docs/Api/MediaTargetApi.md#deletemediatarget) | **DELETE** /media_delivery/media_targets/{id} | Delete the Media Target
*MediaTargetApi* | [**getMediaTarget**](docs/Api/MediaTargetApi.md#getmediatarget) | **GET** /media_delivery/media_targets/{id} | Get the Media Target
*MediaTargetApi* | [**getMediaTargets**](docs/Api/MediaTargetApi.md#getmediatargets) | **GET** /media_delivery/media_targets | Get the Media Targets
*MediaTargetApi* | [**updateMediaTarget**](docs/Api/MediaTargetApi.md#updatemediatarget) | **PATCH** /media_delivery/media_targets/{id} | Update the Media Target

## Models

- [CacheInvalidateAsset](docs/Model/CacheInvalidateAsset.md)
- [CacheInvalidateMediaResource](docs/Model/CacheInvalidateMediaResource.md)
- [CacheInvalidateRequestPayload](docs/Model/CacheInvalidateRequestPayload.md)
- [CacheWarmupRequestPayload](docs/Model/CacheWarmupRequestPayload.md)
- [CacheWarmupSuccessResponse](docs/Model/CacheWarmupSuccessResponse.md)
- [DeliveryProfile](docs/Model/DeliveryProfile.md)
- [DeliveryProfileCreatePayload](docs/Model/DeliveryProfileCreatePayload.md)
- [DeliveryProfileUpdatePayload](docs/Model/DeliveryProfileUpdatePayload.md)
- [ErrorMessageResponse](docs/Model/ErrorMessageResponse.md)
- [MappingFunction](docs/Model/MappingFunction.md)
- [MappingFunctionCreatePayload](docs/Model/MappingFunctionCreatePayload.md)
- [MappingFunctionUpdatePayload](docs/Model/MappingFunctionUpdatePayload.md)
- [MediaSource](docs/Model/MediaSource.md)
- [MediaSourceAllOf](docs/Model/MediaSourceAllOf.md)
- [MediaSourceConfig](docs/Model/MediaSourceConfig.md)
- [MediaSourceCreatePayload](docs/Model/MediaSourceCreatePayload.md)
- [MediaSourceUpdatePayload](docs/Model/MediaSourceUpdatePayload.md)
- [MediaTarget](docs/Model/MediaTarget.md)
- [MediaTargetConfig](docs/Model/MediaTargetConfig.md)
- [MediaTargetCreatePayload](docs/Model/MediaTargetCreatePayload.md)
- [MediaTargetUpdatePayload](docs/Model/MediaTargetUpdatePayload.md)
- [MessageResponse](docs/Model/MessageResponse.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication


### bearerAuth

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This Cloudinary PHP package is automatically generated.

- API version: `0.1.0-beta`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
