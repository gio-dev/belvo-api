<?php
/**
 * AccountsApi
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
 * AccountsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsApi
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
     * Operation destroyAccount
     *
     * Delete an account
     *
     * @param  string $id The &#x60;account.id&#x60; you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function destroyAccount($id)
    {
        $this->destroyAccountWithHttpInfo($id);
    }

    /**
     * Operation destroyAccountWithHttpInfo
     *
     * Delete an account
     *
     * @param  string $id The &#x60;account.id&#x60; you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function destroyAccountWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyAccountRequest($id);

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
     * Operation destroyAccountAsync
     *
     * Delete an account
     *
     * @param  string $id The &#x60;account.id&#x60; you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyAccountAsync($id)
    {
        return $this->destroyAccountAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation destroyAccountAsyncWithHttpInfo
     *
     * Delete an account
     *
     * @param  string $id The &#x60;account.id&#x60; you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyAccountAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyAccountRequest($id);

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
     * Create request for operation 'destroyAccount'
     *
     * @param  string $id The &#x60;account.id&#x60; you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function destroyAccountRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling destroyAccount'
            );
        }

        $resourcePath = '/api/accounts/{id}/';
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
     * Operation detailAccount
     *
     * Get an account's details
     *
     * @param  string $id The &#x60;account.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2006
     */
    public function detailAccount($id, $omit = null, $fields = null)
    {
        list($response) = $this->detailAccountWithHttpInfo($id, $omit, $fields);
        return $response;
    }

    /**
     * Operation detailAccountWithHttpInfo
     *
     * Get an account's details
     *
     * @param  string $id The &#x60;account.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function detailAccountWithHttpInfo($id, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2006';
        $request = $this->detailAccountRequest($id, $omit, $fields);

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
                        '\Swagger\Client\Model\InlineResponse2006',
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
     * Operation detailAccountAsync
     *
     * Get an account's details
     *
     * @param  string $id The &#x60;account.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailAccountAsync($id, $omit = null, $fields = null)
    {
        return $this->detailAccountAsyncWithHttpInfo($id, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation detailAccountAsyncWithHttpInfo
     *
     * Get an account's details
     *
     * @param  string $id The &#x60;account.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailAccountAsyncWithHttpInfo($id, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2006';
        $request = $this->detailAccountRequest($id, $omit, $fields);

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
     * Create request for operation 'detailAccount'
     *
     * @param  string $id The &#x60;account.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function detailAccountRequest($id, $omit = null, $fields = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling detailAccount'
            );
        }

        $resourcePath = '/api/accounts/{id}/';
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
     * Operation listAccounts
     *
     * List accounts
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  float $balance__available Return accounts that have a &#x60;balance.available&#x60; matching exactly this value. (optional)
     * @param  float $balance__available__lt Return accounts that have a &#x60;balance.available&#x60; less than this value. (optional)
     * @param  float $balance__available__lte Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $balance__available__gt Return accounts that have a &#x60;balance.available&#x60; greater than this value. (optional)
     * @param  float $balance__available__gte Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. (optional)
     * @param  float[] $balance__available__range Return accounts that have a &#x60;balance.available&#x60; within a range of two values. (optional)
     * @param  float $balance__current Return accounts that have a &#x60;balance.current&#x60; matching exactly this value. (optional)
     * @param  float $balance__current__lt Return accounts that have a &#x60;balance.current&#x60; less than this value. (optional)
     * @param  float $balance__current__lte Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $balance__current__gt Return accounts that have a &#x60;balance.current&#x60; greater than this value. (optional)
     * @param  float $balance__current__gte Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. (optional)
     * @param  float[] $balance__current__range Return accounts that have a &#x60;balance.current&#x60; within a range of two values. (optional)
     * @param  string $category Return accounts only for the given category (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). (optional)
     * @param  string[] $category__in Return accounts only for the given categories (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $currency Return results that hold finances or balances in only this three-letter currency code. (optional)
     * @param  string[] $currency__in Return results that have funds or balances in one of these three-letter currency codes. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $institution Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). (optional)
     * @param  string[] $institution__in Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). (optional)
     * @param  string $name Return accounts with exactly this internal (specified by the institution) name. (optional)
     * @param  string $name__icontains Return accounts partially matching this internal (specified by the institution) name. (optional)
     * @param  string $number Return information only for this account number (as specified by the institution). (optional)
     * @param  string[] $number__in Return information for these account numbers (as specified by the institution). (optional)
     * @param  string $public_identification_name Return information only for this type of account ID. For example, CLABE accounts. (optional)
     * @param  string $public_identification_value Return information only for this account ID. For example, the account number for a CLABE account. (optional)
     * @param  string $type Return information only for accounts matching this account type, as designated by the institution. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2005
     */
    public function listAccounts($link = null, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $balance__available = null, $balance__available__lt = null, $balance__available__lte = null, $balance__available__gt = null, $balance__available__gte = null, $balance__available__range = null, $balance__current = null, $balance__current__lt = null, $balance__current__lte = null, $balance__current__gt = null, $balance__current__gte = null, $balance__current__range = null, $category = null, $category__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $currency = null, $currency__in = null, $id = null, $id__in = null, $institution = null, $institution__in = null, $name = null, $name__icontains = null, $number = null, $number__in = null, $public_identification_name = null, $public_identification_value = null, $type = null)
    {
        list($response) = $this->listAccountsWithHttpInfo($link, $page_size, $page, $omit, $fields, $link__in, $balance__available, $balance__available__lt, $balance__available__lte, $balance__available__gt, $balance__available__gte, $balance__available__range, $balance__current, $balance__current__lt, $balance__current__lte, $balance__current__gt, $balance__current__gte, $balance__current__range, $category, $category__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $id, $id__in, $institution, $institution__in, $name, $name__icontains, $number, $number__in, $public_identification_name, $public_identification_value, $type);
        return $response;
    }

    /**
     * Operation listAccountsWithHttpInfo
     *
     * List accounts
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  float $balance__available Return accounts that have a &#x60;balance.available&#x60; matching exactly this value. (optional)
     * @param  float $balance__available__lt Return accounts that have a &#x60;balance.available&#x60; less than this value. (optional)
     * @param  float $balance__available__lte Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $balance__available__gt Return accounts that have a &#x60;balance.available&#x60; greater than this value. (optional)
     * @param  float $balance__available__gte Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. (optional)
     * @param  float[] $balance__available__range Return accounts that have a &#x60;balance.available&#x60; within a range of two values. (optional)
     * @param  float $balance__current Return accounts that have a &#x60;balance.current&#x60; matching exactly this value. (optional)
     * @param  float $balance__current__lt Return accounts that have a &#x60;balance.current&#x60; less than this value. (optional)
     * @param  float $balance__current__lte Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $balance__current__gt Return accounts that have a &#x60;balance.current&#x60; greater than this value. (optional)
     * @param  float $balance__current__gte Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. (optional)
     * @param  float[] $balance__current__range Return accounts that have a &#x60;balance.current&#x60; within a range of two values. (optional)
     * @param  string $category Return accounts only for the given category (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). (optional)
     * @param  string[] $category__in Return accounts only for the given categories (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $currency Return results that hold finances or balances in only this three-letter currency code. (optional)
     * @param  string[] $currency__in Return results that have funds or balances in one of these three-letter currency codes. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $institution Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). (optional)
     * @param  string[] $institution__in Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). (optional)
     * @param  string $name Return accounts with exactly this internal (specified by the institution) name. (optional)
     * @param  string $name__icontains Return accounts partially matching this internal (specified by the institution) name. (optional)
     * @param  string $number Return information only for this account number (as specified by the institution). (optional)
     * @param  string[] $number__in Return information for these account numbers (as specified by the institution). (optional)
     * @param  string $public_identification_name Return information only for this type of account ID. For example, CLABE accounts. (optional)
     * @param  string $public_identification_value Return information only for this account ID. For example, the account number for a CLABE account. (optional)
     * @param  string $type Return information only for accounts matching this account type, as designated by the institution. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function listAccountsWithHttpInfo($link = null, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $balance__available = null, $balance__available__lt = null, $balance__available__lte = null, $balance__available__gt = null, $balance__available__gte = null, $balance__available__range = null, $balance__current = null, $balance__current__lt = null, $balance__current__lte = null, $balance__current__gt = null, $balance__current__gte = null, $balance__current__range = null, $category = null, $category__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $currency = null, $currency__in = null, $id = null, $id__in = null, $institution = null, $institution__in = null, $name = null, $name__icontains = null, $number = null, $number__in = null, $public_identification_name = null, $public_identification_value = null, $type = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2005';
        $request = $this->listAccountsRequest($link, $page_size, $page, $omit, $fields, $link__in, $balance__available, $balance__available__lt, $balance__available__lte, $balance__available__gt, $balance__available__gte, $balance__available__range, $balance__current, $balance__current__lt, $balance__current__lte, $balance__current__gt, $balance__current__gte, $balance__current__range, $category, $category__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $id, $id__in, $institution, $institution__in, $name, $name__icontains, $number, $number__in, $public_identification_name, $public_identification_value, $type);

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
                        '\Swagger\Client\Model\InlineResponse2005',
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
     * Operation listAccountsAsync
     *
     * List accounts
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  float $balance__available Return accounts that have a &#x60;balance.available&#x60; matching exactly this value. (optional)
     * @param  float $balance__available__lt Return accounts that have a &#x60;balance.available&#x60; less than this value. (optional)
     * @param  float $balance__available__lte Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $balance__available__gt Return accounts that have a &#x60;balance.available&#x60; greater than this value. (optional)
     * @param  float $balance__available__gte Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. (optional)
     * @param  float[] $balance__available__range Return accounts that have a &#x60;balance.available&#x60; within a range of two values. (optional)
     * @param  float $balance__current Return accounts that have a &#x60;balance.current&#x60; matching exactly this value. (optional)
     * @param  float $balance__current__lt Return accounts that have a &#x60;balance.current&#x60; less than this value. (optional)
     * @param  float $balance__current__lte Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $balance__current__gt Return accounts that have a &#x60;balance.current&#x60; greater than this value. (optional)
     * @param  float $balance__current__gte Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. (optional)
     * @param  float[] $balance__current__range Return accounts that have a &#x60;balance.current&#x60; within a range of two values. (optional)
     * @param  string $category Return accounts only for the given category (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). (optional)
     * @param  string[] $category__in Return accounts only for the given categories (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $currency Return results that hold finances or balances in only this three-letter currency code. (optional)
     * @param  string[] $currency__in Return results that have funds or balances in one of these three-letter currency codes. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $institution Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). (optional)
     * @param  string[] $institution__in Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). (optional)
     * @param  string $name Return accounts with exactly this internal (specified by the institution) name. (optional)
     * @param  string $name__icontains Return accounts partially matching this internal (specified by the institution) name. (optional)
     * @param  string $number Return information only for this account number (as specified by the institution). (optional)
     * @param  string[] $number__in Return information for these account numbers (as specified by the institution). (optional)
     * @param  string $public_identification_name Return information only for this type of account ID. For example, CLABE accounts. (optional)
     * @param  string $public_identification_value Return information only for this account ID. For example, the account number for a CLABE account. (optional)
     * @param  string $type Return information only for accounts matching this account type, as designated by the institution. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAccountsAsync($link = null, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $balance__available = null, $balance__available__lt = null, $balance__available__lte = null, $balance__available__gt = null, $balance__available__gte = null, $balance__available__range = null, $balance__current = null, $balance__current__lt = null, $balance__current__lte = null, $balance__current__gt = null, $balance__current__gte = null, $balance__current__range = null, $category = null, $category__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $currency = null, $currency__in = null, $id = null, $id__in = null, $institution = null, $institution__in = null, $name = null, $name__icontains = null, $number = null, $number__in = null, $public_identification_name = null, $public_identification_value = null, $type = null)
    {
        return $this->listAccountsAsyncWithHttpInfo($link, $page_size, $page, $omit, $fields, $link__in, $balance__available, $balance__available__lt, $balance__available__lte, $balance__available__gt, $balance__available__gte, $balance__available__range, $balance__current, $balance__current__lt, $balance__current__lte, $balance__current__gt, $balance__current__gte, $balance__current__range, $category, $category__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $id, $id__in, $institution, $institution__in, $name, $name__icontains, $number, $number__in, $public_identification_name, $public_identification_value, $type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listAccountsAsyncWithHttpInfo
     *
     * List accounts
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  float $balance__available Return accounts that have a &#x60;balance.available&#x60; matching exactly this value. (optional)
     * @param  float $balance__available__lt Return accounts that have a &#x60;balance.available&#x60; less than this value. (optional)
     * @param  float $balance__available__lte Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $balance__available__gt Return accounts that have a &#x60;balance.available&#x60; greater than this value. (optional)
     * @param  float $balance__available__gte Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. (optional)
     * @param  float[] $balance__available__range Return accounts that have a &#x60;balance.available&#x60; within a range of two values. (optional)
     * @param  float $balance__current Return accounts that have a &#x60;balance.current&#x60; matching exactly this value. (optional)
     * @param  float $balance__current__lt Return accounts that have a &#x60;balance.current&#x60; less than this value. (optional)
     * @param  float $balance__current__lte Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $balance__current__gt Return accounts that have a &#x60;balance.current&#x60; greater than this value. (optional)
     * @param  float $balance__current__gte Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. (optional)
     * @param  float[] $balance__current__range Return accounts that have a &#x60;balance.current&#x60; within a range of two values. (optional)
     * @param  string $category Return accounts only for the given category (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). (optional)
     * @param  string[] $category__in Return accounts only for the given categories (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $currency Return results that hold finances or balances in only this three-letter currency code. (optional)
     * @param  string[] $currency__in Return results that have funds or balances in one of these three-letter currency codes. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $institution Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). (optional)
     * @param  string[] $institution__in Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). (optional)
     * @param  string $name Return accounts with exactly this internal (specified by the institution) name. (optional)
     * @param  string $name__icontains Return accounts partially matching this internal (specified by the institution) name. (optional)
     * @param  string $number Return information only for this account number (as specified by the institution). (optional)
     * @param  string[] $number__in Return information for these account numbers (as specified by the institution). (optional)
     * @param  string $public_identification_name Return information only for this type of account ID. For example, CLABE accounts. (optional)
     * @param  string $public_identification_value Return information only for this account ID. For example, the account number for a CLABE account. (optional)
     * @param  string $type Return information only for accounts matching this account type, as designated by the institution. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAccountsAsyncWithHttpInfo($link = null, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $balance__available = null, $balance__available__lt = null, $balance__available__lte = null, $balance__available__gt = null, $balance__available__gte = null, $balance__available__range = null, $balance__current = null, $balance__current__lt = null, $balance__current__lte = null, $balance__current__gt = null, $balance__current__gte = null, $balance__current__range = null, $category = null, $category__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $currency = null, $currency__in = null, $id = null, $id__in = null, $institution = null, $institution__in = null, $name = null, $name__icontains = null, $number = null, $number__in = null, $public_identification_name = null, $public_identification_value = null, $type = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2005';
        $request = $this->listAccountsRequest($link, $page_size, $page, $omit, $fields, $link__in, $balance__available, $balance__available__lt, $balance__available__lte, $balance__available__gt, $balance__available__gte, $balance__available__range, $balance__current, $balance__current__lt, $balance__current__lte, $balance__current__gt, $balance__current__gte, $balance__current__range, $category, $category__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $id, $id__in, $institution, $institution__in, $name, $name__icontains, $number, $number__in, $public_identification_name, $public_identification_value, $type);

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
     * Create request for operation 'listAccounts'
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  float $balance__available Return accounts that have a &#x60;balance.available&#x60; matching exactly this value. (optional)
     * @param  float $balance__available__lt Return accounts that have a &#x60;balance.available&#x60; less than this value. (optional)
     * @param  float $balance__available__lte Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $balance__available__gt Return accounts that have a &#x60;balance.available&#x60; greater than this value. (optional)
     * @param  float $balance__available__gte Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. (optional)
     * @param  float[] $balance__available__range Return accounts that have a &#x60;balance.available&#x60; within a range of two values. (optional)
     * @param  float $balance__current Return accounts that have a &#x60;balance.current&#x60; matching exactly this value. (optional)
     * @param  float $balance__current__lt Return accounts that have a &#x60;balance.current&#x60; less than this value. (optional)
     * @param  float $balance__current__lte Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. (optional)
     * @param  float $balance__current__gt Return accounts that have a &#x60;balance.current&#x60; greater than this value. (optional)
     * @param  float $balance__current__gte Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. (optional)
     * @param  float[] $balance__current__range Return accounts that have a &#x60;balance.current&#x60; within a range of two values. (optional)
     * @param  string $category Return accounts only for the given category (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). (optional)
     * @param  string[] $category__in Return accounts only for the given categories (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string $currency Return results that hold finances or balances in only this three-letter currency code. (optional)
     * @param  string[] $currency__in Return results that have funds or balances in one of these three-letter currency codes. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $institution Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). (optional)
     * @param  string[] $institution__in Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). (optional)
     * @param  string $name Return accounts with exactly this internal (specified by the institution) name. (optional)
     * @param  string $name__icontains Return accounts partially matching this internal (specified by the institution) name. (optional)
     * @param  string $number Return information only for this account number (as specified by the institution). (optional)
     * @param  string[] $number__in Return information for these account numbers (as specified by the institution). (optional)
     * @param  string $public_identification_name Return information only for this type of account ID. For example, CLABE accounts. (optional)
     * @param  string $public_identification_value Return information only for this account ID. For example, the account number for a CLABE account. (optional)
     * @param  string $type Return information only for accounts matching this account type, as designated by the institution. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listAccountsRequest($link = null, $page_size = '100', $page = null, $omit = null, $fields = null, $link__in = null, $balance__available = null, $balance__available__lt = null, $balance__available__lte = null, $balance__available__gt = null, $balance__available__gte = null, $balance__available__range = null, $balance__current = null, $balance__current__lt = null, $balance__current__lte = null, $balance__current__gt = null, $balance__current__gte = null, $balance__current__range = null, $category = null, $category__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $currency = null, $currency__in = null, $id = null, $id__in = null, $institution = null, $institution__in = null, $name = null, $name__icontains = null, $number = null, $number__in = null, $public_identification_name = null, $public_identification_value = null, $type = null)
    {

        $resourcePath = '/api/accounts/';
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
        if ($balance__available !== null) {
            $queryParams['balance__available'] = ObjectSerializer::toQueryValue($balance__available, null);
        }
        // query params
        if ($balance__available__lt !== null) {
            $queryParams['balance__available__lt'] = ObjectSerializer::toQueryValue($balance__available__lt, null);
        }
        // query params
        if ($balance__available__lte !== null) {
            $queryParams['balance__available__lte'] = ObjectSerializer::toQueryValue($balance__available__lte, null);
        }
        // query params
        if ($balance__available__gt !== null) {
            $queryParams['balance__available__gt'] = ObjectSerializer::toQueryValue($balance__available__gt, null);
        }
        // query params
        if ($balance__available__gte !== null) {
            $queryParams['balance__available__gte'] = ObjectSerializer::toQueryValue($balance__available__gte, null);
        }
        // query params
        if (is_array($balance__available__range)) {
            $balance__available__range = ObjectSerializer::serializeCollection($balance__available__range, 'csv', true);
        }
        if ($balance__available__range !== null) {
            $queryParams['balance__available__range'] = ObjectSerializer::toQueryValue($balance__available__range, null);
        }
        // query params
        if ($balance__current !== null) {
            $queryParams['balance__current'] = ObjectSerializer::toQueryValue($balance__current, null);
        }
        // query params
        if ($balance__current__lt !== null) {
            $queryParams['balance__current__lt'] = ObjectSerializer::toQueryValue($balance__current__lt, null);
        }
        // query params
        if ($balance__current__lte !== null) {
            $queryParams['balance__current__lte'] = ObjectSerializer::toQueryValue($balance__current__lte, null);
        }
        // query params
        if ($balance__current__gt !== null) {
            $queryParams['balance__current__gt'] = ObjectSerializer::toQueryValue($balance__current__gt, null);
        }
        // query params
        if ($balance__current__gte !== null) {
            $queryParams['balance__current__gte'] = ObjectSerializer::toQueryValue($balance__current__gte, null);
        }
        // query params
        if (is_array($balance__current__range)) {
            $balance__current__range = ObjectSerializer::serializeCollection($balance__current__range, 'csv', true);
        }
        if ($balance__current__range !== null) {
            $queryParams['balance__current__range'] = ObjectSerializer::toQueryValue($balance__current__range, null);
        }
        // query params
        if ($category !== null) {
            $queryParams['category'] = ObjectSerializer::toQueryValue($category, null);
        }
        // query params
        if (is_array($category__in)) {
            $category__in = ObjectSerializer::serializeCollection($category__in, 'csv', true);
        }
        if ($category__in !== null) {
            $queryParams['category__in'] = ObjectSerializer::toQueryValue($category__in, null);
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
        if ($institution !== null) {
            $queryParams['institution'] = ObjectSerializer::toQueryValue($institution, null);
        }
        // query params
        if (is_array($institution__in)) {
            $institution__in = ObjectSerializer::serializeCollection($institution__in, 'csv', true);
        }
        if ($institution__in !== null) {
            $queryParams['institution__in'] = ObjectSerializer::toQueryValue($institution__in, null);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }
        // query params
        if ($name__icontains !== null) {
            $queryParams['name__icontains'] = ObjectSerializer::toQueryValue($name__icontains, null);
        }
        // query params
        if ($number !== null) {
            $queryParams['number'] = ObjectSerializer::toQueryValue($number, null);
        }
        // query params
        if (is_array($number__in)) {
            $number__in = ObjectSerializer::serializeCollection($number__in, 'csv', true);
        }
        if ($number__in !== null) {
            $queryParams['number__in'] = ObjectSerializer::toQueryValue($number__in, null);
        }
        // query params
        if ($public_identification_name !== null) {
            $queryParams['public_identification_name'] = ObjectSerializer::toQueryValue($public_identification_name, null);
        }
        // query params
        if ($public_identification_value !== null) {
            $queryParams['public_identification_value'] = ObjectSerializer::toQueryValue($public_identification_value, null);
        }
        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type, null);
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
     * Operation patchAccounts
     *
     * Complete an accounts request
     *
     * @param  \Swagger\Client\Model\ApiAccountsBody1 $body body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return null[]
     */
    public function patchAccounts($body, $omit = null, $fields = null)
    {
        list($response) = $this->patchAccountsWithHttpInfo($body, $omit, $fields);
        return $response;
    }

    /**
     * Operation patchAccountsWithHttpInfo
     *
     * Complete an accounts request
     *
     * @param  \Swagger\Client\Model\ApiAccountsBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null[], HTTP status code, HTTP response headers (array of strings)
     */
    public function patchAccountsWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = 'null[]';
        $request = $this->patchAccountsRequest($body, $omit, $fields);

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
     * Operation patchAccountsAsync
     *
     * Complete an accounts request
     *
     * @param  \Swagger\Client\Model\ApiAccountsBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchAccountsAsync($body, $omit = null, $fields = null)
    {
        return $this->patchAccountsAsyncWithHttpInfo($body, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchAccountsAsyncWithHttpInfo
     *
     * Complete an accounts request
     *
     * @param  \Swagger\Client\Model\ApiAccountsBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchAccountsAsyncWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = 'null[]';
        $request = $this->patchAccountsRequest($body, $omit, $fields);

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
     * Create request for operation 'patchAccounts'
     *
     * @param  \Swagger\Client\Model\ApiAccountsBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchAccountsRequest($body, $omit = null, $fields = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling patchAccounts'
            );
        }

        $resourcePath = '/api/accounts/';
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
     * Operation retrieveAccounts
     *
     * Retrieve accounts for a link
     *
     * @param  \Swagger\Client\Model\ApiAccountsBody $body body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return null[]
     */
    public function retrieveAccounts($body, $omit = null, $fields = null)
    {
        list($response) = $this->retrieveAccountsWithHttpInfo($body, $omit, $fields);
        return $response;
    }

    /**
     * Operation retrieveAccountsWithHttpInfo
     *
     * Retrieve accounts for a link
     *
     * @param  \Swagger\Client\Model\ApiAccountsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveAccountsWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = 'null[]';
        $request = $this->retrieveAccountsRequest($body, $omit, $fields);

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
     * Operation retrieveAccountsAsync
     *
     * Retrieve accounts for a link
     *
     * @param  \Swagger\Client\Model\ApiAccountsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveAccountsAsync($body, $omit = null, $fields = null)
    {
        return $this->retrieveAccountsAsyncWithHttpInfo($body, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveAccountsAsyncWithHttpInfo
     *
     * Retrieve accounts for a link
     *
     * @param  \Swagger\Client\Model\ApiAccountsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveAccountsAsyncWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = 'null[]';
        $request = $this->retrieveAccountsRequest($body, $omit, $fields);

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
     * Create request for operation 'retrieveAccounts'
     *
     * @param  \Swagger\Client\Model\ApiAccountsBody $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveAccountsRequest($body, $omit = null, $fields = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling retrieveAccounts'
            );
        }

        $resourcePath = '/api/accounts/';
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
