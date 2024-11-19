<?php
/**
 * TaxReturnsApi
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
 * TaxReturnsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxReturnsApi
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
     * Operation destroyTaxReturn
     *
     * Delete a tax return
     *
     * @param  string $id The ID of the tax return you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function destroyTaxReturn($id)
    {
        $this->destroyTaxReturnWithHttpInfo($id);
    }

    /**
     * Operation destroyTaxReturnWithHttpInfo
     *
     * Delete a tax return
     *
     * @param  string $id The ID of the tax return you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function destroyTaxReturnWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyTaxReturnRequest($id);

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
     * Operation destroyTaxReturnAsync
     *
     * Delete a tax return
     *
     * @param  string $id The ID of the tax return you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyTaxReturnAsync($id)
    {
        return $this->destroyTaxReturnAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation destroyTaxReturnAsyncWithHttpInfo
     *
     * Delete a tax return
     *
     * @param  string $id The ID of the tax return you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyTaxReturnAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyTaxReturnRequest($id);

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
     * Create request for operation 'destroyTaxReturn'
     *
     * @param  string $id The ID of the tax return you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function destroyTaxReturnRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling destroyTaxReturn'
            );
        }

        $resourcePath = '/api/tax-returns/{id}/';
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
     * Operation detailTaxReturn
     *
     * Get a tax return's details
     *
     * @param  string $id The &#x60;tax-return.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20043
     */
    public function detailTaxReturn($id, $omit = null, $fields = null)
    {
        list($response) = $this->detailTaxReturnWithHttpInfo($id, $omit, $fields);
        return $response;
    }

    /**
     * Operation detailTaxReturnWithHttpInfo
     *
     * Get a tax return's details
     *
     * @param  string $id The &#x60;tax-return.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20043, HTTP status code, HTTP response headers (array of strings)
     */
    public function detailTaxReturnWithHttpInfo($id, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20043';
        $request = $this->detailTaxReturnRequest($id, $omit, $fields);

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
                        '\Swagger\Client\Model\InlineResponse20043',
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
     * Operation detailTaxReturnAsync
     *
     * Get a tax return's details
     *
     * @param  string $id The &#x60;tax-return.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailTaxReturnAsync($id, $omit = null, $fields = null)
    {
        return $this->detailTaxReturnAsyncWithHttpInfo($id, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation detailTaxReturnAsyncWithHttpInfo
     *
     * Get a tax return's details
     *
     * @param  string $id The &#x60;tax-return.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailTaxReturnAsyncWithHttpInfo($id, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20043';
        $request = $this->detailTaxReturnRequest($id, $omit, $fields);

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
     * Create request for operation 'detailTaxReturn'
     *
     * @param  string $id The &#x60;tax-return.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function detailTaxReturnRequest($id, $omit = null, $fields = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling detailTaxReturn'
            );
        }

        $resourcePath = '/api/tax-returns/{id}/';
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
     * Operation listTaxReturns
     *
     * List tax returns
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $ejercicio Return tax returns for exactly this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__lt Return tax returns for before this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__lte Return tax returns for this year and earlier (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__gt Return tax returns for after this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__gte Return tax returns for this year or later (&#x60;YYYY&#x60;). (optional)
     * @param  string[] $ejercicio__range Return tax returns for this range of years (&#x60;YYYY&#x60;). (optional)
     * @param  string $tipo_declaracion Return tax returns with this declaration type. (optional)
     * @param  string[] $tipo_declaracion__in Return tax returns with these declaration types. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20042
     */
    public function listTaxReturns($link = null, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $id = null, $id__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $ejercicio = null, $ejercicio__lt = null, $ejercicio__lte = null, $ejercicio__gt = null, $ejercicio__gte = null, $ejercicio__range = null, $tipo_declaracion = null, $tipo_declaracion__in = null)
    {
        list($response) = $this->listTaxReturnsWithHttpInfo($link, $page_size, $page, $omit, $fields, $link__in, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $ejercicio, $ejercicio__lt, $ejercicio__lte, $ejercicio__gt, $ejercicio__gte, $ejercicio__range, $tipo_declaracion, $tipo_declaracion__in);
        return $response;
    }

    /**
     * Operation listTaxReturnsWithHttpInfo
     *
     * List tax returns
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $ejercicio Return tax returns for exactly this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__lt Return tax returns for before this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__lte Return tax returns for this year and earlier (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__gt Return tax returns for after this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__gte Return tax returns for this year or later (&#x60;YYYY&#x60;). (optional)
     * @param  string[] $ejercicio__range Return tax returns for this range of years (&#x60;YYYY&#x60;). (optional)
     * @param  string $tipo_declaracion Return tax returns with this declaration type. (optional)
     * @param  string[] $tipo_declaracion__in Return tax returns with these declaration types. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20042, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTaxReturnsWithHttpInfo($link = null, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $id = null, $id__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $ejercicio = null, $ejercicio__lt = null, $ejercicio__lte = null, $ejercicio__gt = null, $ejercicio__gte = null, $ejercicio__range = null, $tipo_declaracion = null, $tipo_declaracion__in = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20042';
        $request = $this->listTaxReturnsRequest($link, $page_size, $page, $omit, $fields, $link__in, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $ejercicio, $ejercicio__lt, $ejercicio__lte, $ejercicio__gt, $ejercicio__gte, $ejercicio__range, $tipo_declaracion, $tipo_declaracion__in);

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
                        '\Swagger\Client\Model\InlineResponse20042',
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
     * Operation listTaxReturnsAsync
     *
     * List tax returns
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $ejercicio Return tax returns for exactly this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__lt Return tax returns for before this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__lte Return tax returns for this year and earlier (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__gt Return tax returns for after this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__gte Return tax returns for this year or later (&#x60;YYYY&#x60;). (optional)
     * @param  string[] $ejercicio__range Return tax returns for this range of years (&#x60;YYYY&#x60;). (optional)
     * @param  string $tipo_declaracion Return tax returns with this declaration type. (optional)
     * @param  string[] $tipo_declaracion__in Return tax returns with these declaration types. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTaxReturnsAsync($link = null, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $id = null, $id__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $ejercicio = null, $ejercicio__lt = null, $ejercicio__lte = null, $ejercicio__gt = null, $ejercicio__gte = null, $ejercicio__range = null, $tipo_declaracion = null, $tipo_declaracion__in = null)
    {
        return $this->listTaxReturnsAsyncWithHttpInfo($link, $page_size, $page, $omit, $fields, $link__in, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $ejercicio, $ejercicio__lt, $ejercicio__lte, $ejercicio__gt, $ejercicio__gte, $ejercicio__range, $tipo_declaracion, $tipo_declaracion__in)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTaxReturnsAsyncWithHttpInfo
     *
     * List tax returns
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $ejercicio Return tax returns for exactly this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__lt Return tax returns for before this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__lte Return tax returns for this year and earlier (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__gt Return tax returns for after this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__gte Return tax returns for this year or later (&#x60;YYYY&#x60;). (optional)
     * @param  string[] $ejercicio__range Return tax returns for this range of years (&#x60;YYYY&#x60;). (optional)
     * @param  string $tipo_declaracion Return tax returns with this declaration type. (optional)
     * @param  string[] $tipo_declaracion__in Return tax returns with these declaration types. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTaxReturnsAsyncWithHttpInfo($link = null, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $id = null, $id__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $ejercicio = null, $ejercicio__lt = null, $ejercicio__lte = null, $ejercicio__gt = null, $ejercicio__gte = null, $ejercicio__range = null, $tipo_declaracion = null, $tipo_declaracion__in = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20042';
        $request = $this->listTaxReturnsRequest($link, $page_size, $page, $omit, $fields, $link__in, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $ejercicio, $ejercicio__lt, $ejercicio__lte, $ejercicio__gt, $ejercicio__gte, $ejercicio__range, $tipo_declaracion, $tipo_declaracion__in);

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
     * Create request for operation 'listTaxReturns'
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $ejercicio Return tax returns for exactly this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__lt Return tax returns for before this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__lte Return tax returns for this year and earlier (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__gt Return tax returns for after this year (&#x60;YYYY&#x60;). (optional)
     * @param  string $ejercicio__gte Return tax returns for this year or later (&#x60;YYYY&#x60;). (optional)
     * @param  string[] $ejercicio__range Return tax returns for this range of years (&#x60;YYYY&#x60;). (optional)
     * @param  string $tipo_declaracion Return tax returns with this declaration type. (optional)
     * @param  string[] $tipo_declaracion__in Return tax returns with these declaration types. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listTaxReturnsRequest($link = null, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $id = null, $id__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $ejercicio = null, $ejercicio__lt = null, $ejercicio__lte = null, $ejercicio__gt = null, $ejercicio__gte = null, $ejercicio__range = null, $tipo_declaracion = null, $tipo_declaracion__in = null)
    {

        $resourcePath = '/api/tax-returns/';
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
        if ($ejercicio !== null) {
            $queryParams['ejercicio'] = ObjectSerializer::toQueryValue($ejercicio, null);
        }
        // query params
        if ($ejercicio__lt !== null) {
            $queryParams['ejercicio__lt'] = ObjectSerializer::toQueryValue($ejercicio__lt, null);
        }
        // query params
        if ($ejercicio__lte !== null) {
            $queryParams['ejercicio__lte'] = ObjectSerializer::toQueryValue($ejercicio__lte, null);
        }
        // query params
        if ($ejercicio__gt !== null) {
            $queryParams['ejercicio__gt'] = ObjectSerializer::toQueryValue($ejercicio__gt, null);
        }
        // query params
        if ($ejercicio__gte !== null) {
            $queryParams['ejercicio__gte'] = ObjectSerializer::toQueryValue($ejercicio__gte, null);
        }
        // query params
        if (is_array($ejercicio__range)) {
            $ejercicio__range = ObjectSerializer::serializeCollection($ejercicio__range, 'csv', true);
        }
        if ($ejercicio__range !== null) {
            $queryParams['ejercicio__range'] = ObjectSerializer::toQueryValue($ejercicio__range, null);
        }
        // query params
        if ($tipo_declaracion !== null) {
            $queryParams['tipo_declaracion'] = ObjectSerializer::toQueryValue($tipo_declaracion, null);
        }
        // query params
        if (is_array($tipo_declaracion__in)) {
            $tipo_declaracion__in = ObjectSerializer::serializeCollection($tipo_declaracion__in, 'csv', true);
        }
        if ($tipo_declaracion__in !== null) {
            $queryParams['tipo_declaracion__in'] = ObjectSerializer::toQueryValue($tipo_declaracion__in, null);
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
     * Operation retrieveTaxReturns
     *
     * Retrieve tax returns for a link
     *
     * @param  \Swagger\Client\Model\ApiTaxreturnsBody $body body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return null[]
     */
    public function retrieveTaxReturns($body, $omit = null, $fields = null)
    {
        list($response) = $this->retrieveTaxReturnsWithHttpInfo($body, $omit, $fields);
        return $response;
    }

    /**
     * Operation retrieveTaxReturnsWithHttpInfo
     *
     * Retrieve tax returns for a link
     *
     * @param  \Swagger\Client\Model\ApiTaxreturnsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveTaxReturnsWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = 'null[]';
        $request = $this->retrieveTaxReturnsRequest($body, $omit, $fields);

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
     * Operation retrieveTaxReturnsAsync
     *
     * Retrieve tax returns for a link
     *
     * @param  \Swagger\Client\Model\ApiTaxreturnsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveTaxReturnsAsync($body, $omit = null, $fields = null)
    {
        return $this->retrieveTaxReturnsAsyncWithHttpInfo($body, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveTaxReturnsAsyncWithHttpInfo
     *
     * Retrieve tax returns for a link
     *
     * @param  \Swagger\Client\Model\ApiTaxreturnsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveTaxReturnsAsyncWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = 'null[]';
        $request = $this->retrieveTaxReturnsRequest($body, $omit, $fields);

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
     * Create request for operation 'retrieveTaxReturns'
     *
     * @param  \Swagger\Client\Model\ApiTaxreturnsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveTaxReturnsRequest($body, $omit = null, $fields = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling retrieveTaxReturns'
            );
        }

        $resourcePath = '/api/tax-returns/';
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
