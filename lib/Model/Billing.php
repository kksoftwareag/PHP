<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class Billing
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Billing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Billing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'personalNumber' => 'string',
        'birthDate' => \DateTime::class,
        'gender' => 'string',
        'contact' => Contact::class,
        'address' => Address::class
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'personalNumber' => null,
        'birthDate' => 'date',
        'gender' => null,
        'contact' => null,
        'address' => null
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
        'name' => 'name',
        'personalNumber' => 'personalNumber',
        'birthDate' => 'birthDate',
        'gender' => 'gender',
        'contact' => 'contact',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'personalNumber' => 'setPersonalNumber',
        'birthDate' => 'setBirthDate',
        'gender' => 'setGender',
        'contact' => 'setContact',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'personalNumber' => 'getPersonalNumber',
        'birthDate' => 'getBirthDate',
        'gender' => 'getGender',
        'contact' => 'getContact',
        'address' => 'getAddress'
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

    const GENDER_MALE = 'MALE';
    const GENDER_FEMALE = 'FEMALE';
    const GENDER_UNKNOWN = 'UNKNOWN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_UNKNOWN
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['personalNumber'] = $data['personalNumber'] ?? null;
        $this->container['birthDate'] = $data['birthDate'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null !== $this->container['name'] && (mb_strlen($this->container['name']) > 96)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 96.";
        }

        $allowedValues = $this->getGenderAllowableValues();
        if (null !== $this->container['gender'] && !\in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
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
     * @param string $name name
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setName($name)
    {
        if (null !== $name && (mb_strlen($name) > 96)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Billing., must be smaller than or equal to 96.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets personalNumber
     *
     * @return string
     */
    public function getPersonalNumber()
    {
        return $this->container['personalNumber'];
    }

    /**
     * Sets personalNumber
     *
     * @param string $personalNumber personalNumber
     *
     * @return $this
     */
    public function setPersonalNumber($personalNumber)
    {
        $this->container['personalNumber'] = $personalNumber;

        return $this;
    }

    /**
     * Gets birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birthDate'];
    }

    /**
     * Sets birthDate
     *
     * @param \DateTime $birthDate birthDate
     *
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        $this->container['birthDate'] = $birthDate;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (null !== $gender && !\in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \FirstData\ApiClient\Model\Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \FirstData\ApiClient\Model\Contact $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \FirstData\ApiClient\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \FirstData\ApiClient\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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


