<?php
/**
 * MediaTargetConfig
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Cloudinary\MediaDelivery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Media Delivery
 *
 * Media Delivery API
 *
 * The version of the OpenAPI document: 0.1.0-beta
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cloudinary\MediaDelivery\Model;

use \ArrayAccess;
use \Cloudinary\MediaDelivery\ObjectSerializer;

/**
 * MediaTargetConfig Class Doc Comment
 *
 * @category Class
 * @package  Cloudinary\MediaDelivery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MediaTargetConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MediaTargetConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        's3_bucket_name' => 'string',
        's3_bucket_folder' => 'string',
        's3_access_key' => 'string',
        's3_secret_key' => 'string',
        's3_uri_template' => 'string',
        'gs_bucket_name' => 'string',
        'gs_bucket_folder' => 'string',
        'gs_service_account_key' => 'string',
        'gs_uri_template' => 'string',
        'cld_cloud_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        's3_bucket_name' => null,
        's3_bucket_folder' => null,
        's3_access_key' => null,
        's3_secret_key' => null,
        's3_uri_template' => null,
        'gs_bucket_name' => null,
        'gs_bucket_folder' => null,
        'gs_service_account_key' => null,
        'gs_uri_template' => null,
        'cld_cloud_name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        's3_bucket_name' => 's3_bucket_name',
        's3_bucket_folder' => 's3_bucket_folder',
        's3_access_key' => 's3_access_key',
        's3_secret_key' => 's3_secret_key',
        's3_uri_template' => 's3_uri_template',
        'gs_bucket_name' => 'gs_bucket_name',
        'gs_bucket_folder' => 'gs_bucket_folder',
        'gs_service_account_key' => 'gs_service_account_key',
        'gs_uri_template' => 'gs_uri_template',
        'cld_cloud_name' => 'cld_cloud_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        's3_bucket_name' => 'setS3BucketName',
        's3_bucket_folder' => 'setS3BucketFolder',
        's3_access_key' => 'setS3AccessKey',
        's3_secret_key' => 'setS3SecretKey',
        's3_uri_template' => 'setS3UriTemplate',
        'gs_bucket_name' => 'setGsBucketName',
        'gs_bucket_folder' => 'setGsBucketFolder',
        'gs_service_account_key' => 'setGsServiceAccountKey',
        'gs_uri_template' => 'setGsUriTemplate',
        'cld_cloud_name' => 'setCldCloudName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        's3_bucket_name' => 'getS3BucketName',
        's3_bucket_folder' => 'getS3BucketFolder',
        's3_access_key' => 'getS3AccessKey',
        's3_secret_key' => 'getS3SecretKey',
        's3_uri_template' => 'getS3UriTemplate',
        'gs_bucket_name' => 'getGsBucketName',
        'gs_bucket_folder' => 'getGsBucketFolder',
        'gs_service_account_key' => 'getGsServiceAccountKey',
        'gs_uri_template' => 'getGsUriTemplate',
        'cld_cloud_name' => 'getCldCloudName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['s3_bucket_name'] = $data['s3_bucket_name'] ?? null;
        $this->container['s3_bucket_folder'] = $data['s3_bucket_folder'] ?? null;
        $this->container['s3_access_key'] = $data['s3_access_key'] ?? null;
        $this->container['s3_secret_key'] = $data['s3_secret_key'] ?? null;
        $this->container['s3_uri_template'] = $data['s3_uri_template'] ?? null;
        $this->container['gs_bucket_name'] = $data['gs_bucket_name'] ?? null;
        $this->container['gs_bucket_folder'] = $data['gs_bucket_folder'] ?? null;
        $this->container['gs_service_account_key'] = $data['gs_service_account_key'] ?? null;
        $this->container['gs_uri_template'] = $data['gs_uri_template'] ?? null;
        $this->container['cld_cloud_name'] = $data['cld_cloud_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets s3_bucket_name
     *
     * @return string|null
     */
    public function getS3BucketName()
    {
        return $this->container['s3_bucket_name'];
    }

    /**
     * Sets s3_bucket_name
     *
     * @param string|null $s3_bucket_name The name of the S3 bucket.
     *
     * @return self
     */
    public function setS3BucketName($s3_bucket_name)
    {
        $this->container['s3_bucket_name'] = $s3_bucket_name;

        return $this;
    }

    /**
     * Gets s3_bucket_folder
     *
     * @return string|null
     */
    public function getS3BucketFolder()
    {
        return $this->container['s3_bucket_folder'];
    }

    /**
     * Sets s3_bucket_folder
     *
     * @param string|null $s3_bucket_folder The bucket folder to store your transformed media files.
     *
     * @return self
     */
    public function setS3BucketFolder($s3_bucket_folder)
    {
        $this->container['s3_bucket_folder'] = $s3_bucket_folder;

        return $this;
    }

    /**
     * Gets s3_access_key
     *
     * @return string|null
     */
    public function getS3AccessKey()
    {
        return $this->container['s3_access_key'];
    }

    /**
     * Sets s3_access_key
     *
     * @param string|null $s3_access_key The access key ID required to access your S3 bucket.
     *
     * @return self
     */
    public function setS3AccessKey($s3_access_key)
    {
        $this->container['s3_access_key'] = $s3_access_key;

        return $this;
    }

    /**
     * Gets s3_secret_key
     *
     * @return string|null
     */
    public function getS3SecretKey()
    {
        return $this->container['s3_secret_key'];
    }

    /**
     * Sets s3_secret_key
     *
     * @param string|null $s3_secret_key The secret access key required to access your S3 bucket.
     *
     * @return self
     */
    public function setS3SecretKey($s3_secret_key)
    {
        $this->container['s3_secret_key'] = $s3_secret_key;

        return $this;
    }

    /**
     * Gets s3_uri_template
     *
     * @return string|null
     */
    public function getS3UriTemplate()
    {
        return $this->container['s3_uri_template'];
    }

    /**
     * Sets s3_uri_template
     *
     * @param string|null $s3_uri_template Advanced option for specifying parameters to include in the requests. You can use interpolated variables that are defined in the mapping function code.
     *
     * @return self
     */
    public function setS3UriTemplate($s3_uri_template)
    {
        $this->container['s3_uri_template'] = $s3_uri_template;

        return $this;
    }

    /**
     * Gets gs_bucket_name
     *
     * @return string|null
     */
    public function getGsBucketName()
    {
        return $this->container['gs_bucket_name'];
    }

    /**
     * Sets gs_bucket_name
     *
     * @param string|null $gs_bucket_name The name of the Google Storage bucket.
     *
     * @return self
     */
    public function setGsBucketName($gs_bucket_name)
    {
        $this->container['gs_bucket_name'] = $gs_bucket_name;

        return $this;
    }

    /**
     * Gets gs_bucket_folder
     *
     * @return string|null
     */
    public function getGsBucketFolder()
    {
        return $this->container['gs_bucket_folder'];
    }

    /**
     * Sets gs_bucket_folder
     *
     * @param string|null $gs_bucket_folder The bucket folder to store your transformed media files.
     *
     * @return self
     */
    public function setGsBucketFolder($gs_bucket_folder)
    {
        $this->container['gs_bucket_folder'] = $gs_bucket_folder;

        return $this;
    }

    /**
     * Gets gs_service_account_key
     *
     * @return string|null
     */
    public function getGsServiceAccountKey()
    {
        return $this->container['gs_service_account_key'];
    }

    /**
     * Sets gs_service_account_key
     *
     * @param string|null $gs_service_account_key The JSON file downloaded from the keys page for your service account.
     *
     * @return self
     */
    public function setGsServiceAccountKey($gs_service_account_key)
    {
        $this->container['gs_service_account_key'] = $gs_service_account_key;

        return $this;
    }

    /**
     * Gets gs_uri_template
     *
     * @return string|null
     */
    public function getGsUriTemplate()
    {
        return $this->container['gs_uri_template'];
    }

    /**
     * Sets gs_uri_template
     *
     * @param string|null $gs_uri_template Advanced option for specifying parameters to include in the requests. You can use interpolated variables that are defined in the mapping function code.
     *
     * @return self
     */
    public function setGsUriTemplate($gs_uri_template)
    {
        $this->container['gs_uri_template'] = $gs_uri_template;

        return $this;
    }

    /**
     * Gets cld_cloud_name
     *
     * @return string|null
     */
    public function getCldCloudName()
    {
        return $this->container['cld_cloud_name'];
    }

    /**
     * Sets cld_cloud_name
     *
     * @param string|null $cld_cloud_name The cloud name of the Cloudinary account to store your transformed media. It must share the same overall Cloudinary account as the Media Editing API sub-account.
     *
     * @return self
     */
    public function setCldCloudName($cld_cloud_name)
    {
        $this->container['cld_cloud_name'] = $cld_cloud_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


