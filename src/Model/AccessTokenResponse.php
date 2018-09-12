<?php
/**
 * AccessTokenResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Payment Gateway API Specification
 *
 * Payment Gateway API for payment processing.
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Model;

use \ArrayAccess;
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * AccessTokenResponse Class Doc Comment
 *
 * @category Class
 * @description Access Token generation response
 * @package  FirstData\FirstApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessTokenResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccessTokenResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accessToken' => 'string',
        'clientRequestId' => 'string',
        'apiTraceId' => 'string',
        'requestStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accessToken' => null,
        'clientRequestId' => null,
        'apiTraceId' => null,
        'requestStatus' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accessToken' => 'accessToken',
        'clientRequestId' => 'clientRequestId',
        'apiTraceId' => 'apiTraceId',
        'requestStatus' => 'requestStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessToken' => 'setAccessToken',
        'clientRequestId' => 'setClientRequestId',
        'apiTraceId' => 'setApiTraceId',
        'requestStatus' => 'setRequestStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessToken' => 'getAccessToken',
        'clientRequestId' => 'getClientRequestId',
        'apiTraceId' => 'getApiTraceId',
        'requestStatus' => 'getRequestStatus'
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
        return self::$swaggerModelName;
    }

    const REQUEST_STATUS_SUCCESS = 'SUCCESS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestStatusAllowableValues()
    {
        return [
            self::REQUEST_STATUS_SUCCESS,
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
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['clientRequestId'] = isset($data['clientRequestId']) ? $data['clientRequestId'] : null;
        $this->container['apiTraceId'] = isset($data['apiTraceId']) ? $data['apiTraceId'] : null;
        $this->container['requestStatus'] = isset($data['requestStatus']) ? $data['requestStatus'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRequestStatusAllowableValues();
        if (!in_array($this->container['requestStatus'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'requestStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        $allowedValues = $this->getRequestStatusAllowableValues();
        if (!in_array($this->container['requestStatus'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets accessToken
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     *
     * @param string $accessToken Access Token for authentication
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;

        return $this;
    }

    /**
     * Gets clientRequestId
     *
     * @return string
     */
    public function getClientRequestId()
    {
        return $this->container['clientRequestId'];
    }

    /**
     * Sets clientRequestId
     *
     * @param string $clientRequestId Echoes back the value from the request header for tracking
     *
     * @return $this
     */
    public function setClientRequestId($clientRequestId)
    {
        $this->container['clientRequestId'] = $clientRequestId;

        return $this;
    }

    /**
     * Gets apiTraceId
     *
     * @return string
     */
    public function getApiTraceId()
    {
        return $this->container['apiTraceId'];
    }

    /**
     * Sets apiTraceId
     *
     * @param string $apiTraceId Request identifier in API. Use this to request logs from support.
     *
     * @return $this
     */
    public function setApiTraceId($apiTraceId)
    {
        $this->container['apiTraceId'] = $apiTraceId;

        return $this;
    }

    /**
     * Gets requestStatus
     *
     * @return string
     */
    public function getRequestStatus()
    {
        return $this->container['requestStatus'];
    }

    /**
     * Sets requestStatus
     *
     * @param string $requestStatus The result of the requested operation. If this is anything other than 'SUCCESS', please refer to the 400s HTTP error codes. See ErrorResponse object for details.
     *
     * @return $this
     */
    public function setRequestStatus($requestStatus)
    {
        $allowedValues = $this->getRequestStatusAllowableValues();
        if (!is_null($requestStatus) && !in_array($requestStatus, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'requestStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requestStatus'] = $requestStatus;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


