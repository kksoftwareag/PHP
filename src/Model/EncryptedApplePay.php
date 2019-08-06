<?php
/**
 * EncryptedApplePay
 *
 * PHP version 5
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway API Specification.
 *
 * The documentation here is designed to provide all of the technical guidance required to consume and integrate with our APIs for payment processing. To learn more about our APIs please visit https://docs.firstdata.com/org/gateway.
 *
 * OpenAPI spec version: 6.6.0.20190507.002
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Model;

use \ArrayAccess;
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * EncryptedApplePay Class Doc Comment
 *
 * @category Class
 * @description Encrypted Apple Pay payload.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EncryptedApplePay implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EncryptedApplePay';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data' => 'string',
        'header' => '\FirstData\FirstApi\Client\Model\EncryptedApplePayHeader',
        'signature' => 'string',
        'version' => 'string',
        'applicationData' => 'string',
        'merchantId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'data' => null,
        'header' => null,
        'signature' => null,
        'version' => null,
        'applicationData' => null,
        'merchantId' => null
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
        'data' => 'data',
        'header' => 'header',
        'signature' => 'signature',
        'version' => 'version',
        'applicationData' => 'applicationData',
        'merchantId' => 'merchantId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data' => 'setData',
        'header' => 'setHeader',
        'signature' => 'setSignature',
        'version' => 'setVersion',
        'applicationData' => 'setApplicationData',
        'merchantId' => 'setMerchantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data' => 'getData',
        'header' => 'getHeader',
        'signature' => 'getSignature',
        'version' => 'getVersion',
        'applicationData' => 'getApplicationData',
        'merchantId' => 'getMerchantId'
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

    const VERSION_EC_V1 = 'EC_v1';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVersionAllowableValues()
    {
        return [
            self::VERSION_EC_V1,
        ];
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['applicationData'] = isset($data['applicationData']) ? $data['applicationData'] : null;
        $this->container['merchantId'] = isset($data['merchantId']) ? $data['merchantId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['data'])) {
            $invalidProperties[] = "invalid value for 'data', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['header'] === null) {
            $invalidProperties[] = "'header' can't be null";
        }
        if ($this->container['signature'] === null) {
            $invalidProperties[] = "'signature' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['signature'])) {
            $invalidProperties[] = "invalid value for 'signature', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        $allowedValues = $this->getVersionAllowableValues();
        if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'version', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['merchantId'] === null) {
            $invalidProperties[] = "'merchantId' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['merchantId'])) {
            $invalidProperties[] = "invalid value for 'merchantId', must be conform to the pattern /^(?!\\s*$).+/.";
        }

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
     * Gets data
     *
     * @return string
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string $data The encrypted wallet payload.
     *
     * @return $this
     */
    public function setData($data)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $data))) {
            throw new \InvalidArgumentException("invalid value for $data when calling EncryptedApplePay., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets header
     *
     * @return \FirstData\FirstApi\Client\Model\EncryptedApplePayHeader
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param \FirstData\FirstApi\Client\Model\EncryptedApplePayHeader $header header
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature Signature of the payment and header data.
     *
     * @return $this
     */
    public function setSignature($signature)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $signature))) {
            throw new \InvalidArgumentException("invalid value for $signature when calling EncryptedApplePay., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version Version information about the payment token.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $allowedValues = $this->getVersionAllowableValues();
        if (!is_null($version) && !in_array($version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'version', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets applicationData
     *
     * @return string|null
     */
    public function getApplicationData()
    {
        return $this->container['applicationData'];
    }

    /**
     * Sets applicationData
     *
     * @param string|null $applicationData Base64-encoded value of PKPaymentRequest. Required only if applicationDataHash is present.
     *
     * @return $this
     */
    public function setApplicationData($applicationData)
    {
        $this->container['applicationData'] = $applicationData;

        return $this;
    }

    /**
     * Gets merchantId
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     *
     * @param string $merchantId The merchant ID assigned by the wallet provider.
     *
     * @return $this
     */
    public function setMerchantId($merchantId)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $merchantId))) {
            throw new \InvalidArgumentException("invalid value for $merchantId when calling EncryptedApplePay., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['merchantId'] = $merchantId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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
}


