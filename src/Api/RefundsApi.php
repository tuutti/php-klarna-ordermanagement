<?php
/**
 * RefundsApi
 * PHP version 5
 *
 * @category Class
 * @package  Klarna\OrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klarna Order Managment API
 *
 * API to handle order lifecycle
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Klarna\OrderManagement\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Klarna\ApiException;
use Klarna\Configuration;
use Klarna\HeaderSelector;
use Klarna\ObjectSerializer;

/**
 * RefundsApi Class Doc Comment
 *
 * @category Class
 * @package  Klarna\OrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RefundsApi
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
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation get
     *
     * Get refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $refund_id Refund id (required)
     *
     * @throws \Klarna\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Klarna\OrderManagement\Model\Refund|\Klarna\OrderManagement\Model\NotFoundErrorMessage
     */
    public function get($order_id, $refund_id)
    {
        list($response) = $this->getWithHttpInfo($order_id, $refund_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Get refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $refund_id Refund id (required)
     *
     * @throws \Klarna\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Klarna\OrderManagement\Model\Refund|\Klarna\OrderManagement\Model\NotFoundErrorMessage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($order_id, $refund_id)
    {
        $request = $this->getRequest($order_id, $refund_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\Klarna\OrderManagement\Model\Refund' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Klarna\OrderManagement\Model\Refund', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Klarna\OrderManagement\Model\NotFoundErrorMessage' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Klarna\OrderManagement\Model\NotFoundErrorMessage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Klarna\OrderManagement\Model\Refund';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\Klarna\OrderManagement\Model\Refund',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Klarna\OrderManagement\Model\NotFoundErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAsync
     *
     * Get refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $refund_id Refund id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync($order_id, $refund_id)
    {
        return $this->getAsyncWithHttpInfo($order_id, $refund_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAsyncWithHttpInfo
     *
     * Get refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $refund_id Refund id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsyncWithHttpInfo($order_id, $refund_id)
    {
        $returnType = '\Klarna\OrderManagement\Model\Refund';
        $request = $this->getRequest($order_id, $refund_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'get'
     *
     * @param  string $order_id Order id (required)
     * @param  string $refund_id Refund id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRequest($order_id, $refund_id)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling get'
            );
        }
        // verify the required parameter 'refund_id' is set
        if ($refund_id === null || (is_array($refund_id) && count($refund_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $refund_id when calling get'
            );
        }

        $resourcePath = '/ordermanagement/v1/orders/{order_id}/refunds/{refund_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'order_id' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }
        // path params
        if ($refund_id !== null) {
            $resourcePath = str_replace(
                '{' . 'refund_id' . '}',
                ObjectSerializer::toPathValue($refund_id),
                $resourcePath
            );
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
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation refundOrder
     *
     * Create a refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $klarna_idempotency_key This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. (optional)
     * @param  \Klarna\OrderManagement\Model\RefundObject $body body (optional)
     *
     * @throws \Klarna\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function refundOrder($order_id, $klarna_idempotency_key = null, $body = null)
    {
        $this->refundOrderWithHttpInfo($order_id, $klarna_idempotency_key, $body);
    }

    /**
     * Operation refundOrderWithHttpInfo
     *
     * Create a refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $klarna_idempotency_key This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. (optional)
     * @param  \Klarna\OrderManagement\Model\RefundObject $body (optional)
     *
     * @throws \Klarna\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function refundOrderWithHttpInfo($order_id, $klarna_idempotency_key = null, $body = null)
    {
        $request = $this->refundOrderRequest($order_id, $klarna_idempotency_key, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Klarna\OrderManagement\Model\RefundNotAllowedErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Klarna\OrderManagement\Model\NotFoundErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation refundOrderAsync
     *
     * Create a refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $klarna_idempotency_key This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. (optional)
     * @param  \Klarna\OrderManagement\Model\RefundObject $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function refundOrderAsync($order_id, $klarna_idempotency_key = null, $body = null)
    {
        return $this->refundOrderAsyncWithHttpInfo($order_id, $klarna_idempotency_key, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation refundOrderAsyncWithHttpInfo
     *
     * Create a refund
     *
     * @param  string $order_id Order id (required)
     * @param  string $klarna_idempotency_key This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. (optional)
     * @param  \Klarna\OrderManagement\Model\RefundObject $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function refundOrderAsyncWithHttpInfo($order_id, $klarna_idempotency_key = null, $body = null)
    {
        $returnType = '';
        $request = $this->refundOrderRequest($order_id, $klarna_idempotency_key, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'refundOrder'
     *
     * @param  string $order_id Order id (required)
     * @param  string $klarna_idempotency_key This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. (optional)
     * @param  \Klarna\OrderManagement\Model\RefundObject $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function refundOrderRequest($order_id, $klarna_idempotency_key = null, $body = null)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling refundOrder'
            );
        }

        $resourcePath = '/ordermanagement/v1/orders/{order_id}/refunds';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($klarna_idempotency_key !== null) {
            $headerParams['Klarna-Idempotency-Key'] = ObjectSerializer::toHeaderValue($klarna_idempotency_key);
        }

        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'order_id' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
