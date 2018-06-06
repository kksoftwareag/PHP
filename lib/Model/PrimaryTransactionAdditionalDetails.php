<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class PrimaryTransactionAdditionalDetails
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrimaryTransactionAdditionalDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PrimaryTransaction_additionalDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'referenceNumber' => 'string',
        'comments' => 'string',
        'dynamicMerchantName' => 'string',
        'invoiceNumber' => 'string',
        'purchaseOrderNumber' => 'string',
        'recurringType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'referenceNumber' => null,
        'comments' => null,
        'dynamicMerchantName' => null,
        'invoiceNumber' => null,
        'purchaseOrderNumber' => null,
        'recurringType' => null
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
        'referenceNumber' => 'referenceNumber',
        'comments' => 'comments',
        'dynamicMerchantName' => 'dynamicMerchantName',
        'invoiceNumber' => 'invoiceNumber',
        'purchaseOrderNumber' => 'purchaseOrderNumber',
        'recurringType' => 'recurringType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'referenceNumber' => 'setReferenceNumber',
        'comments' => 'setComments',
        'dynamicMerchantName' => 'setDynamicMerchantName',
        'invoiceNumber' => 'setInvoiceNumber',
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'recurringType' => 'setRecurringType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'referenceNumber' => 'getReferenceNumber',
        'comments' => 'getComments',
        'dynamicMerchantName' => 'getDynamicMerchantName',
        'invoiceNumber' => 'getInvoiceNumber',
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'recurringType' => 'getRecurringType'
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

    const RECURRING_TYPE_FIRST = 'FIRST';
    const RECURRING_TYPE_REPEAT = 'REPEAT';
    const RECURRING_TYPE_STANDING = 'STANDING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecurringTypeAllowableValues()
    {
        return [
            self::RECURRING_TYPE_FIRST,
            self::RECURRING_TYPE_REPEAT,
            self::RECURRING_TYPE_STANDING
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
        $this->container['referenceNumber'] = $data['referenceNumber'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['dynamicMerchantName'] = $data['dynamicMerchantName'] ?? null;
        $this->container['invoiceNumber'] = $data['invoiceNumber'] ?? null;
        $this->container['purchaseOrderNumber'] = $data['purchaseOrderNumber'] ?? null;
        $this->container['recurringType'] = $data['recurringType'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRecurringTypeAllowableValues();
        if (null !== $this->container['recurringType'] && !\in_array($this->container['recurringType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recurringType', must be one of '%s'",
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
     * Gets referenceNumber
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     *
     * @param string $referenceNumber For FORCED_TICKET only. This stores the six-digit reference number clients receive as the result of a successful external authorization (e.g. by phone). The Gateway needs this number for uniquely mapping a ForcedTicket transaction to a previously performed external authorization.
     *
     * @return $this
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets dynamicMerchantName
     *
     * @return string
     */
    public function getDynamicMerchantName()
    {
        return $this->container['dynamicMerchantName'];
    }

    /**
     * Sets dynamicMerchantName
     *
     * @param string $dynamicMerchantName dynamicMerchantName
     *
     * @return $this
     */
    public function setDynamicMerchantName($dynamicMerchantName)
    {
        $this->container['dynamicMerchantName'] = $dynamicMerchantName;

        return $this;
    }

    /**
     * Gets invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string $invoiceNumber invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets purchaseOrderNumber
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string $purchaseOrderNumber purchaseOrderNumber
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets recurringType
     *
     * @return string
     */
    public function getRecurringType()
    {
        return $this->container['recurringType'];
    }

    /**
     * Sets recurringType
     *
     * @param string $recurringType recurringType
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setRecurringType($recurringType)
    {
        $allowedValues = $this->getRecurringTypeAllowableValues();
        if (null !== $recurringType && !\in_array($recurringType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recurringType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurringType'] = $recurringType;

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


