<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class TransactionResponseAvsResponse
 *
 * @category Class
 * @description The processor address validation responses
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionResponseAvsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionResponse_avsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'streetNumberMatch' => 'string',
        'postalCodeMatch' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'streetNumberMatch' => null,
        'postalCodeMatch' => null
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
        'streetNumberMatch' => 'streetNumberMatch',
        'postalCodeMatch' => 'postalCodeMatch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'streetNumberMatch' => 'setStreetNumberMatch',
        'postalCodeMatch' => 'setPostalCodeMatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'streetNumberMatch' => 'getStreetNumberMatch',
        'postalCodeMatch' => 'getPostalCodeMatch'
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

    const STREET_NUMBER_MATCH_YES = 'YES';
    const STREET_NUMBER_MATCH_NO = 'NO';
    const STREET_NUMBER_MATCH_NOT_PROVIDED = 'NOT_PROVIDED';
    const STREET_NUMBER_MATCH_NOT_CHECKED = 'NOT_CHECKED';
    const POSTAL_CODE_MATCH_YES = 'YES';
    const POSTAL_CODE_MATCH_NO = 'NO';
    const POSTAL_CODE_MATCH_NOT_PROVIDED = 'NOT_PROVIDED';
    const POSTAL_CODE_MATCH_NOT_CHECKED = 'NOT_CHECKED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStreetNumberMatchAllowableValues()
    {
        return [
            self::STREET_NUMBER_MATCH_YES,
            self::STREET_NUMBER_MATCH_NO,
            self::STREET_NUMBER_MATCH_NOT_PROVIDED,
            self::STREET_NUMBER_MATCH_NOT_CHECKED
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPostalCodeMatchAllowableValues()
    {
        return [
            self::POSTAL_CODE_MATCH_YES,
            self::POSTAL_CODE_MATCH_NO,
            self::POSTAL_CODE_MATCH_NOT_PROVIDED,
            self::POSTAL_CODE_MATCH_NOT_CHECKED
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
        $this->container['streetNumberMatch'] = $data['streetNumberMatch'] ?? null;
        $this->container['postalCodeMatch'] = $data['postalCodeMatch'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStreetNumberMatchAllowableValues();
        if (null !== $this->container['streetNumberMatch'] && !\in_array($this->container['streetNumberMatch'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'streetNumberMatch', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPostalCodeMatchAllowableValues();
        if (null !== $this->container['postalCodeMatch'] && !\in_array($this->container['postalCodeMatch'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'postalCodeMatch', must be one of '%s'",
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
        return \count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets streetNumberMatch
     *
     * @return string
     */
    public function getStreetNumberMatch()
    {
        return $this->container['streetNumberMatch'];
    }

    /**
     * Sets streetNumberMatch
     *
     * @param string $streetNumberMatch Response code for street number validation
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setStreetNumberMatch($streetNumberMatch)
    {
        $allowedValues = $this->getStreetNumberMatchAllowableValues();
        if (null !== $streetNumberMatch && !\in_array($streetNumberMatch, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'streetNumberMatch', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['streetNumberMatch'] = $streetNumberMatch;

        return $this;
    }

    /**
     * Gets postalCodeMatch
     *
     * @return string
     */
    public function getPostalCodeMatch()
    {
        return $this->container['postalCodeMatch'];
    }

    /**
     * Sets postalCodeMatch
     *
     * @param string $postalCodeMatch Response code for postal code match
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setPostalCodeMatch($postalCodeMatch)
    {
        $allowedValues = $this->getPostalCodeMatchAllowableValues();
        if (null !== $postalCodeMatch && !\in_array($postalCodeMatch, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'postalCodeMatch', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['postalCodeMatch'] = $postalCodeMatch;

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
        return $this->container[$offset] ?? null;
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
        if (null === $offset) {
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
        if (\defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


