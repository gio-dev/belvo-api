<?php
/**
 * TransactionsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Belvo API Docs
 *
 * # Introduction  Belvo is an open banking API for Latin America that allows companies to access banking and fiscal information in a secure as well as agile way.  Through our API, you can access:   - **Bank information** such as account information, real-time balance, historical transactions, and account owner identification.  - **Fiscal information** such as received and sent invoices and tax returns.   <img src=\"https://files.readme.io/acf27d3-belvo_pipes.png\" alt=\"fiscal-endpoints\">   In this API reference you'll find all the information you need about each  endpoint and resource.   <div style=\"background-color:#f4f6f8; border-left: 6px solid #4CAF50;padding: 12px;margin-left: 25px; border-radius: 4px; margin-right: 25px\">  <strong>Tip: </strong> Make sure that you also check out our Developer Portal for guides on <a href=\"https://developers.belvo.com/docs/get-started-in-5-minutes\" target=\"_blank\">how to get started</a>, using our <a href=\"https://developers.belvo.com/docs/test-in-sandbox\" target=\"_blank\">Sandbox environment</a>, as well as how to <a href=\"https://developers.belvo.com/docs/connect-widget\" target=\"_blank\">integrate the widget</a> or use our <a href=\"https://developers.belvo.com/docs/quickstart-application\" target=\"_blank\">quickstart application</a>.  </div>   ## Environment  We currently offer three environments: sandbox, development, and production.   When using our SDKs, make sure to use the **Alias** (and not the Base URL).   | Environment | Purpose | Access | |-----------|-------|-------| | **Sandbox** | The [Sandbox environment](https://developers.belvo.com/docs/test-in-sandbox) is dedicated for your testing and development phases. In this environment, you can create links without real credentials and you can pull test data from all endpoints. **⚠️The sandbox environment is refreshed frequently and your test data can be updated or deleted.** | Base URL (cURL): https://sandbox.belvo.com/ <br><br>Alias (SDKs): sandbox| | **Production** | The Production environment is dedicated for live applications with real connections to institutions. In this environment, you will need real credentials to create links and you will pull real data from the institutions.| Base URL (cURL): https://api.belvo.com/ <br><br>Alias (SDKs): production|   For each environment, you'll need to [generate separate API keys](https://developers.belvo.com/docs/get-your-belvo-api-keys).   ## Response codes   We use the following HTTP status code in the response depending on the success or failure:   | Status Code | Description | |-----------|-------| | `200` | ✅ **Success** - The content is available in the response body. | | `201` | ✅ **Success** - The content was created successfully on Belvo. | | `204` | ✅ **Success** - No content to return. | | `400` | ❌ **Bad Request Error** - Request returned an error, detail in content.| | `401` | ❌ **Unauthorized** - The Belvo credentials provided are not valid.| | `404` | ❌ **Not Found** - The resource you try to access cannot be found.| | `405` | ❌ **Method Not Allowed** - The HTTP method you are using is not accepted for this resource.| | `408` | ❌ **Request Timeout** - The request timed out and was terminated by the server.| | `428` | ❌ **MFA Token Required** - MFA token was required by the institution to connect. | | `500` | ❌ **Internal Server Error** - The detail of the error is available in the response body.|   ## Error handling   ### Error messages   Belvo API errors are returned in JSON format. For example, an error might look like this:   ```json  [     {       \"request_id\": \"a6e1c493d7a29d91aed4338e6fcf077d\",       \"message\": \"This field is required.\",       \"code\": \"required\",       \"field\": \"link\"     } ]  ```   Typically, an error response will have the following parameters:  - `request_id`: a unique ID for the request, you should share it with the Belvo support team for investigations.  - `message`: human-readable description of the error.  - `code`: a unique code for the error. Check the table below to see how to handle each error code.  - `field` *(optional)*: The specific field in the request body that has an issue.    ### Request identifier  When you need help with a specific error, add the request identifier (`request_id`) in your message to the Belvo support team. This will speed up investigations and get you back up and running in no time at all.   ### Error codes and troubleshooting   For a full list of errors and how to troubleshoot them, please see our dedicated [Error handling articles](https://developers.belvo.com/docs/integration-overview#error-handling) in our DevPortal.    ### Retry policy   Please see our recommended [retry policies](https://developers.belvo.com/docs/integration-overview#error-retry-policy) in the DevPortal.
 *
 * OpenAPI spec version: 1.176.0
 * Contact: support@belvo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.64
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * TransactionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionsApi
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
     * Operation destroyTransaction
     *
     * Delete a transaction
     *
     * @param  string $id The &#x60;transaction.id&#x60; that you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function destroyTransaction($id)
    {
        $this->destroyTransactionWithHttpInfo($id);
    }

    /**
     * Operation destroyTransactionWithHttpInfo
     *
     * Delete a transaction
     *
     * @param  string $id The &#x60;transaction.id&#x60; that you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function destroyTransactionWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyTransactionRequest($id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'null[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\NotFound[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation destroyTransactionAsync
     *
     * Delete a transaction
     *
     * @param  string $id The &#x60;transaction.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyTransactionAsync($id)
    {
        return $this->destroyTransactionAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation destroyTransactionAsyncWithHttpInfo
     *
     * Delete a transaction
     *
     * @param  string $id The &#x60;transaction.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyTransactionAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyTransactionRequest($id);

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
     * Create request for operation 'destroyTransaction'
     *
     * @param  string $id The &#x60;transaction.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function destroyTransactionRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling destroyTransaction'
            );
        }

        $resourcePath = '/api/transactions/{id}/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation detailTransaction
     *
     * Get a transaction's details
     *
     * @param  string $id The &#x60;transaction.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2008
     */
    public function detailTransaction($id, $omit = null, $fields = null)
    {
        list($response) = $this->detailTransactionWithHttpInfo($id, $omit, $fields);
        return $response;
    }

    /**
     * Operation detailTransactionWithHttpInfo
     *
     * Get a transaction's details
     *
     * @param  string $id The &#x60;transaction.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2008, HTTP status code, HTTP response headers (array of strings)
     */
    public function detailTransactionWithHttpInfo($id, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2008';
        $request = $this->detailTransactionRequest($id, $omit, $fields);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Swagger\Client\Model\InlineResponse2008',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'null[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\NotFound[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation detailTransactionAsync
     *
     * Get a transaction's details
     *
     * @param  string $id The &#x60;transaction.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailTransactionAsync($id, $omit = null, $fields = null)
    {
        return $this->detailTransactionAsyncWithHttpInfo($id, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation detailTransactionAsyncWithHttpInfo
     *
     * Get a transaction's details
     *
     * @param  string $id The &#x60;transaction.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailTransactionAsyncWithHttpInfo($id, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2008';
        $request = $this->detailTransactionRequest($id, $omit, $fields);

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
     * Create request for operation 'detailTransaction'
     *
     * @param  string $id The &#x60;transaction.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function detailTransactionRequest($id, $omit = null, $fields = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling detailTransaction'
            );
        }

        $resourcePath = '/api/transactions/{id}/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($omit !== null) {
            $queryParams['omit'] = ObjectSerializer::toQueryValue($omit, null);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields, null);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listTransactions
     *
     * List transactions
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by. (required)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $account The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. (optional)
     * @param  string[] $account__in Return results only for these &#x60;account.id&#x60;s. (optional)
     * @param  float $account__balance__available Return transactions that have a &#x60;account.balance.available&#x60; matching exactly this value. (optional)
     * @param  float $account__balance__available__lt Return transactions that have a &#x60;account.balance.available&#x60; less than this value. (optional)
     * @param  float $account__balance__available__lte Return transactions that have a &#x60;account.balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $account__balance__available__gt Return transactions that have a &#x60;account.balance.available&#x60; more than this value. (optional)
     * @param  float $account__balance__available__gte Return transactions that have a &#x60;account.balance.available&#x60; more than or equal to this value. (optional)
     * @param  float[] $account__balance__available__range Return transactions that have a &#x60;account.balance.available&#x60; within a range of two values. (optional)
     * @param  float $account__balance__current Return transactions that have a &#x60;account.balance.current&#x60; matching exactly this value. (optional)
     * @param  float $account__balance__current__gt Return transactions that have a &#x60;account.balance.current&#x60; greater than this value. (optional)
     * @param  float $account__balance__current__gte Return transactions that have a &#x60;account.balance.current&#x60; greater than or equal to this value. (optional)
     * @param  float $account__balance__current__lt Return transactions that have a &#x60;account.balance.current&#x60; less than this value. (optional)
     * @param  float $account__balance__current__lte Return transactions that have a &#x60;account.balance.current&#x60; less than or equal to this value. (optional)
     * @param  float[] $account__balance__current__range Return transactions that have a &#x60;account.balance.current&#x60; within a range of two values. (optional)
     * @param  string $account_type Return information only for transactions matching this account type, as designated by the institution. (optional)
     * @param  string[] $account_type__in Return information only for transactions matching these account types, as designated by the institution. (optional)
     * @param  \DateTime $accounting_date Return transactions that were processed by the institution on exactly this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__gt Return transactions that were processed by the institution after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__gte Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or later. (optional)
     * @param  \DateTime $accounting_date__lt Return transactions that were processed by the institution before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__lte Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or earlier. (optional)
     * @param  \DateTime[] $accounting_date__range Return transactions that were processed by the institution in this date range (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  float $amount Return results only for this value. (optional)
     * @param  float $amount__gt Return results only for more than this amount. (optional)
     * @param  float $amount__gte Return results only for and more than this amount. (optional)
     * @param  float $amount__lt Return results only for less than this amount. (optional)
     * @param  float $amount__lte Return results only for this amount or less. (optional)
     * @param  float[] $amount__range Return results between this amount range. (optional)
     * @param  string $collected_at Return items that were retrieved from the institution on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__gt Return items that were retrieved from the institution after this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__gte Return items that were retrieved from the institution after or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__lt Return items that were retrieved from the institution before this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__lte Return items that were retrieved from the institution before or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string[] $collected_at__range Return items that were retrieved from the institution between two dates (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $currency Return results that hold finances or balances in only this three-letter currency code. (optional)
     * @param  string[] $currency__in Return results that have funds or balances in one of these three-letter currency codes. (optional)
     * @param  string[] $credit_card_data__bill_name__in Return transactions for one of these bill names. (optional)
     * @param  string $reference Returns transactions with this institution-assigned reference number. (optional)
     * @param  string[] $reference__in Returns transactions with these institution-assigned reference numbers. (optional)
     * @param  string $status Return transactions with this status. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. (optional)
     * @param  string[] $status__in Return transactions with these statuses. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. (optional)
     * @param  string $type Return transactions with this type. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. (optional)
     * @param  string[] $type__in Return transactions with this types. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. (optional)
     * @param  \DateTime $value_date Return results for exactly this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__gt Return results that occurred after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__gte Return results for this date (&#x60;YYYY-MM-DD&#x60;) or later. (optional)
     * @param  \DateTime $value_date__lt Return results for before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__lte Return results for this date (&#x60;YYYY-MM-DD&#x60;) or earlier. (optional)
     * @param  \DateTime[] $value_date__range Return results for this date (&#x60;YYYY-MM-DD&#x60;) range. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2007
     */
    public function listTransactions($link, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $account = null, $account__in = null, $account__balance__available = null, $account__balance__available__lt = null, $account__balance__available__lte = null, $account__balance__available__gt = null, $account__balance__available__gte = null, $account__balance__available__range = null, $account__balance__current = null, $account__balance__current__gt = null, $account__balance__current__gte = null, $account__balance__current__lt = null, $account__balance__current__lte = null, $account__balance__current__range = null, $account_type = null, $account_type__in = null, $accounting_date = null, $accounting_date__gt = null, $accounting_date__gte = null, $accounting_date__lt = null, $accounting_date__lte = null, $accounting_date__range = null, $amount = null, $amount__gt = null, $amount__gte = null, $amount__lt = null, $amount__lte = null, $amount__range = null, $collected_at = null, $collected_at__gt = null, $collected_at__gte = null, $collected_at__lt = null, $collected_at__lte = null, $collected_at__range = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $currency = null, $currency__in = null, $credit_card_data__bill_name__in = null, $reference = null, $reference__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $value_date = null, $value_date__gt = null, $value_date__gte = null, $value_date__lt = null, $value_date__lte = null, $value_date__range = null)
    {
        list($response) = $this->listTransactionsWithHttpInfo($link, $page_size, $page, $omit, $fields, $link__in, $account, $account__in, $account__balance__available, $account__balance__available__lt, $account__balance__available__lte, $account__balance__available__gt, $account__balance__available__gte, $account__balance__available__range, $account__balance__current, $account__balance__current__gt, $account__balance__current__gte, $account__balance__current__lt, $account__balance__current__lte, $account__balance__current__range, $account_type, $account_type__in, $accounting_date, $accounting_date__gt, $accounting_date__gte, $accounting_date__lt, $accounting_date__lte, $accounting_date__range, $amount, $amount__gt, $amount__gte, $amount__lt, $amount__lte, $amount__range, $collected_at, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $credit_card_data__bill_name__in, $reference, $reference__in, $status, $status__in, $type, $type__in, $value_date, $value_date__gt, $value_date__gte, $value_date__lt, $value_date__lte, $value_date__range);
        return $response;
    }

    /**
     * Operation listTransactionsWithHttpInfo
     *
     * List transactions
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by. (required)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $account The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. (optional)
     * @param  string[] $account__in Return results only for these &#x60;account.id&#x60;s. (optional)
     * @param  float $account__balance__available Return transactions that have a &#x60;account.balance.available&#x60; matching exactly this value. (optional)
     * @param  float $account__balance__available__lt Return transactions that have a &#x60;account.balance.available&#x60; less than this value. (optional)
     * @param  float $account__balance__available__lte Return transactions that have a &#x60;account.balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $account__balance__available__gt Return transactions that have a &#x60;account.balance.available&#x60; more than this value. (optional)
     * @param  float $account__balance__available__gte Return transactions that have a &#x60;account.balance.available&#x60; more than or equal to this value. (optional)
     * @param  float[] $account__balance__available__range Return transactions that have a &#x60;account.balance.available&#x60; within a range of two values. (optional)
     * @param  float $account__balance__current Return transactions that have a &#x60;account.balance.current&#x60; matching exactly this value. (optional)
     * @param  float $account__balance__current__gt Return transactions that have a &#x60;account.balance.current&#x60; greater than this value. (optional)
     * @param  float $account__balance__current__gte Return transactions that have a &#x60;account.balance.current&#x60; greater than or equal to this value. (optional)
     * @param  float $account__balance__current__lt Return transactions that have a &#x60;account.balance.current&#x60; less than this value. (optional)
     * @param  float $account__balance__current__lte Return transactions that have a &#x60;account.balance.current&#x60; less than or equal to this value. (optional)
     * @param  float[] $account__balance__current__range Return transactions that have a &#x60;account.balance.current&#x60; within a range of two values. (optional)
     * @param  string $account_type Return information only for transactions matching this account type, as designated by the institution. (optional)
     * @param  string[] $account_type__in Return information only for transactions matching these account types, as designated by the institution. (optional)
     * @param  \DateTime $accounting_date Return transactions that were processed by the institution on exactly this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__gt Return transactions that were processed by the institution after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__gte Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or later. (optional)
     * @param  \DateTime $accounting_date__lt Return transactions that were processed by the institution before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__lte Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or earlier. (optional)
     * @param  \DateTime[] $accounting_date__range Return transactions that were processed by the institution in this date range (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  float $amount Return results only for this value. (optional)
     * @param  float $amount__gt Return results only for more than this amount. (optional)
     * @param  float $amount__gte Return results only for and more than this amount. (optional)
     * @param  float $amount__lt Return results only for less than this amount. (optional)
     * @param  float $amount__lte Return results only for this amount or less. (optional)
     * @param  float[] $amount__range Return results between this amount range. (optional)
     * @param  string $collected_at Return items that were retrieved from the institution on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__gt Return items that were retrieved from the institution after this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__gte Return items that were retrieved from the institution after or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__lt Return items that were retrieved from the institution before this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__lte Return items that were retrieved from the institution before or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string[] $collected_at__range Return items that were retrieved from the institution between two dates (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $currency Return results that hold finances or balances in only this three-letter currency code. (optional)
     * @param  string[] $currency__in Return results that have funds or balances in one of these three-letter currency codes. (optional)
     * @param  string[] $credit_card_data__bill_name__in Return transactions for one of these bill names. (optional)
     * @param  string $reference Returns transactions with this institution-assigned reference number. (optional)
     * @param  string[] $reference__in Returns transactions with these institution-assigned reference numbers. (optional)
     * @param  string $status Return transactions with this status. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. (optional)
     * @param  string[] $status__in Return transactions with these statuses. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. (optional)
     * @param  string $type Return transactions with this type. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. (optional)
     * @param  string[] $type__in Return transactions with this types. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. (optional)
     * @param  \DateTime $value_date Return results for exactly this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__gt Return results that occurred after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__gte Return results for this date (&#x60;YYYY-MM-DD&#x60;) or later. (optional)
     * @param  \DateTime $value_date__lt Return results for before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__lte Return results for this date (&#x60;YYYY-MM-DD&#x60;) or earlier. (optional)
     * @param  \DateTime[] $value_date__range Return results for this date (&#x60;YYYY-MM-DD&#x60;) range. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2007, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTransactionsWithHttpInfo($link, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $account = null, $account__in = null, $account__balance__available = null, $account__balance__available__lt = null, $account__balance__available__lte = null, $account__balance__available__gt = null, $account__balance__available__gte = null, $account__balance__available__range = null, $account__balance__current = null, $account__balance__current__gt = null, $account__balance__current__gte = null, $account__balance__current__lt = null, $account__balance__current__lte = null, $account__balance__current__range = null, $account_type = null, $account_type__in = null, $accounting_date = null, $accounting_date__gt = null, $accounting_date__gte = null, $accounting_date__lt = null, $accounting_date__lte = null, $accounting_date__range = null, $amount = null, $amount__gt = null, $amount__gte = null, $amount__lt = null, $amount__lte = null, $amount__range = null, $collected_at = null, $collected_at__gt = null, $collected_at__gte = null, $collected_at__lt = null, $collected_at__lte = null, $collected_at__range = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $currency = null, $currency__in = null, $credit_card_data__bill_name__in = null, $reference = null, $reference__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $value_date = null, $value_date__gt = null, $value_date__gte = null, $value_date__lt = null, $value_date__lte = null, $value_date__range = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2007';
        $request = $this->listTransactionsRequest($link, $page_size, $page, $omit, $fields, $link__in, $account, $account__in, $account__balance__available, $account__balance__available__lt, $account__balance__available__lte, $account__balance__available__gt, $account__balance__available__gte, $account__balance__available__range, $account__balance__current, $account__balance__current__gt, $account__balance__current__gte, $account__balance__current__lt, $account__balance__current__lte, $account__balance__current__range, $account_type, $account_type__in, $accounting_date, $accounting_date__gt, $accounting_date__gte, $accounting_date__lt, $accounting_date__lte, $accounting_date__range, $amount, $amount__gt, $amount__gte, $amount__lt, $amount__lte, $amount__range, $collected_at, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $credit_card_data__bill_name__in, $reference, $reference__in, $status, $status__in, $type, $type__in, $value_date, $value_date__gt, $value_date__gte, $value_date__lt, $value_date__lte, $value_date__range);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Swagger\Client\Model\InlineResponse2007',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'null[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listTransactionsAsync
     *
     * List transactions
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by. (required)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $account The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. (optional)
     * @param  string[] $account__in Return results only for these &#x60;account.id&#x60;s. (optional)
     * @param  float $account__balance__available Return transactions that have a &#x60;account.balance.available&#x60; matching exactly this value. (optional)
     * @param  float $account__balance__available__lt Return transactions that have a &#x60;account.balance.available&#x60; less than this value. (optional)
     * @param  float $account__balance__available__lte Return transactions that have a &#x60;account.balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $account__balance__available__gt Return transactions that have a &#x60;account.balance.available&#x60; more than this value. (optional)
     * @param  float $account__balance__available__gte Return transactions that have a &#x60;account.balance.available&#x60; more than or equal to this value. (optional)
     * @param  float[] $account__balance__available__range Return transactions that have a &#x60;account.balance.available&#x60; within a range of two values. (optional)
     * @param  float $account__balance__current Return transactions that have a &#x60;account.balance.current&#x60; matching exactly this value. (optional)
     * @param  float $account__balance__current__gt Return transactions that have a &#x60;account.balance.current&#x60; greater than this value. (optional)
     * @param  float $account__balance__current__gte Return transactions that have a &#x60;account.balance.current&#x60; greater than or equal to this value. (optional)
     * @param  float $account__balance__current__lt Return transactions that have a &#x60;account.balance.current&#x60; less than this value. (optional)
     * @param  float $account__balance__current__lte Return transactions that have a &#x60;account.balance.current&#x60; less than or equal to this value. (optional)
     * @param  float[] $account__balance__current__range Return transactions that have a &#x60;account.balance.current&#x60; within a range of two values. (optional)
     * @param  string $account_type Return information only for transactions matching this account type, as designated by the institution. (optional)
     * @param  string[] $account_type__in Return information only for transactions matching these account types, as designated by the institution. (optional)
     * @param  \DateTime $accounting_date Return transactions that were processed by the institution on exactly this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__gt Return transactions that were processed by the institution after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__gte Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or later. (optional)
     * @param  \DateTime $accounting_date__lt Return transactions that were processed by the institution before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__lte Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or earlier. (optional)
     * @param  \DateTime[] $accounting_date__range Return transactions that were processed by the institution in this date range (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  float $amount Return results only for this value. (optional)
     * @param  float $amount__gt Return results only for more than this amount. (optional)
     * @param  float $amount__gte Return results only for and more than this amount. (optional)
     * @param  float $amount__lt Return results only for less than this amount. (optional)
     * @param  float $amount__lte Return results only for this amount or less. (optional)
     * @param  float[] $amount__range Return results between this amount range. (optional)
     * @param  string $collected_at Return items that were retrieved from the institution on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__gt Return items that were retrieved from the institution after this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__gte Return items that were retrieved from the institution after or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__lt Return items that were retrieved from the institution before this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__lte Return items that were retrieved from the institution before or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string[] $collected_at__range Return items that were retrieved from the institution between two dates (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $currency Return results that hold finances or balances in only this three-letter currency code. (optional)
     * @param  string[] $currency__in Return results that have funds or balances in one of these three-letter currency codes. (optional)
     * @param  string[] $credit_card_data__bill_name__in Return transactions for one of these bill names. (optional)
     * @param  string $reference Returns transactions with this institution-assigned reference number. (optional)
     * @param  string[] $reference__in Returns transactions with these institution-assigned reference numbers. (optional)
     * @param  string $status Return transactions with this status. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. (optional)
     * @param  string[] $status__in Return transactions with these statuses. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. (optional)
     * @param  string $type Return transactions with this type. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. (optional)
     * @param  string[] $type__in Return transactions with this types. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. (optional)
     * @param  \DateTime $value_date Return results for exactly this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__gt Return results that occurred after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__gte Return results for this date (&#x60;YYYY-MM-DD&#x60;) or later. (optional)
     * @param  \DateTime $value_date__lt Return results for before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__lte Return results for this date (&#x60;YYYY-MM-DD&#x60;) or earlier. (optional)
     * @param  \DateTime[] $value_date__range Return results for this date (&#x60;YYYY-MM-DD&#x60;) range. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTransactionsAsync($link, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $account = null, $account__in = null, $account__balance__available = null, $account__balance__available__lt = null, $account__balance__available__lte = null, $account__balance__available__gt = null, $account__balance__available__gte = null, $account__balance__available__range = null, $account__balance__current = null, $account__balance__current__gt = null, $account__balance__current__gte = null, $account__balance__current__lt = null, $account__balance__current__lte = null, $account__balance__current__range = null, $account_type = null, $account_type__in = null, $accounting_date = null, $accounting_date__gt = null, $accounting_date__gte = null, $accounting_date__lt = null, $accounting_date__lte = null, $accounting_date__range = null, $amount = null, $amount__gt = null, $amount__gte = null, $amount__lt = null, $amount__lte = null, $amount__range = null, $collected_at = null, $collected_at__gt = null, $collected_at__gte = null, $collected_at__lt = null, $collected_at__lte = null, $collected_at__range = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $currency = null, $currency__in = null, $credit_card_data__bill_name__in = null, $reference = null, $reference__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $value_date = null, $value_date__gt = null, $value_date__gte = null, $value_date__lt = null, $value_date__lte = null, $value_date__range = null)
    {
        return $this->listTransactionsAsyncWithHttpInfo($link, $page_size, $page, $omit, $fields, $link__in, $account, $account__in, $account__balance__available, $account__balance__available__lt, $account__balance__available__lte, $account__balance__available__gt, $account__balance__available__gte, $account__balance__available__range, $account__balance__current, $account__balance__current__gt, $account__balance__current__gte, $account__balance__current__lt, $account__balance__current__lte, $account__balance__current__range, $account_type, $account_type__in, $accounting_date, $accounting_date__gt, $accounting_date__gte, $accounting_date__lt, $accounting_date__lte, $accounting_date__range, $amount, $amount__gt, $amount__gte, $amount__lt, $amount__lte, $amount__range, $collected_at, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $credit_card_data__bill_name__in, $reference, $reference__in, $status, $status__in, $type, $type__in, $value_date, $value_date__gt, $value_date__gte, $value_date__lt, $value_date__lte, $value_date__range)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTransactionsAsyncWithHttpInfo
     *
     * List transactions
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by. (required)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $account The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. (optional)
     * @param  string[] $account__in Return results only for these &#x60;account.id&#x60;s. (optional)
     * @param  float $account__balance__available Return transactions that have a &#x60;account.balance.available&#x60; matching exactly this value. (optional)
     * @param  float $account__balance__available__lt Return transactions that have a &#x60;account.balance.available&#x60; less than this value. (optional)
     * @param  float $account__balance__available__lte Return transactions that have a &#x60;account.balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $account__balance__available__gt Return transactions that have a &#x60;account.balance.available&#x60; more than this value. (optional)
     * @param  float $account__balance__available__gte Return transactions that have a &#x60;account.balance.available&#x60; more than or equal to this value. (optional)
     * @param  float[] $account__balance__available__range Return transactions that have a &#x60;account.balance.available&#x60; within a range of two values. (optional)
     * @param  float $account__balance__current Return transactions that have a &#x60;account.balance.current&#x60; matching exactly this value. (optional)
     * @param  float $account__balance__current__gt Return transactions that have a &#x60;account.balance.current&#x60; greater than this value. (optional)
     * @param  float $account__balance__current__gte Return transactions that have a &#x60;account.balance.current&#x60; greater than or equal to this value. (optional)
     * @param  float $account__balance__current__lt Return transactions that have a &#x60;account.balance.current&#x60; less than this value. (optional)
     * @param  float $account__balance__current__lte Return transactions that have a &#x60;account.balance.current&#x60; less than or equal to this value. (optional)
     * @param  float[] $account__balance__current__range Return transactions that have a &#x60;account.balance.current&#x60; within a range of two values. (optional)
     * @param  string $account_type Return information only for transactions matching this account type, as designated by the institution. (optional)
     * @param  string[] $account_type__in Return information only for transactions matching these account types, as designated by the institution. (optional)
     * @param  \DateTime $accounting_date Return transactions that were processed by the institution on exactly this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__gt Return transactions that were processed by the institution after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__gte Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or later. (optional)
     * @param  \DateTime $accounting_date__lt Return transactions that were processed by the institution before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__lte Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or earlier. (optional)
     * @param  \DateTime[] $accounting_date__range Return transactions that were processed by the institution in this date range (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  float $amount Return results only for this value. (optional)
     * @param  float $amount__gt Return results only for more than this amount. (optional)
     * @param  float $amount__gte Return results only for and more than this amount. (optional)
     * @param  float $amount__lt Return results only for less than this amount. (optional)
     * @param  float $amount__lte Return results only for this amount or less. (optional)
     * @param  float[] $amount__range Return results between this amount range. (optional)
     * @param  string $collected_at Return items that were retrieved from the institution on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__gt Return items that were retrieved from the institution after this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__gte Return items that were retrieved from the institution after or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__lt Return items that were retrieved from the institution before this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__lte Return items that were retrieved from the institution before or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string[] $collected_at__range Return items that were retrieved from the institution between two dates (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $currency Return results that hold finances or balances in only this three-letter currency code. (optional)
     * @param  string[] $currency__in Return results that have funds or balances in one of these three-letter currency codes. (optional)
     * @param  string[] $credit_card_data__bill_name__in Return transactions for one of these bill names. (optional)
     * @param  string $reference Returns transactions with this institution-assigned reference number. (optional)
     * @param  string[] $reference__in Returns transactions with these institution-assigned reference numbers. (optional)
     * @param  string $status Return transactions with this status. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. (optional)
     * @param  string[] $status__in Return transactions with these statuses. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. (optional)
     * @param  string $type Return transactions with this type. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. (optional)
     * @param  string[] $type__in Return transactions with this types. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. (optional)
     * @param  \DateTime $value_date Return results for exactly this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__gt Return results that occurred after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__gte Return results for this date (&#x60;YYYY-MM-DD&#x60;) or later. (optional)
     * @param  \DateTime $value_date__lt Return results for before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__lte Return results for this date (&#x60;YYYY-MM-DD&#x60;) or earlier. (optional)
     * @param  \DateTime[] $value_date__range Return results for this date (&#x60;YYYY-MM-DD&#x60;) range. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTransactionsAsyncWithHttpInfo($link, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $account = null, $account__in = null, $account__balance__available = null, $account__balance__available__lt = null, $account__balance__available__lte = null, $account__balance__available__gt = null, $account__balance__available__gte = null, $account__balance__available__range = null, $account__balance__current = null, $account__balance__current__gt = null, $account__balance__current__gte = null, $account__balance__current__lt = null, $account__balance__current__lte = null, $account__balance__current__range = null, $account_type = null, $account_type__in = null, $accounting_date = null, $accounting_date__gt = null, $accounting_date__gte = null, $accounting_date__lt = null, $accounting_date__lte = null, $accounting_date__range = null, $amount = null, $amount__gt = null, $amount__gte = null, $amount__lt = null, $amount__lte = null, $amount__range = null, $collected_at = null, $collected_at__gt = null, $collected_at__gte = null, $collected_at__lt = null, $collected_at__lte = null, $collected_at__range = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $currency = null, $currency__in = null, $credit_card_data__bill_name__in = null, $reference = null, $reference__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $value_date = null, $value_date__gt = null, $value_date__gte = null, $value_date__lt = null, $value_date__lte = null, $value_date__range = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2007';
        $request = $this->listTransactionsRequest($link, $page_size, $page, $omit, $fields, $link__in, $account, $account__in, $account__balance__available, $account__balance__available__lt, $account__balance__available__lte, $account__balance__available__gt, $account__balance__available__gte, $account__balance__available__range, $account__balance__current, $account__balance__current__gt, $account__balance__current__gte, $account__balance__current__lt, $account__balance__current__lte, $account__balance__current__range, $account_type, $account_type__in, $accounting_date, $accounting_date__gt, $accounting_date__gte, $accounting_date__lt, $accounting_date__lte, $accounting_date__range, $amount, $amount__gt, $amount__gte, $amount__lt, $amount__lte, $amount__range, $collected_at, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $credit_card_data__bill_name__in, $reference, $reference__in, $status, $status__in, $type, $type__in, $value_date, $value_date__gt, $value_date__gte, $value_date__lt, $value_date__lte, $value_date__range);

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
     * Create request for operation 'listTransactions'
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by. (required)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $account The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. (optional)
     * @param  string[] $account__in Return results only for these &#x60;account.id&#x60;s. (optional)
     * @param  float $account__balance__available Return transactions that have a &#x60;account.balance.available&#x60; matching exactly this value. (optional)
     * @param  float $account__balance__available__lt Return transactions that have a &#x60;account.balance.available&#x60; less than this value. (optional)
     * @param  float $account__balance__available__lte Return transactions that have a &#x60;account.balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $account__balance__available__gt Return transactions that have a &#x60;account.balance.available&#x60; more than this value. (optional)
     * @param  float $account__balance__available__gte Return transactions that have a &#x60;account.balance.available&#x60; more than or equal to this value. (optional)
     * @param  float[] $account__balance__available__range Return transactions that have a &#x60;account.balance.available&#x60; within a range of two values. (optional)
     * @param  float $account__balance__current Return transactions that have a &#x60;account.balance.current&#x60; matching exactly this value. (optional)
     * @param  float $account__balance__current__gt Return transactions that have a &#x60;account.balance.current&#x60; greater than this value. (optional)
     * @param  float $account__balance__current__gte Return transactions that have a &#x60;account.balance.current&#x60; greater than or equal to this value. (optional)
     * @param  float $account__balance__current__lt Return transactions that have a &#x60;account.balance.current&#x60; less than this value. (optional)
     * @param  float $account__balance__current__lte Return transactions that have a &#x60;account.balance.current&#x60; less than or equal to this value. (optional)
     * @param  float[] $account__balance__current__range Return transactions that have a &#x60;account.balance.current&#x60; within a range of two values. (optional)
     * @param  string $account_type Return information only for transactions matching this account type, as designated by the institution. (optional)
     * @param  string[] $account_type__in Return information only for transactions matching these account types, as designated by the institution. (optional)
     * @param  \DateTime $accounting_date Return transactions that were processed by the institution on exactly this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__gt Return transactions that were processed by the institution after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__gte Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or later. (optional)
     * @param  \DateTime $accounting_date__lt Return transactions that were processed by the institution before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $accounting_date__lte Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or earlier. (optional)
     * @param  \DateTime[] $accounting_date__range Return transactions that were processed by the institution in this date range (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  float $amount Return results only for this value. (optional)
     * @param  float $amount__gt Return results only for more than this amount. (optional)
     * @param  float $amount__gte Return results only for and more than this amount. (optional)
     * @param  float $amount__lt Return results only for less than this amount. (optional)
     * @param  float $amount__lte Return results only for this amount or less. (optional)
     * @param  float[] $amount__range Return results between this amount range. (optional)
     * @param  string $collected_at Return items that were retrieved from the institution on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__gt Return items that were retrieved from the institution after this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__gte Return items that were retrieved from the institution after or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__lt Return items that were retrieved from the institution before this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string $collected_at__lte Return items that were retrieved from the institution before or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  string[] $collected_at__range Return items that were retrieved from the institution between two dates (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $currency Return results that hold finances or balances in only this three-letter currency code. (optional)
     * @param  string[] $currency__in Return results that have funds or balances in one of these three-letter currency codes. (optional)
     * @param  string[] $credit_card_data__bill_name__in Return transactions for one of these bill names. (optional)
     * @param  string $reference Returns transactions with this institution-assigned reference number. (optional)
     * @param  string[] $reference__in Returns transactions with these institution-assigned reference numbers. (optional)
     * @param  string $status Return transactions with this status. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. (optional)
     * @param  string[] $status__in Return transactions with these statuses. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. (optional)
     * @param  string $type Return transactions with this type. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. (optional)
     * @param  string[] $type__in Return transactions with this types. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. (optional)
     * @param  \DateTime $value_date Return results for exactly this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__gt Return results that occurred after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__gte Return results for this date (&#x60;YYYY-MM-DD&#x60;) or later. (optional)
     * @param  \DateTime $value_date__lt Return results for before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $value_date__lte Return results for this date (&#x60;YYYY-MM-DD&#x60;) or earlier. (optional)
     * @param  \DateTime[] $value_date__range Return results for this date (&#x60;YYYY-MM-DD&#x60;) range. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listTransactionsRequest($link, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $account = null, $account__in = null, $account__balance__available = null, $account__balance__available__lt = null, $account__balance__available__lte = null, $account__balance__available__gt = null, $account__balance__available__gte = null, $account__balance__available__range = null, $account__balance__current = null, $account__balance__current__gt = null, $account__balance__current__gte = null, $account__balance__current__lt = null, $account__balance__current__lte = null, $account__balance__current__range = null, $account_type = null, $account_type__in = null, $accounting_date = null, $accounting_date__gt = null, $accounting_date__gte = null, $accounting_date__lt = null, $accounting_date__lte = null, $accounting_date__range = null, $amount = null, $amount__gt = null, $amount__gte = null, $amount__lt = null, $amount__lte = null, $amount__range = null, $collected_at = null, $collected_at__gt = null, $collected_at__gte = null, $collected_at__lt = null, $collected_at__lte = null, $collected_at__range = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $currency = null, $currency__in = null, $credit_card_data__bill_name__in = null, $reference = null, $reference__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $value_date = null, $value_date__gt = null, $value_date__gte = null, $value_date__lt = null, $value_date__lte = null, $value_date__range = null)
    {
        // verify the required parameter 'link' is set
        if ($link === null || (is_array($link) && count($link) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $link when calling listTransactions'
            );
        }

        $resourcePath = '/api/transactions/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($link !== null) {
            $queryParams['link'] = ObjectSerializer::toQueryValue($link, 'uuid');
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = ObjectSerializer::toQueryValue($page_size, 'int32');
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, 'int32');
        }
        // query params
        if ($omit !== null) {
            $queryParams['omit'] = ObjectSerializer::toQueryValue($omit, null);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields, null);
        }
        // query params
        if (is_array($link__in)) {
            $link__in = ObjectSerializer::serializeCollection($link__in, 'csv', true);
        }
        if ($link__in !== null) {
            $queryParams['link__in'] = ObjectSerializer::toQueryValue($link__in, 'uuid');
        }
        // query params
        if ($account !== null) {
            $queryParams['account'] = ObjectSerializer::toQueryValue($account, 'uuid');
        }
        // query params
        if (is_array($account__in)) {
            $account__in = ObjectSerializer::serializeCollection($account__in, 'csv', true);
        }
        if ($account__in !== null) {
            $queryParams['account__in'] = ObjectSerializer::toQueryValue($account__in, 'uuid');
        }
        // query params
        if ($account__balance__available !== null) {
            $queryParams['account__balance__available'] = ObjectSerializer::toQueryValue($account__balance__available, null);
        }
        // query params
        if ($account__balance__available__lt !== null) {
            $queryParams['account__balance__available__lt'] = ObjectSerializer::toQueryValue($account__balance__available__lt, null);
        }
        // query params
        if ($account__balance__available__lte !== null) {
            $queryParams['account__balance__available__lte'] = ObjectSerializer::toQueryValue($account__balance__available__lte, null);
        }
        // query params
        if ($account__balance__available__gt !== null) {
            $queryParams['account__balance__available__gt'] = ObjectSerializer::toQueryValue($account__balance__available__gt, null);
        }
        // query params
        if ($account__balance__available__gte !== null) {
            $queryParams['account__balance__available__gte'] = ObjectSerializer::toQueryValue($account__balance__available__gte, null);
        }
        // query params
        if (is_array($account__balance__available__range)) {
            $account__balance__available__range = ObjectSerializer::serializeCollection($account__balance__available__range, 'csv', true);
        }
        if ($account__balance__available__range !== null) {
            $queryParams['account__balance__available__range'] = ObjectSerializer::toQueryValue($account__balance__available__range, null);
        }
        // query params
        if ($account__balance__current !== null) {
            $queryParams['account__balance__current'] = ObjectSerializer::toQueryValue($account__balance__current, null);
        }
        // query params
        if ($account__balance__current__gt !== null) {
            $queryParams['account__balance__current__gt'] = ObjectSerializer::toQueryValue($account__balance__current__gt, null);
        }
        // query params
        if ($account__balance__current__gte !== null) {
            $queryParams['account__balance__current__gte'] = ObjectSerializer::toQueryValue($account__balance__current__gte, null);
        }
        // query params
        if ($account__balance__current__lt !== null) {
            $queryParams['account__balance__current__lt'] = ObjectSerializer::toQueryValue($account__balance__current__lt, null);
        }
        // query params
        if ($account__balance__current__lte !== null) {
            $queryParams['account__balance__current__lte'] = ObjectSerializer::toQueryValue($account__balance__current__lte, null);
        }
        // query params
        if (is_array($account__balance__current__range)) {
            $account__balance__current__range = ObjectSerializer::serializeCollection($account__balance__current__range, 'csv', true);
        }
        if ($account__balance__current__range !== null) {
            $queryParams['account__balance__current__range'] = ObjectSerializer::toQueryValue($account__balance__current__range, null);
        }
        // query params
        if ($account_type !== null) {
            $queryParams['account_type'] = ObjectSerializer::toQueryValue($account_type, null);
        }
        // query params
        if (is_array($account_type__in)) {
            $account_type__in = ObjectSerializer::serializeCollection($account_type__in, 'csv', true);
        }
        if ($account_type__in !== null) {
            $queryParams['account_type__in'] = ObjectSerializer::toQueryValue($account_type__in, null);
        }
        // query params
        if ($accounting_date !== null) {
            $queryParams['accounting_date'] = ObjectSerializer::toQueryValue($accounting_date, 'date');
        }
        // query params
        if ($accounting_date__gt !== null) {
            $queryParams['accounting_date__gt'] = ObjectSerializer::toQueryValue($accounting_date__gt, 'date');
        }
        // query params
        if ($accounting_date__gte !== null) {
            $queryParams['accounting_date__gte'] = ObjectSerializer::toQueryValue($accounting_date__gte, 'date');
        }
        // query params
        if ($accounting_date__lt !== null) {
            $queryParams['accounting_date__lt'] = ObjectSerializer::toQueryValue($accounting_date__lt, 'date');
        }
        // query params
        if ($accounting_date__lte !== null) {
            $queryParams['accounting_date__lte'] = ObjectSerializer::toQueryValue($accounting_date__lte, 'date');
        }
        // query params
        if (is_array($accounting_date__range)) {
            $accounting_date__range = ObjectSerializer::serializeCollection($accounting_date__range, 'csv', true);
        }
        if ($accounting_date__range !== null) {
            $queryParams['accounting_date__range'] = ObjectSerializer::toQueryValue($accounting_date__range, 'date');
        }
        // query params
        if ($amount !== null) {
            $queryParams['amount'] = ObjectSerializer::toQueryValue($amount, null);
        }
        // query params
        if ($amount__gt !== null) {
            $queryParams['amount__gt'] = ObjectSerializer::toQueryValue($amount__gt, null);
        }
        // query params
        if ($amount__gte !== null) {
            $queryParams['amount__gte'] = ObjectSerializer::toQueryValue($amount__gte, null);
        }
        // query params
        if ($amount__lt !== null) {
            $queryParams['amount__lt'] = ObjectSerializer::toQueryValue($amount__lt, null);
        }
        // query params
        if ($amount__lte !== null) {
            $queryParams['amount__lte'] = ObjectSerializer::toQueryValue($amount__lte, null);
        }
        // query params
        if (is_array($amount__range)) {
            $amount__range = ObjectSerializer::serializeCollection($amount__range, 'csv', true);
        }
        if ($amount__range !== null) {
            $queryParams['amount__range'] = ObjectSerializer::toQueryValue($amount__range, null);
        }
        // query params
        if ($collected_at !== null) {
            $queryParams['collected_at'] = ObjectSerializer::toQueryValue($collected_at, null);
        }
        // query params
        if ($collected_at__gt !== null) {
            $queryParams['collected_at__gt'] = ObjectSerializer::toQueryValue($collected_at__gt, null);
        }
        // query params
        if ($collected_at__gte !== null) {
            $queryParams['collected_at__gte'] = ObjectSerializer::toQueryValue($collected_at__gte, null);
        }
        // query params
        if ($collected_at__lt !== null) {
            $queryParams['collected_at__lt'] = ObjectSerializer::toQueryValue($collected_at__lt, null);
        }
        // query params
        if ($collected_at__lte !== null) {
            $queryParams['collected_at__lte'] = ObjectSerializer::toQueryValue($collected_at__lte, null);
        }
        // query params
        if (is_array($collected_at__range)) {
            $collected_at__range = ObjectSerializer::serializeCollection($collected_at__range, 'csv', true);
        }
        if ($collected_at__range !== null) {
            $queryParams['collected_at__range'] = ObjectSerializer::toQueryValue($collected_at__range, null);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['created_at'] = ObjectSerializer::toQueryValue($created_at, 'date');
        }
        // query params
        if ($created_at__gt !== null) {
            $queryParams['created_at__gt'] = ObjectSerializer::toQueryValue($created_at__gt, 'date');
        }
        // query params
        if ($created_at__gte !== null) {
            $queryParams['created_at__gte'] = ObjectSerializer::toQueryValue($created_at__gte, 'date');
        }
        // query params
        if ($created_at__lt !== null) {
            $queryParams['created_at__lt'] = ObjectSerializer::toQueryValue($created_at__lt, 'date');
        }
        // query params
        if ($created_at__lte !== null) {
            $queryParams['created_at__lte'] = ObjectSerializer::toQueryValue($created_at__lte, 'date');
        }
        // query params
        if (is_array($created_at__range)) {
            $created_at__range = ObjectSerializer::serializeCollection($created_at__range, 'csv', true);
        }
        if ($created_at__range !== null) {
            $queryParams['created_at__range'] = ObjectSerializer::toQueryValue($created_at__range, 'date');
        }
        // query params
        if ($currency !== null) {
            $queryParams['currency'] = ObjectSerializer::toQueryValue($currency, null);
        }
        // query params
        if (is_array($currency__in)) {
            $currency__in = ObjectSerializer::serializeCollection($currency__in, 'csv', true);
        }
        if ($currency__in !== null) {
            $queryParams['currency__in'] = ObjectSerializer::toQueryValue($currency__in, null);
        }
        // query params
        if (is_array($credit_card_data__bill_name__in)) {
            $credit_card_data__bill_name__in = ObjectSerializer::serializeCollection($credit_card_data__bill_name__in, 'csv', true);
        }
        if ($credit_card_data__bill_name__in !== null) {
            $queryParams['credit_card_data__bill_name__in'] = ObjectSerializer::toQueryValue($credit_card_data__bill_name__in, null);
        }
        // query params
        if ($reference !== null) {
            $queryParams['reference'] = ObjectSerializer::toQueryValue($reference, null);
        }
        // query params
        if (is_array($reference__in)) {
            $reference__in = ObjectSerializer::serializeCollection($reference__in, 'csv', true);
        }
        if ($reference__in !== null) {
            $queryParams['reference__in'] = ObjectSerializer::toQueryValue($reference__in, null);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status, null);
        }
        // query params
        if (is_array($status__in)) {
            $status__in = ObjectSerializer::serializeCollection($status__in, 'csv', true);
        }
        if ($status__in !== null) {
            $queryParams['status__in'] = ObjectSerializer::toQueryValue($status__in, null);
        }
        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type, null);
        }
        // query params
        if (is_array($type__in)) {
            $type__in = ObjectSerializer::serializeCollection($type__in, 'csv', true);
        }
        if ($type__in !== null) {
            $queryParams['type__in'] = ObjectSerializer::toQueryValue($type__in, null);
        }
        // query params
        if ($value_date !== null) {
            $queryParams['value_date'] = ObjectSerializer::toQueryValue($value_date, 'date');
        }
        // query params
        if ($value_date__gt !== null) {
            $queryParams['value_date__gt'] = ObjectSerializer::toQueryValue($value_date__gt, 'date');
        }
        // query params
        if ($value_date__gte !== null) {
            $queryParams['value_date__gte'] = ObjectSerializer::toQueryValue($value_date__gte, 'date');
        }
        // query params
        if ($value_date__lt !== null) {
            $queryParams['value_date__lt'] = ObjectSerializer::toQueryValue($value_date__lt, 'date');
        }
        // query params
        if ($value_date__lte !== null) {
            $queryParams['value_date__lte'] = ObjectSerializer::toQueryValue($value_date__lte, 'date');
        }
        // query params
        if (is_array($value_date__range)) {
            $value_date__range = ObjectSerializer::serializeCollection($value_date__range, 'csv', true);
        }
        if ($value_date__range !== null) {
            $queryParams['value_date__range'] = ObjectSerializer::toQueryValue($value_date__range, 'date');
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchTransactions
     *
     * Complete a transactions request
     *
     * @param  \Swagger\Client\Model\ApiTransactionsBody1 $body body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return null[]
     */
    public function patchTransactions($body, $omit = null, $fields = null)
    {
        list($response) = $this->patchTransactionsWithHttpInfo($body, $omit, $fields);
        return $response;
    }

    /**
     * Operation patchTransactionsWithHttpInfo
     *
     * Complete a transactions request
     *
     * @param  \Swagger\Client\Model\ApiTransactionsBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null[], HTTP status code, HTTP response headers (array of strings)
     */
    public function patchTransactionsWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = 'null[]';
        $request = $this->patchTransactionsRequest($body, $omit, $fields);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        'null[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'null[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'null[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'null[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 408:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RequestTimeout[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse428[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\UnexpectedError[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchTransactionsAsync
     *
     * Complete a transactions request
     *
     * @param  \Swagger\Client\Model\ApiTransactionsBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchTransactionsAsync($body, $omit = null, $fields = null)
    {
        return $this->patchTransactionsAsyncWithHttpInfo($body, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchTransactionsAsyncWithHttpInfo
     *
     * Complete a transactions request
     *
     * @param  \Swagger\Client\Model\ApiTransactionsBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchTransactionsAsyncWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = 'null[]';
        $request = $this->patchTransactionsRequest($body, $omit, $fields);

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
     * Create request for operation 'patchTransactions'
     *
     * @param  \Swagger\Client\Model\ApiTransactionsBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchTransactionsRequest($body, $omit = null, $fields = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling patchTransactions'
            );
        }

        $resourcePath = '/api/transactions/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($omit !== null) {
            $queryParams['omit'] = ObjectSerializer::toQueryValue($omit, null);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields, null);
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation retrieveTransactions
     *
     * Retrieve transactions for a link
     *
     * @param  \Swagger\Client\Model\ApiTransactionsBody $body body (required)
     * @param  string $x_belvo_request_mode Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return null[]
     */
    public function retrieveTransactions($body, $x_belvo_request_mode = null, $omit = null, $fields = null)
    {
        list($response) = $this->retrieveTransactionsWithHttpInfo($body, $x_belvo_request_mode, $omit, $fields);
        return $response;
    }

    /**
     * Operation retrieveTransactionsWithHttpInfo
     *
     * Retrieve transactions for a link
     *
     * @param  \Swagger\Client\Model\ApiTransactionsBody $body (required)
     * @param  string $x_belvo_request_mode Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveTransactionsWithHttpInfo($body, $x_belvo_request_mode = null, $omit = null, $fields = null)
    {
        $returnType = 'null[]';
        $request = $this->retrieveTransactionsRequest($body, $x_belvo_request_mode, $omit, $fields);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        'null[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'null[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse202',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'null[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'null[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 408:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RequestTimeout[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 428:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse428[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\UnexpectedError[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveTransactionsAsync
     *
     * Retrieve transactions for a link
     *
     * @param  \Swagger\Client\Model\ApiTransactionsBody $body (required)
     * @param  string $x_belvo_request_mode Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveTransactionsAsync($body, $x_belvo_request_mode = null, $omit = null, $fields = null)
    {
        return $this->retrieveTransactionsAsyncWithHttpInfo($body, $x_belvo_request_mode, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveTransactionsAsyncWithHttpInfo
     *
     * Retrieve transactions for a link
     *
     * @param  \Swagger\Client\Model\ApiTransactionsBody $body (required)
     * @param  string $x_belvo_request_mode Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveTransactionsAsyncWithHttpInfo($body, $x_belvo_request_mode = null, $omit = null, $fields = null)
    {
        $returnType = 'null[]';
        $request = $this->retrieveTransactionsRequest($body, $x_belvo_request_mode, $omit, $fields);

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
     * Create request for operation 'retrieveTransactions'
     *
     * @param  \Swagger\Client\Model\ApiTransactionsBody $body (required)
     * @param  string $x_belvo_request_mode Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveTransactionsRequest($body, $x_belvo_request_mode = null, $omit = null, $fields = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling retrieveTransactions'
            );
        }

        $resourcePath = '/api/transactions/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($omit !== null) {
            $queryParams['omit'] = ObjectSerializer::toQueryValue($omit, null);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields, null);
        }
        // header params
        if ($x_belvo_request_mode !== null) {
            $headerParams['X-Belvo-Request-Mode'] = ObjectSerializer::toHeaderValue($x_belvo_request_mode);
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
