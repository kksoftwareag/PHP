<?php
/**
 * PaymentSchedulesRequest
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
 * PaymentSchedulesRequest Class Doc Comment
 *
 * @category Class
 * @description Request to create a gateway schedule. Abstract class, do not use this class directly, use one of its children.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentSchedulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'requestType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentSchedulesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'requestType' => 'string',
        'storeId' => 'string',
        'startDate' => '\DateTime',
        'numberOfPayments' => 'int',
        'maximumFailures' => 'int',
        'invoiceNumber' => 'string',
        'purchaseOrderNumber' => 'string',
        'transactionOrigin' => '\FirstData\FirstApi\Client\Model\TransactionOrigin',
        'dynamicMerchantName' => 'string',
        'frequency' => '\FirstData\FirstApi\Client\Model\Frequency',
        'transactionAmount' => '\FirstData\FirstApi\Client\Model\Amount',
        'clientLocale' => '\FirstData\FirstApi\Client\Model\ClientLocale',
        'orderId' => 'string',
        'billing' => '\FirstData\FirstApi\Client\Model\Billing',
        'shipping' => '\FirstData\FirstApi\Client\Model\Shipping',
        'comments' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'requestType' => null,
        'storeId' => null,
        'startDate' => 'date',
        'numberOfPayments' => 'int32',
        'maximumFailures' => 'int32',
        'invoiceNumber' => null,
        'purchaseOrderNumber' => null,
        'transactionOrigin' => null,
        'dynamicMerchantName' => null,
        'frequency' => null,
        'transactionAmount' => null,
        'clientLocale' => null,
        'orderId' => null,
        'billing' => null,
        'shipping' => null,
        'comments' => null
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
        'requestType' => 'requestType',
        'storeId' => 'storeId',
        'startDate' => 'startDate',
        'numberOfPayments' => 'numberOfPayments',
        'maximumFailures' => 'maximumFailures',
        'invoiceNumber' => 'invoiceNumber',
        'purchaseOrderNumber' => 'purchaseOrderNumber',
        'transactionOrigin' => 'transactionOrigin',
        'dynamicMerchantName' => 'dynamicMerchantName',
        'frequency' => 'frequency',
        'transactionAmount' => 'transactionAmount',
        'clientLocale' => 'clientLocale',
        'orderId' => 'orderId',
        'billing' => 'billing',
        'shipping' => 'shipping',
        'comments' => 'comments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'requestType' => 'setRequestType',
        'storeId' => 'setStoreId',
        'startDate' => 'setStartDate',
        'numberOfPayments' => 'setNumberOfPayments',
        'maximumFailures' => 'setMaximumFailures',
        'invoiceNumber' => 'setInvoiceNumber',
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'transactionOrigin' => 'setTransactionOrigin',
        'dynamicMerchantName' => 'setDynamicMerchantName',
        'frequency' => 'setFrequency',
        'transactionAmount' => 'setTransactionAmount',
        'clientLocale' => 'setClientLocale',
        'orderId' => 'setOrderId',
        'billing' => 'setBilling',
        'shipping' => 'setShipping',
        'comments' => 'setComments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'requestType' => 'getRequestType',
        'storeId' => 'getStoreId',
        'startDate' => 'getStartDate',
        'numberOfPayments' => 'getNumberOfPayments',
        'maximumFailures' => 'getMaximumFailures',
        'invoiceNumber' => 'getInvoiceNumber',
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'transactionOrigin' => 'getTransactionOrigin',
        'dynamicMerchantName' => 'getDynamicMerchantName',
        'frequency' => 'getFrequency',
        'transactionAmount' => 'getTransactionAmount',
        'clientLocale' => 'getClientLocale',
        'orderId' => 'getOrderId',
        'billing' => 'getBilling',
        'shipping' => 'getShipping',
        'comments' => 'getComments'
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
        $this->container['requestType'] = isset($data['requestType']) ? $data['requestType'] : null;
        $this->container['storeId'] = isset($data['storeId']) ? $data['storeId'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['numberOfPayments'] = isset($data['numberOfPayments']) ? $data['numberOfPayments'] : null;
        $this->container['maximumFailures'] = isset($data['maximumFailures']) ? $data['maximumFailures'] : null;
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['purchaseOrderNumber'] = isset($data['purchaseOrderNumber']) ? $data['purchaseOrderNumber'] : null;
        $this->container['transactionOrigin'] = isset($data['transactionOrigin']) ? $data['transactionOrigin'] : null;
        $this->container['dynamicMerchantName'] = isset($data['dynamicMerchantName']) ? $data['dynamicMerchantName'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['transactionAmount'] = isset($data['transactionAmount']) ? $data['transactionAmount'] : null;
        $this->container['clientLocale'] = isset($data['clientLocale']) ? $data['clientLocale'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('requestType', self::$attributeMap, true);
        $this->container[$discriminator] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['requestType'] === null) {
            $invalidProperties[] = "'requestType' can't be null";
        }
        if (!is_null($this->container['storeId']) && (mb_strlen($this->container['storeId']) > 20)) {
            $invalidProperties[] = "invalid value for 'storeId', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if (!is_null($this->container['numberOfPayments']) && ($this->container['numberOfPayments'] > 999)) {
            $invalidProperties[] = "invalid value for 'numberOfPayments', must be smaller than or equal to 999.";
        }

        if (!is_null($this->container['numberOfPayments']) && ($this->container['numberOfPayments'] < 1)) {
            $invalidProperties[] = "invalid value for 'numberOfPayments', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['maximumFailures']) && ($this->container['maximumFailures'] > 999)) {
            $invalidProperties[] = "invalid value for 'maximumFailures', must be smaller than or equal to 999.";
        }

        if (!is_null($this->container['maximumFailures']) && ($this->container['maximumFailures'] < 1)) {
            $invalidProperties[] = "invalid value for 'maximumFailures', must be bigger than or equal to 1.";
        }

        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if ($this->container['transactionAmount'] === null) {
            $invalidProperties[] = "'transactionAmount' can't be null";
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
     * Gets requestType
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->container['requestType'];
    }

    /**
     * Sets requestType
     *
     * @param string $requestType Object name of the payment schedules request.
     *
     * @return $this
     */
    public function setRequestType($requestType)
    {
        $this->container['requestType'] = $requestType;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId Store ID number.
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        if (!is_null($storeId) && (mb_strlen($storeId) > 20)) {
            throw new \InvalidArgumentException('invalid length for $storeId when calling PaymentSchedulesRequest., must be smaller than or equal to 20.');
        }

        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate Date of mandate signature.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets numberOfPayments
     *
     * @return int|null
     */
    public function getNumberOfPayments()
    {
        return $this->container['numberOfPayments'];
    }

    /**
     * Sets numberOfPayments
     *
     * @param int|null $numberOfPayments Number of times the recurring payment will process.
     *
     * @return $this
     */
    public function setNumberOfPayments($numberOfPayments)
    {

        if (!is_null($numberOfPayments) && ($numberOfPayments > 999)) {
            throw new \InvalidArgumentException('invalid value for $numberOfPayments when calling PaymentSchedulesRequest., must be smaller than or equal to 999.');
        }
        if (!is_null($numberOfPayments) && ($numberOfPayments < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberOfPayments when calling PaymentSchedulesRequest., must be bigger than or equal to 1.');
        }

        $this->container['numberOfPayments'] = $numberOfPayments;

        return $this;
    }

    /**
     * Gets maximumFailures
     *
     * @return int|null
     */
    public function getMaximumFailures()
    {
        return $this->container['maximumFailures'];
    }

    /**
     * Sets maximumFailures
     *
     * @param int|null $maximumFailures Number of failures that can be encountered before re-tries cease.
     *
     * @return $this
     */
    public function setMaximumFailures($maximumFailures)
    {

        if (!is_null($maximumFailures) && ($maximumFailures > 999)) {
            throw new \InvalidArgumentException('invalid value for $maximumFailures when calling PaymentSchedulesRequest., must be smaller than or equal to 999.');
        }
        if (!is_null($maximumFailures) && ($maximumFailures < 1)) {
            throw new \InvalidArgumentException('invalid value for $maximumFailures when calling PaymentSchedulesRequest., must be bigger than or equal to 1.');
        }

        $this->container['maximumFailures'] = $maximumFailures;

        return $this;
    }

    /**
     * Gets invoiceNumber
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string|null $invoiceNumber Invoice number.
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
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string|null $purchaseOrderNumber Purchase order number.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets transactionOrigin
     *
     * @return \FirstData\FirstApi\Client\Model\TransactionOrigin|null
     */
    public function getTransactionOrigin()
    {
        return $this->container['transactionOrigin'];
    }

    /**
     * Sets transactionOrigin
     *
     * @param \FirstData\FirstApi\Client\Model\TransactionOrigin|null $transactionOrigin transactionOrigin
     *
     * @return $this
     */
    public function setTransactionOrigin($transactionOrigin)
    {
        $this->container['transactionOrigin'] = $transactionOrigin;

        return $this;
    }

    /**
     * Gets dynamicMerchantName
     *
     * @return string|null
     */
    public function getDynamicMerchantName()
    {
        return $this->container['dynamicMerchantName'];
    }

    /**
     * Sets dynamicMerchantName
     *
     * @param string|null $dynamicMerchantName Dynamic merchant name for the cardholder's statement.
     *
     * @return $this
     */
    public function setDynamicMerchantName($dynamicMerchantName)
    {
        $this->container['dynamicMerchantName'] = $dynamicMerchantName;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return \FirstData\FirstApi\Client\Model\Frequency
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param \FirstData\FirstApi\Client\Model\Frequency $frequency frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets transactionAmount
     *
     * @return \FirstData\FirstApi\Client\Model\Amount
     */
    public function getTransactionAmount()
    {
        return $this->container['transactionAmount'];
    }

    /**
     * Sets transactionAmount
     *
     * @param \FirstData\FirstApi\Client\Model\Amount $transactionAmount transactionAmount
     *
     * @return $this
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->container['transactionAmount'] = $transactionAmount;

        return $this;
    }

    /**
     * Gets clientLocale
     *
     * @return \FirstData\FirstApi\Client\Model\ClientLocale|null
     */
    public function getClientLocale()
    {
        return $this->container['clientLocale'];
    }

    /**
     * Sets clientLocale
     *
     * @param \FirstData\FirstApi\Client\Model\ClientLocale|null $clientLocale clientLocale
     *
     * @return $this
     */
    public function setClientLocale($clientLocale)
    {
        $this->container['clientLocale'] = $clientLocale;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId Client order ID if supplied by client.
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \FirstData\FirstApi\Client\Model\Billing|null
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \FirstData\FirstApi\Client\Model\Billing|null $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \FirstData\FirstApi\Client\Model\Shipping|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \FirstData\FirstApi\Client\Model\Shipping|null $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments User supplied comments.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

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


