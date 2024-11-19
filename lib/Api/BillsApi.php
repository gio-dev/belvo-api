<?php
/**
 * BillsApi
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
 * BillsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillsApi
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
     * Operation destroyBills
     *
     * Delete a bill
     *
     * @param  string $id The &#x60;bill.id&#x60; that you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function destroyBills($id)
    {
        $this->destroyBillsWithHttpInfo($id);
    }

    /**
     * Operation destroyBillsWithHttpInfo
     *
     * Delete a bill
     *
     * @param  string $id The &#x60;bill.id&#x60; that you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function destroyBillsWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyBillsRequest($id);

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
     * Operation destroyBillsAsync
     *
     * Delete a bill
     *
     * @param  string $id The &#x60;bill.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyBillsAsync($id)
    {
        return $this->destroyBillsAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation destroyBillsAsyncWithHttpInfo
     *
     * Delete a bill
     *
     * @param  string $id The &#x60;bill.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyBillsAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyBillsRequest($id);

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
     * Create request for operation 'destroyBills'
     *
     * @param  string $id The &#x60;bill.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function destroyBillsRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling destroyBills'
            );
        }

        $resourcePath = '/api/bills/{id}/';
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
     * Operation detailBills
     *
     * Get a bill's details
     *
     * @param  string $id The &#x60;bill.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20010
     */
    public function detailBills($id, $omit = null, $fields = null)
    {
        list($response) = $this->detailBillsWithHttpInfo($id, $omit, $fields);
        return $response;
    }

    /**
     * Operation detailBillsWithHttpInfo
     *
     * Get a bill's details
     *
     * @param  string $id The &#x60;bill.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20010, HTTP status code, HTTP response headers (array of strings)
     */
    public function detailBillsWithHttpInfo($id, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20010';
        $request = $this->detailBillsRequest($id, $omit, $fields);

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
                        '\Swagger\Client\Model\InlineResponse20010',
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
     * Operation detailBillsAsync
     *
     * Get a bill's details
     *
     * @param  string $id The &#x60;bill.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailBillsAsync($id, $omit = null, $fields = null)
    {
        return $this->detailBillsAsyncWithHttpInfo($id, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation detailBillsAsyncWithHttpInfo
     *
     * Get a bill's details
     *
     * @param  string $id The &#x60;bill.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailBillsAsyncWithHttpInfo($id, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20010';
        $request = $this->detailBillsRequest($id, $omit, $fields);

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
     * Create request for operation 'detailBills'
     *
     * @param  string $id The &#x60;bill.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function detailBillsRequest($id, $omit = null, $fields = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling detailBills'
            );
        }

        $resourcePath = '/api/bills/{id}/';
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
     * Operation listBills
     *
     * List bills
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by. (required)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $account The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. (optional)
     * @param  string[] $account__in Return results only for these &#x60;account.id&#x60;s. (optional)
     * @param  \DateTime $due_date Return items thathave a &#x60;due_date&#x60; on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__gt Return items that have a &#x60;due_date&#x60; after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__gte Return items that have a &#x60;due_date&#x60; on or after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__lt Return items that have a &#x60;due_date&#x60; before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__lte Return items that have a &#x60;due_date&#x60; before or on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime[] $due_date__range Return items that have a &#x60;due_date&#x60; between two dates (&#x60;YYYY-MM-DD&#x60;). (optional)
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
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\Bills
     */
    public function listBills($link, $page_size = '100', $page = null, $omit = null, $fields = null, $id = null, $id__in = null, $account = null, $account__in = null, $due_date = null, $due_date__gt = null, $due_date__gte = null, $due_date__lt = null, $due_date__lte = null, $due_date__range = null, $collected_at__gt = null, $collected_at__gte = null, $collected_at__lt = null, $collected_at__lte = null, $collected_at__range = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null)
    {
        list($response) = $this->listBillsWithHttpInfo($link, $page_size, $page, $omit, $fields, $id, $id__in, $account, $account__in, $due_date, $due_date__gt, $due_date__gte, $due_date__lt, $due_date__lte, $due_date__range, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range);
        return $response;
    }

    /**
     * Operation listBillsWithHttpInfo
     *
     * List bills
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by. (required)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $account The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. (optional)
     * @param  string[] $account__in Return results only for these &#x60;account.id&#x60;s. (optional)
     * @param  \DateTime $due_date Return items thathave a &#x60;due_date&#x60; on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__gt Return items that have a &#x60;due_date&#x60; after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__gte Return items that have a &#x60;due_date&#x60; on or after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__lt Return items that have a &#x60;due_date&#x60; before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__lte Return items that have a &#x60;due_date&#x60; before or on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime[] $due_date__range Return items that have a &#x60;due_date&#x60; between two dates (&#x60;YYYY-MM-DD&#x60;). (optional)
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
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\Bills, HTTP status code, HTTP response headers (array of strings)
     */
    public function listBillsWithHttpInfo($link, $page_size = '100', $page = null, $omit = null, $fields = null, $id = null, $id__in = null, $account = null, $account__in = null, $due_date = null, $due_date__gt = null, $due_date__gte = null, $due_date__lt = null, $due_date__lte = null, $due_date__range = null, $collected_at__gt = null, $collected_at__gte = null, $collected_at__lt = null, $collected_at__lte = null, $collected_at__range = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null)
    {
        $returnType = '\Swagger\Client\Model\Bills';
        $request = $this->listBillsRequest($link, $page_size, $page, $omit, $fields, $id, $id__in, $account, $account__in, $due_date, $due_date__gt, $due_date__gte, $due_date__lt, $due_date__lte, $due_date__range, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range);

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
                        '\Swagger\Client\Model\Bills',
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
     * Operation listBillsAsync
     *
     * List bills
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by. (required)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $account The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. (optional)
     * @param  string[] $account__in Return results only for these &#x60;account.id&#x60;s. (optional)
     * @param  \DateTime $due_date Return items thathave a &#x60;due_date&#x60; on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__gt Return items that have a &#x60;due_date&#x60; after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__gte Return items that have a &#x60;due_date&#x60; on or after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__lt Return items that have a &#x60;due_date&#x60; before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__lte Return items that have a &#x60;due_date&#x60; before or on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime[] $due_date__range Return items that have a &#x60;due_date&#x60; between two dates (&#x60;YYYY-MM-DD&#x60;). (optional)
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
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listBillsAsync($link, $page_size = '100', $page = null, $omit = null, $fields = null, $id = null, $id__in = null, $account = null, $account__in = null, $due_date = null, $due_date__gt = null, $due_date__gte = null, $due_date__lt = null, $due_date__lte = null, $due_date__range = null, $collected_at__gt = null, $collected_at__gte = null, $collected_at__lt = null, $collected_at__lte = null, $collected_at__range = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null)
    {
        return $this->listBillsAsyncWithHttpInfo($link, $page_size, $page, $omit, $fields, $id, $id__in, $account, $account__in, $due_date, $due_date__gt, $due_date__gte, $due_date__lt, $due_date__lte, $due_date__range, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listBillsAsyncWithHttpInfo
     *
     * List bills
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by. (required)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $account The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. (optional)
     * @param  string[] $account__in Return results only for these &#x60;account.id&#x60;s. (optional)
     * @param  \DateTime $due_date Return items thathave a &#x60;due_date&#x60; on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__gt Return items that have a &#x60;due_date&#x60; after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__gte Return items that have a &#x60;due_date&#x60; on or after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__lt Return items that have a &#x60;due_date&#x60; before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__lte Return items that have a &#x60;due_date&#x60; before or on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime[] $due_date__range Return items that have a &#x60;due_date&#x60; between two dates (&#x60;YYYY-MM-DD&#x60;). (optional)
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
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listBillsAsyncWithHttpInfo($link, $page_size = '100', $page = null, $omit = null, $fields = null, $id = null, $id__in = null, $account = null, $account__in = null, $due_date = null, $due_date__gt = null, $due_date__gte = null, $due_date__lt = null, $due_date__lte = null, $due_date__range = null, $collected_at__gt = null, $collected_at__gte = null, $collected_at__lt = null, $collected_at__lte = null, $collected_at__range = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null)
    {
        $returnType = '\Swagger\Client\Model\Bills';
        $request = $this->listBillsRequest($link, $page_size, $page, $omit, $fields, $id, $id__in, $account, $account__in, $due_date, $due_date__gt, $due_date__gte, $due_date__lt, $due_date__lte, $due_date__range, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range);

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
     * Create request for operation 'listBills'
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by. (required)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $account The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. (optional)
     * @param  string[] $account__in Return results only for these &#x60;account.id&#x60;s. (optional)
     * @param  \DateTime $due_date Return items thathave a &#x60;due_date&#x60; on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__gt Return items that have a &#x60;due_date&#x60; after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__gte Return items that have a &#x60;due_date&#x60; on or after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__lt Return items that have a &#x60;due_date&#x60; before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $due_date__lte Return items that have a &#x60;due_date&#x60; before or on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime[] $due_date__range Return items that have a &#x60;due_date&#x60; between two dates (&#x60;YYYY-MM-DD&#x60;). (optional)
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
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listBillsRequest($link, $page_size = '100', $page = null, $omit = null, $fields = null, $id = null, $id__in = null, $account = null, $account__in = null, $due_date = null, $due_date__gt = null, $due_date__gte = null, $due_date__lt = null, $due_date__lte = null, $due_date__range = null, $collected_at__gt = null, $collected_at__gte = null, $collected_at__lt = null, $collected_at__lte = null, $collected_at__range = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null)
    {
        // verify the required parameter 'link' is set
        if ($link === null || (is_array($link) && count($link) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $link when calling listBills'
            );
        }

        $resourcePath = '/api/bills/';
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
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id, 'uuid');
        }
        // query params
        if (is_array($id__in)) {
            $id__in = ObjectSerializer::serializeCollection($id__in, 'csv', true);
        }
        if ($id__in !== null) {
            $queryParams['id__in'] = ObjectSerializer::toQueryValue($id__in, 'uuid');
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
        if ($due_date !== null) {
            $queryParams['due_date'] = ObjectSerializer::toQueryValue($due_date, 'date');
        }
        // query params
        if ($due_date__gt !== null) {
            $queryParams['due_date__gt'] = ObjectSerializer::toQueryValue($due_date__gt, 'date');
        }
        // query params
        if ($due_date__gte !== null) {
            $queryParams['due_date__gte'] = ObjectSerializer::toQueryValue($due_date__gte, 'date');
        }
        // query params
        if ($due_date__lt !== null) {
            $queryParams['due_date__lt'] = ObjectSerializer::toQueryValue($due_date__lt, 'date');
        }
        // query params
        if ($due_date__lte !== null) {
            $queryParams['due_date__lte'] = ObjectSerializer::toQueryValue($due_date__lte, 'date');
        }
        // query params
        if (is_array($due_date__range)) {
            $due_date__range = ObjectSerializer::serializeCollection($due_date__range, 'csv', true);
        }
        if ($due_date__range !== null) {
            $queryParams['due_date__range'] = ObjectSerializer::toQueryValue($due_date__range, 'date');
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
     * Operation retrieveBills
     *
     * Retrieve bills for a link
     *
     * @param  \Swagger\Client\Model\ApiBillsBody $body body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2009[]
     */
    public function retrieveBills($body, $omit = null, $fields = null)
    {
        list($response) = $this->retrieveBillsWithHttpInfo($body, $omit, $fields);
        return $response;
    }

    /**
     * Operation retrieveBillsWithHttpInfo
     *
     * Retrieve bills for a link
     *
     * @param  \Swagger\Client\Model\ApiBillsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2009[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveBillsWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2009[]';
        $request = $this->retrieveBillsRequest($body, $omit, $fields);

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
                        '\Swagger\Client\Model\InlineResponse2009[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse2009[]',
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
     * Operation retrieveBillsAsync
     *
     * Retrieve bills for a link
     *
     * @param  \Swagger\Client\Model\ApiBillsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveBillsAsync($body, $omit = null, $fields = null)
    {
        return $this->retrieveBillsAsyncWithHttpInfo($body, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveBillsAsyncWithHttpInfo
     *
     * Retrieve bills for a link
     *
     * @param  \Swagger\Client\Model\ApiBillsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveBillsAsyncWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2009[]';
        $request = $this->retrieveBillsRequest($body, $omit, $fields);

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
     * Create request for operation 'retrieveBills'
     *
     * @param  \Swagger\Client\Model\ApiBillsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveBillsRequest($body, $omit = null, $fields = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling retrieveBills'
            );
        }

        $resourcePath = '/api/bills/';
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
