<?php
/**
 * EncryptedApplePayHeader
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
 * EncryptedApplePayHeader Class Doc Comment
 *
 * @category Class
 * @description Additional version-dependent information used to decrypt and verify the payment.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EncryptedApplePayHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EncryptedApplePay_header';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applicationDataHash' => 'string',
        'ephemeralPublicKey' => 'string',
        'publicKeyHash' => 'string',
        'transactionId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'applicationDataHash' => null,
        'ephemeralPublicKey' => null,
        'publicKeyHash' => null,
        'transactionId' => null
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
        'applicationDataHash' => 'applicationDataHash',
        'ephemeralPublicKey' => 'ephemeralPublicKey',
        'publicKeyHash' => 'publicKeyHash',
        'transactionId' => 'transactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applicationDataHash' => 'setApplicationDataHash',
        'ephemeralPublicKey' => 'setEphemeralPublicKey',
        'publicKeyHash' => 'setPublicKeyHash',
        'transactionId' => 'setTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applicationDataHash' => 'getApplicationDataHash',
        'ephemeralPublicKey' => 'getEphemeralPublicKey',
        'publicKeyHash' => 'getPublicKeyHash',
        'transactionId' => 'getTransactionId'
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
        $this->container['applicationDataHash'] = isset($data['applicationDataHash']) ? $data['applicationDataHash'] : null;
        $this->container['ephemeralPublicKey'] = isset($data['ephemeralPublicKey']) ? $data['ephemeralPublicKey'] : null;
        $this->container['publicKeyHash'] = isset($data['publicKeyHash']) ? $data['publicKeyHash'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ephemeralPublicKey'] === null) {
            $invalidProperties[] = "'ephemeralPublicKey' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['ephemeralPublicKey'])) {
            $invalidProperties[] = "invalid value for 'ephemeralPublicKey', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['publicKeyHash'] === null) {
            $invalidProperties[] = "'publicKeyHash' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['publicKeyHash'])) {
            $invalidProperties[] = "invalid value for 'publicKeyHash', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['transactionId'] === null) {
            $invalidProperties[] = "'transactionId' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['transactionId'])) {
            $invalidProperties[] = "invalid value for 'transactionId', must be conform to the pattern /^(?!\\s*$).+/.";
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
     * Gets applicationDataHash
     *
     * @return string|null
     */
    public function getApplicationDataHash()
    {
        return $this->container['applicationDataHash'];
    }

    /**
     * Sets applicationDataHash
     *
     * @param string|null $applicationDataHash Merchant supplied information about the payment request. Contains Base64-encoded SHA256 hash of the applicationData property of the original PKPaymentRequest. Note - applicationData from PaymentData of PKPaymentToken Refer to Apple Pay documentation.
     *
     * @return $this
     */
    public function setApplicationDataHash($applicationDataHash)
    {
        $this->container['applicationDataHash'] = $applicationDataHash;

        return $this;
    }

    /**
     * Gets ephemeralPublicKey
     *
     * @return string
     */
    public function getEphemeralPublicKey()
    {
        return $this->container['ephemeralPublicKey'];
    }

    /**
     * Sets ephemeralPublicKey
     *
     * @param string $ephemeralPublicKey Temporary key for generating shared secret from a device.
     *
     * @return $this
     */
    public function setEphemeralPublicKey($ephemeralPublicKey)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $ephemeralPublicKey))) {
            throw new \InvalidArgumentException("invalid value for $ephemeralPublicKey when calling EncryptedApplePayHeader., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['ephemeralPublicKey'] = $ephemeralPublicKey;

        return $this;
    }

    /**
     * Gets publicKeyHash
     *
     * @return string
     */
    public function getPublicKeyHash()
    {
        return $this->container['publicKeyHash'];
    }

    /**
     * Sets publicKeyHash
     *
     * @param string $publicKeyHash Hash of the X.509 encoded public key bytes of the merchant’s certificate.
     *
     * @return $this
     */
    public function setPublicKeyHash($publicKeyHash)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $publicKeyHash))) {
            throw new \InvalidArgumentException("invalid value for $publicKeyHash when calling EncryptedApplePayHeader., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['publicKeyHash'] = $publicKeyHash;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string $transactionId Transaction identifier, generated on the device.
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $transactionId))) {
            throw new \InvalidArgumentException("invalid value for $transactionId when calling EncryptedApplePayHeader., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['transactionId'] = $transactionId;

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


