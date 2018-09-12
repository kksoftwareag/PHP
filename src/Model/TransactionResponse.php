<?php
/**
 * TransactionResponse
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
 * TransactionResponse Class Doc Comment
 *
 * @category Class
 * @description This is the common object for primary and secondary payment request responses
 * @package  FirstData\FirstApi\Client
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
        'responseType' => '\FirstData\FirstApi\Client\Model\ResponseType',
        'clientRequestId' => 'string',
        'apiTraceId' => 'string',
        'ipgTransactionId' => 'string',
        'orderId' => 'string',
        'transactionType' => '\FirstData\FirstApi\Client\Model\TransactionType',
        'authorizationCode' => 'string',
        'avsResponse' => 'string',
        'securityCodeResponse' => 'string',
        'brand' => 'string',
        'country' => 'string',
        'terminalId' => 'string',
        'clientTransactionId' => 'string',
        'transactionTime' => 'int',
        'approvedAmount' => '\FirstData\FirstApi\Client\Model\Amount',
        'transactionStatus' => 'string',
        'transactionState' => 'string',
        'authenticationRedirect' => '\FirstData\FirstApi\Client\Model\TransactionResponseAuthenticationRedirect',
        'schemeTransactionId' => 'string',
        'processor' => '\FirstData\FirstApi\Client\Model\ProcessorData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'responseType' => null,
        'clientRequestId' => null,
        'apiTraceId' => null,
        'ipgTransactionId' => null,
        'orderId' => null,
        'transactionType' => null,
        'authorizationCode' => null,
        'avsResponse' => null,
        'securityCodeResponse' => null,
        'brand' => null,
        'country' => null,
        'terminalId' => null,
        'clientTransactionId' => null,
        'transactionTime' => 'int64',
        'approvedAmount' => null,
        'transactionStatus' => null,
        'transactionState' => null,
        'authenticationRedirect' => null,
        'schemeTransactionId' => null,
        'processor' => null
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
        'responseType' => 'responseType',
        'clientRequestId' => 'clientRequestId',
        'apiTraceId' => 'apiTraceId',
        'ipgTransactionId' => 'ipgTransactionId',
        'orderId' => 'orderId',
        'transactionType' => 'transactionType',
        'authorizationCode' => 'authorizationCode',
        'avsResponse' => 'avsResponse',
        'securityCodeResponse' => 'securityCodeResponse',
        'brand' => 'brand',
        'country' => 'country',
        'terminalId' => 'terminalId',
        'clientTransactionId' => 'clientTransactionId',
        'transactionTime' => 'transactionTime',
        'approvedAmount' => 'approvedAmount',
        'transactionStatus' => 'transactionStatus',
        'transactionState' => 'transactionState',
        'authenticationRedirect' => 'authenticationRedirect',
        'schemeTransactionId' => 'schemeTransactionId',
        'processor' => 'processor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'responseType' => 'setResponseType',
        'clientRequestId' => 'setClientRequestId',
        'apiTraceId' => 'setApiTraceId',
        'ipgTransactionId' => 'setIpgTransactionId',
        'orderId' => 'setOrderId',
        'transactionType' => 'setTransactionType',
        'authorizationCode' => 'setAuthorizationCode',
        'avsResponse' => 'setAvsResponse',
        'securityCodeResponse' => 'setSecurityCodeResponse',
        'brand' => 'setBrand',
        'country' => 'setCountry',
        'terminalId' => 'setTerminalId',
        'clientTransactionId' => 'setClientTransactionId',
        'transactionTime' => 'setTransactionTime',
        'approvedAmount' => 'setApprovedAmount',
        'transactionStatus' => 'setTransactionStatus',
        'transactionState' => 'setTransactionState',
        'authenticationRedirect' => 'setAuthenticationRedirect',
        'schemeTransactionId' => 'setSchemeTransactionId',
        'processor' => 'setProcessor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'responseType' => 'getResponseType',
        'clientRequestId' => 'getClientRequestId',
        'apiTraceId' => 'getApiTraceId',
        'ipgTransactionId' => 'getIpgTransactionId',
        'orderId' => 'getOrderId',
        'transactionType' => 'getTransactionType',
        'authorizationCode' => 'getAuthorizationCode',
        'avsResponse' => 'getAvsResponse',
        'securityCodeResponse' => 'getSecurityCodeResponse',
        'brand' => 'getBrand',
        'country' => 'getCountry',
        'terminalId' => 'getTerminalId',
        'clientTransactionId' => 'getClientTransactionId',
        'transactionTime' => 'getTransactionTime',
        'approvedAmount' => 'getApprovedAmount',
        'transactionStatus' => 'getTransactionStatus',
        'transactionState' => 'getTransactionState',
        'authenticationRedirect' => 'getAuthenticationRedirect',
        'schemeTransactionId' => 'getSchemeTransactionId',
        'processor' => 'getProcessor'
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

    const TRANSACTION_STATUS_APPROVED = 'APPROVED';
    const TRANSACTION_STATUS_WAITING = 'WAITING';
    const TRANSACTION_STATUS_VALIDATION_FAILED = 'VALIDATION_FAILED';
    const TRANSACTION_STATUS_DECLINED = 'DECLINED';
    const TRANSACTION_STATE_AUTHORIZED = 'AUTHORIZED';
    const TRANSACTION_STATE_CAPTURED = 'CAPTURED';
    const TRANSACTION_STATE_COMPLETED_GET = 'COMPLETED_GET';
    const TRANSACTION_STATE_DECLINED = 'DECLINED';
    const TRANSACTION_STATE_CHECKED = 'CHECKED';
    const TRANSACTION_STATE_INITIALIZED = 'INITIALIZED';
    const TRANSACTION_STATE_PENDING_AUTHORIZATION = 'PENDING_AUTHORIZATION';
    const TRANSACTION_STATE_PENDING_AUTOVOID = 'PENDING_AUTOVOID';
    const TRANSACTION_STATE_PENDING_CAPTURE = 'PENDING_CAPTURE';
    const TRANSACTION_STATE_PENDING_CREDIT = 'PENDING_CREDIT';
    const TRANSACTION_STATE_PENDING_GIROPAY_INIT = 'PENDING_GIROPAY_INIT';
    const TRANSACTION_STATE_PENDING_IDEAL_INIT = 'PENDING_IDEAL_INIT';
    const TRANSACTION_STATE_PENDING_INIT = 'PENDING_INIT';
    const TRANSACTION_STATE_PENDING_READY = 'PENDING_READY';
    const TRANSACTION_STATE_PENDING_RETURN = 'PENDING_RETURN';
    const TRANSACTION_STATE_PENDING_SETTLEMENT = 'PENDING_SETTLEMENT';
    const TRANSACTION_STATE_PENDING_SOFORT_INIT = 'PENDING_SOFORT_INIT';
    const TRANSACTION_STATE_PENDING_VOID = 'PENDING_VOID';
    const TRANSACTION_STATE_READY = 'READY';
    const TRANSACTION_STATE_SETTLED = 'SETTLED';
    const TRANSACTION_STATE_VOIDED = 'VOIDED';
    const TRANSACTION_STATE_WAITING = 'WAITING';
    const TRANSACTION_STATE_WAITING_AUTHENTICATION = 'WAITING_AUTHENTICATION';
    const TRANSACTION_STATE_WAITING_3_D_SECURE = 'WAITING_3D_SECURE';
    const TRANSACTION_STATE_WAITING_CLICK_AND_BUY = 'WAITING_CLICK_AND_BUY';
    const TRANSACTION_STATE_WAITING_GIROPAY = 'WAITING_GIROPAY';
    const TRANSACTION_STATE_WAITING_IDEAL = 'WAITING_IDEAL';
    const TRANSACTION_STATE_WAITING_KLARNA = 'WAITING_KLARNA';
    const TRANSACTION_STATE_WAITING_PAYPAL = 'WAITING_PAYPAL';
    const TRANSACTION_STATE_WAITING_PAYPAL_EVENT = 'WAITING_PAYPAL_EVENT';
    const TRANSACTION_STATE_WAITING_PPRO_LONG_WAITING = 'WAITING_PPRO_LONG_WAITING';
    const TRANSACTION_STATE_WAITING_SOFORT = 'WAITING_SOFORT';
    const TRANSACTION_STATE_WAITING_T_PAY = 'WAITING_T_PAY';
    const TRANSACTION_STATE_WAITING_ALIPAY_PAYSECURE = 'WAITING_ALIPAY_PAYSECURE';
    

    
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
            self::TRANSACTION_STATUS_DECLINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionStateAllowableValues()
    {
        return [
            self::TRANSACTION_STATE_AUTHORIZED,
            self::TRANSACTION_STATE_CAPTURED,
            self::TRANSACTION_STATE_COMPLETED_GET,
            self::TRANSACTION_STATE_DECLINED,
            self::TRANSACTION_STATE_CHECKED,
            self::TRANSACTION_STATE_INITIALIZED,
            self::TRANSACTION_STATE_PENDING_AUTHORIZATION,
            self::TRANSACTION_STATE_PENDING_AUTOVOID,
            self::TRANSACTION_STATE_PENDING_CAPTURE,
            self::TRANSACTION_STATE_PENDING_CREDIT,
            self::TRANSACTION_STATE_PENDING_GIROPAY_INIT,
            self::TRANSACTION_STATE_PENDING_IDEAL_INIT,
            self::TRANSACTION_STATE_PENDING_INIT,
            self::TRANSACTION_STATE_PENDING_READY,
            self::TRANSACTION_STATE_PENDING_RETURN,
            self::TRANSACTION_STATE_PENDING_SETTLEMENT,
            self::TRANSACTION_STATE_PENDING_SOFORT_INIT,
            self::TRANSACTION_STATE_PENDING_VOID,
            self::TRANSACTION_STATE_READY,
            self::TRANSACTION_STATE_SETTLED,
            self::TRANSACTION_STATE_VOIDED,
            self::TRANSACTION_STATE_WAITING,
            self::TRANSACTION_STATE_WAITING_AUTHENTICATION,
            self::TRANSACTION_STATE_WAITING_3_D_SECURE,
            self::TRANSACTION_STATE_WAITING_CLICK_AND_BUY,
            self::TRANSACTION_STATE_WAITING_GIROPAY,
            self::TRANSACTION_STATE_WAITING_IDEAL,
            self::TRANSACTION_STATE_WAITING_KLARNA,
            self::TRANSACTION_STATE_WAITING_PAYPAL,
            self::TRANSACTION_STATE_WAITING_PAYPAL_EVENT,
            self::TRANSACTION_STATE_WAITING_PPRO_LONG_WAITING,
            self::TRANSACTION_STATE_WAITING_SOFORT,
            self::TRANSACTION_STATE_WAITING_T_PAY,
            self::TRANSACTION_STATE_WAITING_ALIPAY_PAYSECURE,
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
        $this->container['responseType'] = isset($data['responseType']) ? $data['responseType'] : null;
        $this->container['clientRequestId'] = isset($data['clientRequestId']) ? $data['clientRequestId'] : null;
        $this->container['apiTraceId'] = isset($data['apiTraceId']) ? $data['apiTraceId'] : null;
        $this->container['ipgTransactionId'] = isset($data['ipgTransactionId']) ? $data['ipgTransactionId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['authorizationCode'] = isset($data['authorizationCode']) ? $data['authorizationCode'] : null;
        $this->container['avsResponse'] = isset($data['avsResponse']) ? $data['avsResponse'] : null;
        $this->container['securityCodeResponse'] = isset($data['securityCodeResponse']) ? $data['securityCodeResponse'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
        $this->container['clientTransactionId'] = isset($data['clientTransactionId']) ? $data['clientTransactionId'] : null;
        $this->container['transactionTime'] = isset($data['transactionTime']) ? $data['transactionTime'] : null;
        $this->container['approvedAmount'] = isset($data['approvedAmount']) ? $data['approvedAmount'] : null;
        $this->container['transactionStatus'] = isset($data['transactionStatus']) ? $data['transactionStatus'] : null;
        $this->container['transactionState'] = isset($data['transactionState']) ? $data['transactionState'] : null;
        $this->container['authenticationRedirect'] = isset($data['authenticationRedirect']) ? $data['authenticationRedirect'] : null;
        $this->container['schemeTransactionId'] = isset($data['schemeTransactionId']) ? $data['schemeTransactionId'] : null;
        $this->container['processor'] = isset($data['processor']) ? $data['processor'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!in_array($this->container['transactionStatus'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transactionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransactionStateAllowableValues();
        if (!in_array($this->container['transactionState'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transactionState', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['schemeTransactionId']) && (strlen($this->container['schemeTransactionId']) > 40)) {
            $invalidProperties[] = "invalid value for 'schemeTransactionId', the character length must be smaller than or equal to 40.";
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

        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!in_array($this->container['transactionStatus'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTransactionStateAllowableValues();
        if (!in_array($this->container['transactionState'], $allowedValues)) {
            return false;
        }
        if (strlen($this->container['schemeTransactionId']) > 40) {
            return false;
        }
        return true;
    }


    /**
     * Gets responseType
     *
     * @return \FirstData\FirstApi\Client\Model\ResponseType
     */
    public function getResponseType()
    {
        return $this->container['responseType'];
    }

    /**
     * Sets responseType
     *
     * @param \FirstData\FirstApi\Client\Model\ResponseType $responseType The schema type returned in the response.
     *
     * @return $this
     */
    public function setResponseType($responseType)
    {
        $this->container['responseType'] = $responseType;

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
     * @param string $clientRequestId Echoes back the value in the Request header
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
     * @param string $apiTraceId Echoes back the value in the Request header
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
     * @param string $ipgTransactionId The Response Transaction ID
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
     * @param string $orderId Client Order ID if supplied by client, otherwise the Order ID
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
     * @return \FirstData\FirstApi\Client\Model\TransactionType
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param \FirstData\FirstApi\Client\Model\TransactionType $transactionType transactionType
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
     * @param string $authorizationCode The processor approval code for compliance.
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
     * @return string
     */
    public function getAvsResponse()
    {
        return $this->container['avsResponse'];
    }

    /**
     * Sets avsResponse
     *
     * @param string $avsResponse The processor address validation response for compliance.
     *
     * @return $this
     */
    public function setAvsResponse($avsResponse)
    {
        $this->container['avsResponse'] = $avsResponse;

        return $this;
    }

    /**
     * Gets securityCodeResponse
     *
     * @return string
     */
    public function getSecurityCodeResponse()
    {
        return $this->container['securityCodeResponse'];
    }

    /**
     * Sets securityCodeResponse
     *
     * @param string $securityCodeResponse The processor card verification validation response for compliance.
     *
     * @return $this
     */
    public function setSecurityCodeResponse($securityCodeResponse)
    {
        $this->container['securityCodeResponse'] = $securityCodeResponse;

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
     * @param int $transactionTime The transaction time in seconds since Epoch
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
     * @return \FirstData\FirstApi\Client\Model\Amount
     */
    public function getApprovedAmount()
    {
        return $this->container['approvedAmount'];
    }

    /**
     * Sets approvedAmount
     *
     * @param \FirstData\FirstApi\Client\Model\Amount $approvedAmount approvedAmount
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
     * @param string $transactionStatus The status of the transaction. APPROVED/WAITING are returned by the endpoints.  VALIDATION_FAILED/DECLINED are errors. See ErrorResponse object for details.
     *
     * @return $this
     */
    public function setTransactionStatus($transactionStatus)
    {
        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!is_null($transactionStatus) && !in_array($transactionStatus, $allowedValues)) {
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
     * Gets transactionState
     *
     * @return string
     */
    public function getTransactionState()
    {
        return $this->container['transactionState'];
    }

    /**
     * Sets transactionState
     *
     * @param string $transactionState The state of the transaction.
     *
     * @return $this
     */
    public function setTransactionState($transactionState)
    {
        $allowedValues = $this->getTransactionStateAllowableValues();
        if (!is_null($transactionState) && !in_array($transactionState, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transactionState', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transactionState'] = $transactionState;

        return $this;
    }

    /**
     * Gets authenticationRedirect
     *
     * @return \FirstData\FirstApi\Client\Model\TransactionResponseAuthenticationRedirect
     */
    public function getAuthenticationRedirect()
    {
        return $this->container['authenticationRedirect'];
    }

    /**
     * Sets authenticationRedirect
     *
     * @param \FirstData\FirstApi\Client\Model\TransactionResponseAuthenticationRedirect $authenticationRedirect authenticationRedirect
     *
     * @return $this
     */
    public function setAuthenticationRedirect($authenticationRedirect)
    {
        $this->container['authenticationRedirect'] = $authenticationRedirect;

        return $this;
    }

    /**
     * Gets schemeTransactionId
     *
     * @return string
     */
    public function getSchemeTransactionId()
    {
        return $this->container['schemeTransactionId'];
    }

    /**
     * Sets schemeTransactionId
     *
     * @param string $schemeTransactionId The transaction id received from schemes for the initial transaction, returned for the transactions marked as \"FIRST\"
     *
     * @return $this
     */
    public function setSchemeTransactionId($schemeTransactionId)
    {
        if (!is_null($schemeTransactionId) && (strlen($schemeTransactionId) > 40)) {
            throw new \InvalidArgumentException('invalid length for $schemeTransactionId when calling TransactionResponse., must be smaller than or equal to 40.');
        }

        $this->container['schemeTransactionId'] = $schemeTransactionId;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return \FirstData\FirstApi\Client\Model\ProcessorData
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param \FirstData\FirstApi\Client\Model\ProcessorData $processor processor
     *
     * @return $this
     */
    public function setProcessor($processor)
    {
        $this->container['processor'] = $processor;

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


