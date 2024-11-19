<?php
/**
 * InvoicesApi
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
 * InvoicesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoicesApi
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
     * Operation destroyInvoice
     *
     * Delete an invoice
     *
     * @param  string $id The &#x60;invoice.id&#x60; that you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function destroyInvoice($id)
    {
        $this->destroyInvoiceWithHttpInfo($id);
    }

    /**
     * Operation destroyInvoiceWithHttpInfo
     *
     * Delete an invoice
     *
     * @param  string $id The &#x60;invoice.id&#x60; that you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function destroyInvoiceWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyInvoiceRequest($id);

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
     * Operation destroyInvoiceAsync
     *
     * Delete an invoice
     *
     * @param  string $id The &#x60;invoice.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyInvoiceAsync($id)
    {
        return $this->destroyInvoiceAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation destroyInvoiceAsyncWithHttpInfo
     *
     * Delete an invoice
     *
     * @param  string $id The &#x60;invoice.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyInvoiceAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyInvoiceRequest($id);

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
     * Create request for operation 'destroyInvoice'
     *
     * @param  string $id The &#x60;invoice.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function destroyInvoiceRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling destroyInvoice'
            );
        }

        $resourcePath = '/api/invoices/{id}/';
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
     * Operation detailInvoice
     *
     * Get an invoice's details
     *
     * @param  string $id The &#x60;invoice.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\SATMexico1
     */
    public function detailInvoice($id, $omit = null, $fields = null)
    {
        list($response) = $this->detailInvoiceWithHttpInfo($id, $omit, $fields);
        return $response;
    }

    /**
     * Operation detailInvoiceWithHttpInfo
     *
     * Get an invoice's details
     *
     * @param  string $id The &#x60;invoice.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\SATMexico1, HTTP status code, HTTP response headers (array of strings)
     */
    public function detailInvoiceWithHttpInfo($id, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\SATMexico1';
        $request = $this->detailInvoiceRequest($id, $omit, $fields);

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
                        '\Swagger\Client\Model\SATMexico1',
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
     * Operation detailInvoiceAsync
     *
     * Get an invoice's details
     *
     * @param  string $id The &#x60;invoice.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailInvoiceAsync($id, $omit = null, $fields = null)
    {
        return $this->detailInvoiceAsyncWithHttpInfo($id, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation detailInvoiceAsyncWithHttpInfo
     *
     * Get an invoice's details
     *
     * @param  string $id The &#x60;invoice.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailInvoiceAsyncWithHttpInfo($id, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\SATMexico1';
        $request = $this->detailInvoiceRequest($id, $omit, $fields);

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
     * Create request for operation 'detailInvoice'
     *
     * @param  string $id The &#x60;invoice.id&#x60; you want to get detailed information about. (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function detailInvoiceRequest($id, $omit = null, $fields = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling detailInvoice'
            );
        }

        $resourcePath = '/api/invoices/{id}/';
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
     * Operation listInvoices
     *
     * List invoices
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $invoice_date Return invoices issued exactly on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__lt Return balances issued before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__lte Return balances issued on this date or earlier (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__gt Return invoices issued after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__gte Return invoices issued on this date or later (&#x60;YYYY-MM-DD&#x60;) (optional)
     * @param  \DateTime[] $invoice_date__range Return invoices issued within this date range (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  string $invoice_identification Return an invoice with this ID (as provided by the insitution). (optional)
     * @param  string[] $invoice_identification__in Return invoices with these IDs (as provided by the institution). (optional)
     * @param  string $status Return invoices with this status. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). (optional)
     * @param  string[] $status__in Return invoices with these statuses. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). (optional)
     * @param  string $type Return invoices of this type. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. (optional)
     * @param  string[] $type__in Return invoices of these types. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. (optional)
     * @param  float $total_amount Return invoices matching exactly this value. (optional)
     * @param  float $total_amount__lt Return invoices less than this value. (optional)
     * @param  float $total_amount__lte Return invoices less than or equal to this value. (optional)
     * @param  float $total_amount__gt Return invoices greater than this value. (optional)
     * @param  float $total_amount__gte Return invoices greater than or equal to this value. (optional)
     * @param  float[] $total_amount__range Return invoices between these two values. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20037
     */
    public function listInvoices($link = null, $page = null, $page_size = '100', $link__in = null, $omit = null, $fields = null, $id = null, $id__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $invoice_date = null, $invoice_date__lt = null, $invoice_date__lte = null, $invoice_date__gt = null, $invoice_date__gte = null, $invoice_date__range = null, $invoice_identification = null, $invoice_identification__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $total_amount = null, $total_amount__lt = null, $total_amount__lte = null, $total_amount__gt = null, $total_amount__gte = null, $total_amount__range = null)
    {
        list($response) = $this->listInvoicesWithHttpInfo($link, $page, $page_size, $link__in, $omit, $fields, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $invoice_date, $invoice_date__lt, $invoice_date__lte, $invoice_date__gt, $invoice_date__gte, $invoice_date__range, $invoice_identification, $invoice_identification__in, $status, $status__in, $type, $type__in, $total_amount, $total_amount__lt, $total_amount__lte, $total_amount__gt, $total_amount__gte, $total_amount__range);
        return $response;
    }

    /**
     * Operation listInvoicesWithHttpInfo
     *
     * List invoices
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $invoice_date Return invoices issued exactly on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__lt Return balances issued before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__lte Return balances issued on this date or earlier (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__gt Return invoices issued after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__gte Return invoices issued on this date or later (&#x60;YYYY-MM-DD&#x60;) (optional)
     * @param  \DateTime[] $invoice_date__range Return invoices issued within this date range (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  string $invoice_identification Return an invoice with this ID (as provided by the insitution). (optional)
     * @param  string[] $invoice_identification__in Return invoices with these IDs (as provided by the institution). (optional)
     * @param  string $status Return invoices with this status. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). (optional)
     * @param  string[] $status__in Return invoices with these statuses. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). (optional)
     * @param  string $type Return invoices of this type. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. (optional)
     * @param  string[] $type__in Return invoices of these types. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. (optional)
     * @param  float $total_amount Return invoices matching exactly this value. (optional)
     * @param  float $total_amount__lt Return invoices less than this value. (optional)
     * @param  float $total_amount__lte Return invoices less than or equal to this value. (optional)
     * @param  float $total_amount__gt Return invoices greater than this value. (optional)
     * @param  float $total_amount__gte Return invoices greater than or equal to this value. (optional)
     * @param  float[] $total_amount__range Return invoices between these two values. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20037, HTTP status code, HTTP response headers (array of strings)
     */
    public function listInvoicesWithHttpInfo($link = null, $page = null, $page_size = '100', $link__in = null, $omit = null, $fields = null, $id = null, $id__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $invoice_date = null, $invoice_date__lt = null, $invoice_date__lte = null, $invoice_date__gt = null, $invoice_date__gte = null, $invoice_date__range = null, $invoice_identification = null, $invoice_identification__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $total_amount = null, $total_amount__lt = null, $total_amount__lte = null, $total_amount__gt = null, $total_amount__gte = null, $total_amount__range = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20037';
        $request = $this->listInvoicesRequest($link, $page, $page_size, $link__in, $omit, $fields, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $invoice_date, $invoice_date__lt, $invoice_date__lte, $invoice_date__gt, $invoice_date__gte, $invoice_date__range, $invoice_identification, $invoice_identification__in, $status, $status__in, $type, $type__in, $total_amount, $total_amount__lt, $total_amount__lte, $total_amount__gt, $total_amount__gte, $total_amount__range);

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
                        '\Swagger\Client\Model\InlineResponse20037',
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
     * Operation listInvoicesAsync
     *
     * List invoices
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $invoice_date Return invoices issued exactly on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__lt Return balances issued before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__lte Return balances issued on this date or earlier (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__gt Return invoices issued after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__gte Return invoices issued on this date or later (&#x60;YYYY-MM-DD&#x60;) (optional)
     * @param  \DateTime[] $invoice_date__range Return invoices issued within this date range (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  string $invoice_identification Return an invoice with this ID (as provided by the insitution). (optional)
     * @param  string[] $invoice_identification__in Return invoices with these IDs (as provided by the institution). (optional)
     * @param  string $status Return invoices with this status. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). (optional)
     * @param  string[] $status__in Return invoices with these statuses. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). (optional)
     * @param  string $type Return invoices of this type. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. (optional)
     * @param  string[] $type__in Return invoices of these types. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. (optional)
     * @param  float $total_amount Return invoices matching exactly this value. (optional)
     * @param  float $total_amount__lt Return invoices less than this value. (optional)
     * @param  float $total_amount__lte Return invoices less than or equal to this value. (optional)
     * @param  float $total_amount__gt Return invoices greater than this value. (optional)
     * @param  float $total_amount__gte Return invoices greater than or equal to this value. (optional)
     * @param  float[] $total_amount__range Return invoices between these two values. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInvoicesAsync($link = null, $page = null, $page_size = '100', $link__in = null, $omit = null, $fields = null, $id = null, $id__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $invoice_date = null, $invoice_date__lt = null, $invoice_date__lte = null, $invoice_date__gt = null, $invoice_date__gte = null, $invoice_date__range = null, $invoice_identification = null, $invoice_identification__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $total_amount = null, $total_amount__lt = null, $total_amount__lte = null, $total_amount__gt = null, $total_amount__gte = null, $total_amount__range = null)
    {
        return $this->listInvoicesAsyncWithHttpInfo($link, $page, $page_size, $link__in, $omit, $fields, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $invoice_date, $invoice_date__lt, $invoice_date__lte, $invoice_date__gt, $invoice_date__gte, $invoice_date__range, $invoice_identification, $invoice_identification__in, $status, $status__in, $type, $type__in, $total_amount, $total_amount__lt, $total_amount__lte, $total_amount__gt, $total_amount__gte, $total_amount__range)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listInvoicesAsyncWithHttpInfo
     *
     * List invoices
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $invoice_date Return invoices issued exactly on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__lt Return balances issued before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__lte Return balances issued on this date or earlier (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__gt Return invoices issued after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__gte Return invoices issued on this date or later (&#x60;YYYY-MM-DD&#x60;) (optional)
     * @param  \DateTime[] $invoice_date__range Return invoices issued within this date range (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  string $invoice_identification Return an invoice with this ID (as provided by the insitution). (optional)
     * @param  string[] $invoice_identification__in Return invoices with these IDs (as provided by the institution). (optional)
     * @param  string $status Return invoices with this status. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). (optional)
     * @param  string[] $status__in Return invoices with these statuses. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). (optional)
     * @param  string $type Return invoices of this type. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. (optional)
     * @param  string[] $type__in Return invoices of these types. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. (optional)
     * @param  float $total_amount Return invoices matching exactly this value. (optional)
     * @param  float $total_amount__lt Return invoices less than this value. (optional)
     * @param  float $total_amount__lte Return invoices less than or equal to this value. (optional)
     * @param  float $total_amount__gt Return invoices greater than this value. (optional)
     * @param  float $total_amount__gte Return invoices greater than or equal to this value. (optional)
     * @param  float[] $total_amount__range Return invoices between these two values. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInvoicesAsyncWithHttpInfo($link = null, $page = null, $page_size = '100', $link__in = null, $omit = null, $fields = null, $id = null, $id__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $invoice_date = null, $invoice_date__lt = null, $invoice_date__lte = null, $invoice_date__gt = null, $invoice_date__gte = null, $invoice_date__range = null, $invoice_identification = null, $invoice_identification__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $total_amount = null, $total_amount__lt = null, $total_amount__lte = null, $total_amount__gt = null, $total_amount__gte = null, $total_amount__range = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20037';
        $request = $this->listInvoicesRequest($link, $page, $page_size, $link__in, $omit, $fields, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $invoice_date, $invoice_date__lt, $invoice_date__lte, $invoice_date__gt, $invoice_date__gte, $invoice_date__range, $invoice_identification, $invoice_identification__in, $status, $status__in, $type, $type__in, $total_amount, $total_amount__lt, $total_amount__lte, $total_amount__gt, $total_amount__gte, $total_amount__range);

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
     * Create request for operation 'listInvoices'
     *
     * @param  string $link The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  string[] $link__in Return results only for these &#x60;link.id&#x60;s. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $invoice_date Return invoices issued exactly on this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__lt Return balances issued before this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__lte Return balances issued on this date or earlier (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__gt Return invoices issued after this date (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  \DateTime $invoice_date__gte Return invoices issued on this date or later (&#x60;YYYY-MM-DD&#x60;) (optional)
     * @param  \DateTime[] $invoice_date__range Return invoices issued within this date range (&#x60;YYYY-MM-DD&#x60;). (optional)
     * @param  string $invoice_identification Return an invoice with this ID (as provided by the insitution). (optional)
     * @param  string[] $invoice_identification__in Return invoices with these IDs (as provided by the institution). (optional)
     * @param  string $status Return invoices with this status. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). (optional)
     * @param  string[] $status__in Return invoices with these statuses. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). (optional)
     * @param  string $type Return invoices of this type. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. (optional)
     * @param  string[] $type__in Return invoices of these types. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. (optional)
     * @param  float $total_amount Return invoices matching exactly this value. (optional)
     * @param  float $total_amount__lt Return invoices less than this value. (optional)
     * @param  float $total_amount__lte Return invoices less than or equal to this value. (optional)
     * @param  float $total_amount__gt Return invoices greater than this value. (optional)
     * @param  float $total_amount__gte Return invoices greater than or equal to this value. (optional)
     * @param  float[] $total_amount__range Return invoices between these two values. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listInvoicesRequest($link = null, $page = null, $page_size = '100', $link__in = null, $omit = null, $fields = null, $id = null, $id__in = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $invoice_date = null, $invoice_date__lt = null, $invoice_date__lte = null, $invoice_date__gt = null, $invoice_date__gte = null, $invoice_date__range = null, $invoice_identification = null, $invoice_identification__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $total_amount = null, $total_amount__lt = null, $total_amount__lte = null, $total_amount__gt = null, $total_amount__gte = null, $total_amount__range = null)
    {

        $resourcePath = '/api/invoices/';
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, 'int32');
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = ObjectSerializer::toQueryValue($page_size, 'int32');
        }
        // query params
        if (is_array($link__in)) {
            $link__in = ObjectSerializer::serializeCollection($link__in, 'csv', true);
        }
        if ($link__in !== null) {
            $queryParams['link__in'] = ObjectSerializer::toQueryValue($link__in, 'uuid');
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
        if ($invoice_date !== null) {
            $queryParams['invoice_date'] = ObjectSerializer::toQueryValue($invoice_date, 'date');
        }
        // query params
        if ($invoice_date__lt !== null) {
            $queryParams['invoice_date__lt'] = ObjectSerializer::toQueryValue($invoice_date__lt, 'date');
        }
        // query params
        if ($invoice_date__lte !== null) {
            $queryParams['invoice_date__lte'] = ObjectSerializer::toQueryValue($invoice_date__lte, 'date');
        }
        // query params
        if ($invoice_date__gt !== null) {
            $queryParams['invoice_date__gt'] = ObjectSerializer::toQueryValue($invoice_date__gt, 'date');
        }
        // query params
        if ($invoice_date__gte !== null) {
            $queryParams['invoice_date__gte'] = ObjectSerializer::toQueryValue($invoice_date__gte, 'date');
        }
        // query params
        if (is_array($invoice_date__range)) {
            $invoice_date__range = ObjectSerializer::serializeCollection($invoice_date__range, 'csv', true);
        }
        if ($invoice_date__range !== null) {
            $queryParams['invoice_date__range'] = ObjectSerializer::toQueryValue($invoice_date__range, 'date');
        }
        // query params
        if ($invoice_identification !== null) {
            $queryParams['invoice_identification'] = ObjectSerializer::toQueryValue($invoice_identification, null);
        }
        // query params
        if (is_array($invoice_identification__in)) {
            $invoice_identification__in = ObjectSerializer::serializeCollection($invoice_identification__in, 'csv', true);
        }
        if ($invoice_identification__in !== null) {
            $queryParams['invoice_identification__in'] = ObjectSerializer::toQueryValue($invoice_identification__in, null);
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
        if ($total_amount !== null) {
            $queryParams['total_amount'] = ObjectSerializer::toQueryValue($total_amount, null);
        }
        // query params
        if ($total_amount__lt !== null) {
            $queryParams['total_amount__lt'] = ObjectSerializer::toQueryValue($total_amount__lt, null);
        }
        // query params
        if ($total_amount__lte !== null) {
            $queryParams['total_amount__lte'] = ObjectSerializer::toQueryValue($total_amount__lte, null);
        }
        // query params
        if ($total_amount__gt !== null) {
            $queryParams['total_amount__gt'] = ObjectSerializer::toQueryValue($total_amount__gt, null);
        }
        // query params
        if ($total_amount__gte !== null) {
            $queryParams['total_amount__gte'] = ObjectSerializer::toQueryValue($total_amount__gte, null);
        }
        // query params
        if (is_array($total_amount__range)) {
            $total_amount__range = ObjectSerializer::serializeCollection($total_amount__range, 'csv', true);
        }
        if ($total_amount__range !== null) {
            $queryParams['total_amount__range'] = ObjectSerializer::toQueryValue($total_amount__range, null);
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
     * Operation patchInvoices
     *
     * Complete an invoices request
     *
     * @param  \Swagger\Client\Model\ApiInvoicesBody1 $body body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\SATMexico[]
     */
    public function patchInvoices($body, $omit = null, $fields = null)
    {
        list($response) = $this->patchInvoicesWithHttpInfo($body, $omit, $fields);
        return $response;
    }

    /**
     * Operation patchInvoicesWithHttpInfo
     *
     * Complete an invoices request
     *
     * @param  \Swagger\Client\Model\ApiInvoicesBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\SATMexico[], HTTP status code, HTTP response headers (array of strings)
     */
    public function patchInvoicesWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\SATMexico[]';
        $request = $this->patchInvoicesRequest($body, $omit, $fields);

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
                        '\Swagger\Client\Model\SATMexico[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\SATMexico[]',
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
     * Operation patchInvoicesAsync
     *
     * Complete an invoices request
     *
     * @param  \Swagger\Client\Model\ApiInvoicesBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchInvoicesAsync($body, $omit = null, $fields = null)
    {
        return $this->patchInvoicesAsyncWithHttpInfo($body, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchInvoicesAsyncWithHttpInfo
     *
     * Complete an invoices request
     *
     * @param  \Swagger\Client\Model\ApiInvoicesBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchInvoicesAsyncWithHttpInfo($body, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\SATMexico[]';
        $request = $this->patchInvoicesRequest($body, $omit, $fields);

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
     * Create request for operation 'patchInvoices'
     *
     * @param  \Swagger\Client\Model\ApiInvoicesBody1 $body (required)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchInvoicesRequest($body, $omit = null, $fields = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling patchInvoices'
            );
        }

        $resourcePath = '/api/invoices/';
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
     * Operation retrieveInvoices
     *
     * Retrieve invoices for a link
     *
     * @param  \Swagger\Client\Model\ApiInvoicesBody $body body (required)
     * @param  string $x_belvo_request_mode Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\SATMexico[]
     */
    public function retrieveInvoices($body, $x_belvo_request_mode = null, $omit = null, $fields = null)
    {
        list($response) = $this->retrieveInvoicesWithHttpInfo($body, $x_belvo_request_mode, $omit, $fields);
        return $response;
    }

    /**
     * Operation retrieveInvoicesWithHttpInfo
     *
     * Retrieve invoices for a link
     *
     * @param  \Swagger\Client\Model\ApiInvoicesBody $body (required)
     * @param  string $x_belvo_request_mode Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\SATMexico[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveInvoicesWithHttpInfo($body, $x_belvo_request_mode = null, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\SATMexico[]';
        $request = $this->retrieveInvoicesRequest($body, $x_belvo_request_mode, $omit, $fields);

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
                        '\Swagger\Client\Model\SATMexico[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\SATMexico[]',
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
     * Operation retrieveInvoicesAsync
     *
     * Retrieve invoices for a link
     *
     * @param  \Swagger\Client\Model\ApiInvoicesBody $body (required)
     * @param  string $x_belvo_request_mode Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveInvoicesAsync($body, $x_belvo_request_mode = null, $omit = null, $fields = null)
    {
        return $this->retrieveInvoicesAsyncWithHttpInfo($body, $x_belvo_request_mode, $omit, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveInvoicesAsyncWithHttpInfo
     *
     * Retrieve invoices for a link
     *
     * @param  \Swagger\Client\Model\ApiInvoicesBody $body (required)
     * @param  string $x_belvo_request_mode Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveInvoicesAsyncWithHttpInfo($body, $x_belvo_request_mode = null, $omit = null, $fields = null)
    {
        $returnType = '\Swagger\Client\Model\SATMexico[]';
        $request = $this->retrieveInvoicesRequest($body, $x_belvo_request_mode, $omit, $fields);

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
     * Create request for operation 'retrieveInvoices'
     *
     * @param  \Swagger\Client\Model\ApiInvoicesBody $body (required)
     * @param  string $x_belvo_request_mode Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveInvoicesRequest($body, $x_belvo_request_mode = null, $omit = null, $fields = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling retrieveInvoices'
            );
        }

        $resourcePath = '/api/invoices/';
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
