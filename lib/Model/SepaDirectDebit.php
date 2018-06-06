<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class SepaDirectDebit
 *
 * @category Class
 * @description The payment object for SEPA Direct Debit
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SepaDirectDebit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SepaDirectDebit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iban' => 'string',
        'name' => 'string',
        'country' => 'string',
        'email' => 'string',
        'mandate' => SepaMandate::class
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iban' => null,
        'name' => null,
        'country' => null,
        'email' => null,
        'mandate' => null
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
        'iban' => 'iban',
        'name' => 'name',
        'country' => 'country',
        'email' => 'email',
        'mandate' => 'mandate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iban' => 'setIban',
        'name' => 'setName',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'mandate' => 'setMandate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iban' => 'getIban',
        'name' => 'getName',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'mandate' => 'getMandate'
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
        $this->container['iban'] = $data['iban'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['mandate'] = $data['mandate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['iban'] === null) {
            $invalidProperties[] = "'iban' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if (mb_strlen($this->container['country']) > 3) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 3.";
        }

        if (null !== $this->container['email'] && (mb_strlen($this->container['email']) > 254)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 254.";
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
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban Bank account in IBAN format
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the payer
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country of residence of the payer
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setCountry($country)
    {
        if (mb_strlen($country) > 3) {
            throw new \InvalidArgumentException('invalid length for $country when calling SepaDirectDebit., must be smaller than or equal to 3.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The email address of the payer
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setEmail($email)
    {
        if (null !== $email && (mb_strlen($email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email when calling SepaDirectDebit., must be smaller than or equal to 254.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets mandate
     *
     * @return \FirstData\ApiClient\Model\SepaMandate
     */
    public function getMandate()
    {
        return $this->container['mandate'];
    }

    /**
     * Sets mandate
     *
     * @param \FirstData\ApiClient\Model\SepaMandate $mandate mandate
     *
     * @return $this
     */
    public function setMandate($mandate)
    {
        $this->container['mandate'] = $mandate;

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


