<?php
/**
 * AuthenticationApi
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
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Configuration;
use FirstData\FirstApi\Client\HeaderSelector;
use FirstData\FirstApi\Client\ObjectSerializer;

/**
 * AuthenticationApi Class Doc Comment
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v1AuthenticationAccessTokensPost
     *
     * Generate an access token for user authentication
     *
     * @param  string $contentType content type (required)
     * @param  string $clientRequestId A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. (required)
     * @param  string $apiKey apiKey (required)
     * @param  int $timestamp Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). (required)
     * @param  string $messageSignature Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. (optional)
     *
     * @throws \FirstData\FirstApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FirstData\FirstApi\Client\Model\AccessTokenResponse
     */
    public function v1AuthenticationAccessTokensPost($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature = null)
    {
        list($response) = $this->v1AuthenticationAccessTokensPostWithHttpInfo($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature);
        return $response;
    }

    /**
     * Operation v1AuthenticationAccessTokensPostWithHttpInfo
     *
     * Generate an access token for user authentication
     *
     * @param  string $contentType content type (required)
     * @param  string $clientRequestId A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. (required)
     * @param  string $apiKey (required)
     * @param  int $timestamp Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). (required)
     * @param  string $messageSignature Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. (optional)
     *
     * @throws \FirstData\FirstApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FirstData\FirstApi\Client\Model\AccessTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1AuthenticationAccessTokensPostWithHttpInfo($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature = null)
    {
        $returnType = '\FirstData\FirstApi\Client\Model\AccessTokenResponse';
        $request = $this->v1AuthenticationAccessTokensPostRequest($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FirstData\FirstApi\Client\Model\AccessTokenResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FirstData\FirstApi\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FirstData\FirstApi\Client\Model\TransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FirstData\FirstApi\Client\Model\TransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FirstData\FirstApi\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FirstData\FirstApi\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1AuthenticationAccessTokensPostAsync
     *
     * Generate an access token for user authentication
     *
     * @param  string $contentType content type (required)
     * @param  string $clientRequestId A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. (required)
     * @param  string $apiKey (required)
     * @param  int $timestamp Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). (required)
     * @param  string $messageSignature Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1AuthenticationAccessTokensPostAsync($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature = null)
    {
        return $this->v1AuthenticationAccessTokensPostAsyncWithHttpInfo($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1AuthenticationAccessTokensPostAsyncWithHttpInfo
     *
     * Generate an access token for user authentication
     *
     * @param  string $contentType content type (required)
     * @param  string $clientRequestId A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. (required)
     * @param  string $apiKey (required)
     * @param  int $timestamp Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). (required)
     * @param  string $messageSignature Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1AuthenticationAccessTokensPostAsyncWithHttpInfo($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature = null)
    {
        $returnType = '\FirstData\FirstApi\Client\Model\AccessTokenResponse';
        $request = $this->v1AuthenticationAccessTokensPostRequest($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1AuthenticationAccessTokensPost'
     *
     * @param  string $contentType content type (required)
     * @param  string $clientRequestId A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. (required)
     * @param  string $apiKey (required)
     * @param  int $timestamp Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). (required)
     * @param  string $messageSignature Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v1AuthenticationAccessTokensPostRequest($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature = null)
    {
        // verify the required parameter 'contentType' is set
        if ($contentType === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $contentType when calling v1AuthenticationAccessTokensPost'
            );
        }
        // verify the required parameter 'clientRequestId' is set
        if ($clientRequestId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $clientRequestId when calling v1AuthenticationAccessTokensPost'
            );
        }
        // verify the required parameter 'apiKey' is set
        if ($apiKey === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiKey when calling v1AuthenticationAccessTokensPost'
            );
        }
        // verify the required parameter 'timestamp' is set
        if ($timestamp === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $timestamp when calling v1AuthenticationAccessTokensPost'
            );
        }

        $resourcePath = '/v1/authentication/access-tokens';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($contentType !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($contentType);
        }
        // header params
        if ($clientRequestId !== null) {
            $headerParams['Client-Request-Id'] = ObjectSerializer::toHeaderValue($clientRequestId);
        }
        // header params
        if ($apiKey !== null) {
            $headerParams['Api-Key'] = ObjectSerializer::toHeaderValue($apiKey);
        }
        // header params
        if ($timestamp !== null) {
            $headerParams['Timestamp'] = ObjectSerializer::toHeaderValue($timestamp);
        }
        // header params
        if ($messageSignature !== null) {
            $headerParams['Message-Signature'] = ObjectSerializer::toHeaderValue($messageSignature);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}