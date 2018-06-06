<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class TransactionResponse
 *
 * @category Class
 * @description This is the common object for primary and secondary payment requests.
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clientRequestId' => 'string',
        'apiTraceId' => 'string',
        'ipgTransactionId' => 'string',
        'orderId' => 'string',
        'transactionType' => 'string',
        'authorizationCode' => 'string',
        'avsResponse' => TransactionResponseAvsResponse::class,
        'cardCodeValueResponse' => 'string',
        'brand' => 'string',
        'country' => 'string',
        'terminalId' => 'string',
        'clientTransactionId' => 'string',
        'transactionTime' => 'int',
        'approvedAmount' => Amount::class,
        'transactionStatus' => 'string',
        'authenticationRedirect' => TransactionResponseAuthenticationRedirect::class,
        'error' => Error::class
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clientRequestId' => null,
        'apiTraceId' => null,
        'ipgTransactionId' => null,
        'orderId' => null,
        'transactionType' => null,
        'authorizationCode' => null,
        'avsResponse' => null,
        'cardCodeValueResponse' => null,
        'brand' => null,
        'country' => null,
        'terminalId' => null,
        'clientTransactionId' => null,
        'transactionTime' => 'int64',
        'approvedAmount' => null,
        'transactionStatus' => null,
        'authenticationRedirect' => null,
        'error' => null
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
        'clientRequestId' => 'clientRequestId',
        'apiTraceId' => 'apiTraceId',
        'ipgTransactionId' => 'ipgTransactionId',
        'orderId' => 'orderId',
        'transactionType' => 'transactionType',
        'authorizationCode' => 'authorizationCode',
        'avsResponse' => 'avsResponse',
        'cardCodeValueResponse' => 'cardCodeValueResponse',
        'brand' => 'brand',
        'country' => 'country',
        'terminalId' => 'terminalId',
        'clientTransactionId' => 'clientTransactionId',
        'transactionTime' => 'transactionTime',
        'approvedAmount' => 'approvedAmount',
        'transactionStatus' => 'transactionStatus',
        'authenticationRedirect' => 'authenticationRedirect',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clientRequestId' => 'setClientRequestId',
        'apiTraceId' => 'setApiTraceId',
        'ipgTransactionId' => 'setIpgTransactionId',
        'orderId' => 'setOrderId',
        'transactionType' => 'setTransactionType',
        'authorizationCode' => 'setAuthorizationCode',
        'avsResponse' => 'setAvsResponse',
        'cardCodeValueResponse' => 'setCardCodeValueResponse',
        'brand' => 'setBrand',
        'country' => 'setCountry',
        'terminalId' => 'setTerminalId',
        'clientTransactionId' => 'setClientTransactionId',
        'transactionTime' => 'setTransactionTime',
        'approvedAmount' => 'setApprovedAmount',
        'transactionStatus' => 'setTransactionStatus',
        'authenticationRedirect' => 'setAuthenticationRedirect',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clientRequestId' => 'getClientRequestId',
        'apiTraceId' => 'getApiTraceId',
        'ipgTransactionId' => 'getIpgTransactionId',
        'orderId' => 'getOrderId',
        'transactionType' => 'getTransactionType',
        'authorizationCode' => 'getAuthorizationCode',
        'avsResponse' => 'getAvsResponse',
        'cardCodeValueResponse' => 'getCardCodeValueResponse',
        'brand' => 'getBrand',
        'country' => 'getCountry',
        'terminalId' => 'getTerminalId',
        'clientTransactionId' => 'getClientTransactionId',
        'transactionTime' => 'getTransactionTime',
        'approvedAmount' => 'getApprovedAmount',
        'transactionStatus' => 'getTransactionStatus',
        'authenticationRedirect' => 'getAuthenticationRedirect',
        'error' => 'getError'
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

    const CARD_CODE_VALUE_RESPONSE_MATCHED = 'MATCHED';
    const CARD_CODE_VALUE_RESPONSE_NOT_MATCHED = 'NOT_MATCHED';
    const CARD_CODE_VALUE_RESPONSE_NOT_PROCESSED = 'NOT_PROCESSED';
    const CARD_CODE_VALUE_RESPONSE_NOT_PRESENT = 'NOT_PRESENT';
    const CARD_CODE_VALUE_RESPONSE_NOT_CERTIFIED = 'NOT_CERTIFIED';
    const CARD_CODE_VALUE_RESPONSE_NO_RESPONSE = 'NO_RESPONSE';
    const CARD_CODE_VALUE_RESPONSE_NOT_SENT = 'NOT_SENT';
    const TRANSACTION_STATUS_APPROVED = 'APPROVED';
    const TRANSACTION_STATUS_WAITING = 'WAITING';
    const TRANSACTION_STATUS_VALIDATION_FAILED = 'VALIDATION_FAILED';
    const TRANSACTION_STATUS_DECLINED = 'DECLINED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardCodeValueResponseAllowableValues()
    {
        return [
            self::CARD_CODE_VALUE_RESPONSE_MATCHED,
            self::CARD_CODE_VALUE_RESPONSE_NOT_MATCHED,
            self::CARD_CODE_VALUE_RESPONSE_NOT_PROCESSED,
            self::CARD_CODE_VALUE_RESPONSE_NOT_PRESENT,
            self::CARD_CODE_VALUE_RESPONSE_NOT_CERTIFIED,
            self::CARD_CODE_VALUE_RESPONSE_NO_RESPONSE,
            self::CARD_CODE_VALUE_RESPONSE_NOT_SENT
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionStatusAllowableValues()
    {
        return [
            self::TRANSACTION_STATUS_APPROVED,
            self::TRANSACTION_STATUS_WAITING,
            self::TRANSACTION_STATUS_VALIDATION_FAILED,
            self::TRANSACTION_STATUS_DECLINED
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
        $this->container['clientRequestId'] = $data['clientRequestId'] ?? null;
        $this->container['apiTraceId'] = $data['apiTraceId'] ?? null;
        $this->container['ipgTransactionId'] = $data['ipgTransactionId'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['transactionType'] = $data['transactionType'] ?? null;
        $this->container['authorizationCode'] = $data['authorizationCode'] ?? null;
        $this->container['avsResponse'] = $data['avsResponse'] ?? null;
        $this->container['cardCodeValueResponse'] = $data['cardCodeValueResponse'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['terminalId'] = $data['terminalId'] ?? null;
        $this->container['clientTransactionId'] = $data['clientTransactionId'] ?? null;
        $this->container['transactionTime'] = $data['transactionTime'] ?? null;
        $this->container['approvedAmount'] = $data['approvedAmount'] ?? null;
        $this->container['transactionStatus'] = $data['transactionStatus'] ?? null;
        $this->container['authenticationRedirect'] = $data['authenticationRedirect'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCardCodeValueResponseAllowableValues();
        if (null !== $this->container['cardCodeValueResponse'] && !\in_array($this->container['cardCodeValueResponse'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cardCodeValueResponse', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (null !== $this->container['transactionStatus'] && !\in_array($this->container['transactionStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transactionStatus', must be one of '%s'",
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
     * @param string $clientRequestId Value echoed from the request header
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
     * @param string $apiTraceId Echoes back the value in the request header
     *
     * @return $this
     */
    public function setApiTraceId($apiTraceId)
    {
        $this->container['apiTraceId'] = $apiTraceId;

        return $this;
    }

    /**
     * Gets ipgTransactionId
     *
     * @return string
     */
    public function getIpgTransactionId()
    {
        return $this->container['ipgTransactionId'];
    }

    /**
     * Sets ipgTransactionId
     *
     * @param string $ipgTransactionId The Gateway generated Transaction ID
     *
     * @return $this
     */
    public function setIpgTransactionId($ipgTransactionId)
    {
        $this->container['ipgTransactionId'] = $ipgTransactionId;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId Client Order ID if supplied by a client; otherwise the Order ID
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string $transactionType Transaction type
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets authorizationCode
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->container['authorizationCode'];
    }

    /**
     * Sets authorizationCode
     *
     * @param string $authorizationCode The processor approval code for compliance
     *
     * @return $this
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->container['authorizationCode'] = $authorizationCode;

        return $this;
    }

    /**
     * Gets avsResponse
     *
     * @return \FirstData\ApiClient\Model\TransactionResponseAvsResponse
     */
    public function getAvsResponse()
    {
        return $this->container['avsResponse'];
    }

    /**
     * Sets avsResponse
     *
     * @param \FirstData\ApiClient\Model\TransactionResponseAvsResponse $avsResponse avsResponse
     *
     * @return $this
     */
    public function setAvsResponse($avsResponse)
    {
        $this->container['avsResponse'] = $avsResponse;

        return $this;
    }

    /**
     * Gets cardCodeValueResponse
     *
     * @return string
     */
    public function getCardCodeValueResponse()
    {
        return $this->container['cardCodeValueResponse'];
    }

    /**
     * Sets cardCodeValueResponse
     *
     * @param string $cardCodeValueResponse The processor card code validation response.
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setCardCodeValueResponse($cardCodeValueResponse)
    {
        $allowedValues = $this->getCardCodeValueResponseAllowableValues();
        if (null !== $cardCodeValueResponse && !\in_array($cardCodeValueResponse, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cardCodeValueResponse', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cardCodeValueResponse'] = $cardCodeValueResponse;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand Card brand of the payment instrument
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

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
     * @param string $country Country of the card issuer
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets terminalId
     *
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     *
     * @param string $terminalId The terminal that is processing the transaction
     *
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets clientTransactionId
     *
     * @return string
     */
    public function getClientTransactionId()
    {
        return $this->container['clientTransactionId'];
    }

    /**
     * Sets clientTransactionId
     *
     * @param string $clientTransactionId The unique client Transaction ID from the Request header, if supplied
     *
     * @return $this
     */
    public function setClientTransactionId($clientTransactionId)
    {
        $this->container['clientTransactionId'] = $clientTransactionId;

        return $this;
    }

    /**
     * Gets transactionTime
     *
     * @return int
     */
    public function getTransactionTime()
    {
        return $this->container['transactionTime'];
    }

    /**
     * Sets transactionTime
     *
     * @param int $transactionTime The transaction time in seconds since epoch
     *
     * @return $this
     */
    public function setTransactionTime($transactionTime)
    {
        $this->container['transactionTime'] = $transactionTime;

        return $this;
    }

    /**
     * Gets approvedAmount
     *
     * @return \FirstData\ApiClient\Model\Amount
     */
    public function getApprovedAmount()
    {
        return $this->container['approvedAmount'];
    }

    /**
     * Sets approvedAmount
     *
     * @param \FirstData\ApiClient\Model\Amount $approvedAmount approvedAmount
     *
     * @return $this
     */
    public function setApprovedAmount($approvedAmount)
    {
        $this->container['approvedAmount'] = $approvedAmount;

        return $this;
    }

    /**
     * Gets transactionStatus
     *
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->container['transactionStatus'];
    }

    /**
     * Sets transactionStatus
     *
     * @param string $transactionStatus APPROVED/WAITING are returned by endpoints. VALIDATION_FAILED/DECLINED are errors. See Error objects for details.
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setTransactionStatus($transactionStatus)
    {
        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (null !== $transactionStatus && !\in_array($transactionStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transactionStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transactionStatus'] = $transactionStatus;

        return $this;
    }

    /**
     * Gets authenticationRedirect
     *
     * @return \FirstData\ApiClient\Model\TransactionResponseAuthenticationRedirect
     */
    public function getAuthenticationRedirect()
    {
        return $this->container['authenticationRedirect'];
    }

    /**
     * Sets authenticationRedirect
     *
     * @param \FirstData\ApiClient\Model\TransactionResponseAuthenticationRedirect $authenticationRedirect authenticationRedirect
     *
     * @return $this
     */
    public function setAuthenticationRedirect($authenticationRedirect)
    {
        $this->container['authenticationRedirect'] = $authenticationRedirect;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \FirstData\ApiClient\Model\Error
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \FirstData\ApiClient\Model\Error $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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


