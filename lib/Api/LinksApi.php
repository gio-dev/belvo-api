<?php
/**
 * LinksApi
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
 * LinksApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinksApi
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
     * Operation destroyLink
     *
     * Delete a link
     *
     * @param  string $id The &#x60;link.id&#x60; that you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function destroyLink($id)
    {
        $this->destroyLinkWithHttpInfo($id);
    }

    /**
     * Operation destroyLinkWithHttpInfo
     *
     * Delete a link
     *
     * @param  string $id The &#x60;link.id&#x60; that you want to delete. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function destroyLinkWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyLinkRequest($id);

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
     * Operation destroyLinkAsync
     *
     * Delete a link
     *
     * @param  string $id The &#x60;link.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyLinkAsync($id)
    {
        return $this->destroyLinkAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation destroyLinkAsyncWithHttpInfo
     *
     * Delete a link
     *
     * @param  string $id The &#x60;link.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyLinkAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->destroyLinkRequest($id);

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
     * Create request for operation 'destroyLink'
     *
     * @param  string $id The &#x60;link.id&#x60; that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function destroyLinkRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling destroyLink'
            );
        }

        $resourcePath = '/api/links/{id}/';
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
     * Operation detailLink
     *
     * Get a link's details
     *
     * @param  string $id The &#x60;link.id&#x60; you want to get detailed information about. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse201
     */
    public function detailLink($id)
    {
        list($response) = $this->detailLinkWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation detailLinkWithHttpInfo
     *
     * Get a link's details
     *
     * @param  string $id The &#x60;link.id&#x60; you want to get detailed information about. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse201, HTTP status code, HTTP response headers (array of strings)
     */
    public function detailLinkWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse201';
        $request = $this->detailLinkRequest($id);

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
                        '\Swagger\Client\Model\InlineResponse201',
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
     * Operation detailLinkAsync
     *
     * Get a link's details
     *
     * @param  string $id The &#x60;link.id&#x60; you want to get detailed information about. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailLinkAsync($id)
    {
        return $this->detailLinkAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation detailLinkAsyncWithHttpInfo
     *
     * Get a link's details
     *
     * @param  string $id The &#x60;link.id&#x60; you want to get detailed information about. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailLinkAsyncWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse201';
        $request = $this->detailLinkRequest($id);

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
     * Create request for operation 'detailLink'
     *
     * @param  string $id The &#x60;link.id&#x60; you want to get detailed information about. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function detailLinkRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling detailLink'
            );
        }

        $resourcePath = '/api/links/{id}/';
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listLinks
     *
     * List links
     *
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $institution Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). (optional)
     * @param  string[] $institution__in Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). (optional)
     * @param  string $access_mode Return links only with this access mode. Can be either &#x60;single&#x60; or &#x60;recurrent&#x60;. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string[] $created_by__not_in Return links that were not created by these Belvo users. (optional)
     * @param  string $external_id Return links with this external ID. (optional)
     * @param  string[] $external_id__in Return links with these external IDs. (optional)
     * @param  string $institution_user_id Return links with this specific institution user ID. (optional)
     * @param  string[] $institution_user_id__in Return links with these institution user IDs. (optional)
     * @param  string $refresh_rate Return links with this refresh rate. Choose between &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;, &#x60;7d&#x60;, or &#x60;30d&#x60;. (optional)
     * @param  string $status Return links with this status. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. (optional)
     * @param  string[] $status__in Return links with these statuses. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2002
     */
    public function listLinks($page_size = '100', $page = null, $omit = null, $fields = null, $id = null, $id__in = null, $institution = null, $institution__in = null, $access_mode = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $created_by__not_in = null, $external_id = null, $external_id__in = null, $institution_user_id = null, $institution_user_id__in = null, $refresh_rate = null, $status = null, $status__in = null)
    {
        list($response) = $this->listLinksWithHttpInfo($page_size, $page, $omit, $fields, $id, $id__in, $institution, $institution__in, $access_mode, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $created_by__not_in, $external_id, $external_id__in, $institution_user_id, $institution_user_id__in, $refresh_rate, $status, $status__in);
        return $response;
    }

    /**
     * Operation listLinksWithHttpInfo
     *
     * List links
     *
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $institution Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). (optional)
     * @param  string[] $institution__in Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). (optional)
     * @param  string $access_mode Return links only with this access mode. Can be either &#x60;single&#x60; or &#x60;recurrent&#x60;. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string[] $created_by__not_in Return links that were not created by these Belvo users. (optional)
     * @param  string $external_id Return links with this external ID. (optional)
     * @param  string[] $external_id__in Return links with these external IDs. (optional)
     * @param  string $institution_user_id Return links with this specific institution user ID. (optional)
     * @param  string[] $institution_user_id__in Return links with these institution user IDs. (optional)
     * @param  string $refresh_rate Return links with this refresh rate. Choose between &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;, &#x60;7d&#x60;, or &#x60;30d&#x60;. (optional)
     * @param  string $status Return links with this status. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. (optional)
     * @param  string[] $status__in Return links with these statuses. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function listLinksWithHttpInfo($page_size = '100', $page = null, $omit = null, $fields = null, $id = null, $id__in = null, $institution = null, $institution__in = null, $access_mode = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $created_by__not_in = null, $external_id = null, $external_id__in = null, $institution_user_id = null, $institution_user_id__in = null, $refresh_rate = null, $status = null, $status__in = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2002';
        $request = $this->listLinksRequest($page_size, $page, $omit, $fields, $id, $id__in, $institution, $institution__in, $access_mode, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $created_by__not_in, $external_id, $external_id__in, $institution_user_id, $institution_user_id__in, $refresh_rate, $status, $status__in);

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
                        '\Swagger\Client\Model\InlineResponse2002',
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
     * Operation listLinksAsync
     *
     * List links
     *
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $institution Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). (optional)
     * @param  string[] $institution__in Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). (optional)
     * @param  string $access_mode Return links only with this access mode. Can be either &#x60;single&#x60; or &#x60;recurrent&#x60;. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string[] $created_by__not_in Return links that were not created by these Belvo users. (optional)
     * @param  string $external_id Return links with this external ID. (optional)
     * @param  string[] $external_id__in Return links with these external IDs. (optional)
     * @param  string $institution_user_id Return links with this specific institution user ID. (optional)
     * @param  string[] $institution_user_id__in Return links with these institution user IDs. (optional)
     * @param  string $refresh_rate Return links with this refresh rate. Choose between &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;, &#x60;7d&#x60;, or &#x60;30d&#x60;. (optional)
     * @param  string $status Return links with this status. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. (optional)
     * @param  string[] $status__in Return links with these statuses. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLinksAsync($page_size = '100', $page = null, $omit = null, $fields = null, $id = null, $id__in = null, $institution = null, $institution__in = null, $access_mode = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $created_by__not_in = null, $external_id = null, $external_id__in = null, $institution_user_id = null, $institution_user_id__in = null, $refresh_rate = null, $status = null, $status__in = null)
    {
        return $this->listLinksAsyncWithHttpInfo($page_size, $page, $omit, $fields, $id, $id__in, $institution, $institution__in, $access_mode, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $created_by__not_in, $external_id, $external_id__in, $institution_user_id, $institution_user_id__in, $refresh_rate, $status, $status__in)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listLinksAsyncWithHttpInfo
     *
     * List links
     *
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $institution Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). (optional)
     * @param  string[] $institution__in Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). (optional)
     * @param  string $access_mode Return links only with this access mode. Can be either &#x60;single&#x60; or &#x60;recurrent&#x60;. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string[] $created_by__not_in Return links that were not created by these Belvo users. (optional)
     * @param  string $external_id Return links with this external ID. (optional)
     * @param  string[] $external_id__in Return links with these external IDs. (optional)
     * @param  string $institution_user_id Return links with this specific institution user ID. (optional)
     * @param  string[] $institution_user_id__in Return links with these institution user IDs. (optional)
     * @param  string $refresh_rate Return links with this refresh rate. Choose between &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;, &#x60;7d&#x60;, or &#x60;30d&#x60;. (optional)
     * @param  string $status Return links with this status. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. (optional)
     * @param  string[] $status__in Return links with these statuses. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLinksAsyncWithHttpInfo($page_size = '100', $page = null, $omit = null, $fields = null, $id = null, $id__in = null, $institution = null, $institution__in = null, $access_mode = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $created_by__not_in = null, $external_id = null, $external_id__in = null, $institution_user_id = null, $institution_user_id__in = null, $refresh_rate = null, $status = null, $status__in = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2002';
        $request = $this->listLinksRequest($page_size, $page, $omit, $fields, $id, $id__in, $institution, $institution__in, $access_mode, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $created_by__not_in, $external_id, $external_id__in, $institution_user_id, $institution_user_id__in, $refresh_rate, $status, $status__in);

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
     * Create request for operation 'listLinks'
     *
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $omit Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $fields Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. (optional)
     * @param  string $id Return information only for this resource &#x60;id&#x60;. (optional)
     * @param  string[] $id__in Return information for these resource &#x60;id&#x60;s. (optional)
     * @param  string $institution Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). (optional)
     * @param  string[] $institution__in Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). (optional)
     * @param  string $access_mode Return links only with this access mode. Can be either &#x60;single&#x60; or &#x60;recurrent&#x60;. (optional)
     * @param  \DateTime $created_at Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gt Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__gte Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lt Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime $created_at__lte Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  \DateTime[] $created_at__range Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). (optional)
     * @param  string[] $created_by__not_in Return links that were not created by these Belvo users. (optional)
     * @param  string $external_id Return links with this external ID. (optional)
     * @param  string[] $external_id__in Return links with these external IDs. (optional)
     * @param  string $institution_user_id Return links with this specific institution user ID. (optional)
     * @param  string[] $institution_user_id__in Return links with these institution user IDs. (optional)
     * @param  string $refresh_rate Return links with this refresh rate. Choose between &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;, &#x60;7d&#x60;, or &#x60;30d&#x60;. (optional)
     * @param  string $status Return links with this status. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. (optional)
     * @param  string[] $status__in Return links with these statuses. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listLinksRequest($page_size = '100', $page = null, $omit = null, $fields = null, $id = null, $id__in = null, $institution = null, $institution__in = null, $access_mode = null, $created_at = null, $created_at__gt = null, $created_at__gte = null, $created_at__lt = null, $created_at__lte = null, $created_at__range = null, $created_by__not_in = null, $external_id = null, $external_id__in = null, $institution_user_id = null, $institution_user_id__in = null, $refresh_rate = null, $status = null, $status__in = null)
    {

        $resourcePath = '/api/links/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
        if ($access_mode !== null) {
            $queryParams['access_mode'] = ObjectSerializer::toQueryValue($access_mode, null);
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
        if (is_array($created_by__not_in)) {
            $created_by__not_in = ObjectSerializer::serializeCollection($created_by__not_in, 'csv', true);
        }
        if ($created_by__not_in !== null) {
            $queryParams['created_by__not_in'] = ObjectSerializer::toQueryValue($created_by__not_in, 'uuid');
        }
        // query params
        if ($external_id !== null) {
            $queryParams['external_id'] = ObjectSerializer::toQueryValue($external_id, null);
        }
        // query params
        if (is_array($external_id__in)) {
            $external_id__in = ObjectSerializer::serializeCollection($external_id__in, 'csv', true);
        }
        if ($external_id__in !== null) {
            $queryParams['external_id__in'] = ObjectSerializer::toQueryValue($external_id__in, null);
        }
        // query params
        if ($institution_user_id !== null) {
            $queryParams['institution_user_id'] = ObjectSerializer::toQueryValue($institution_user_id, null);
        }
        // query params
        if (is_array($institution_user_id__in)) {
            $institution_user_id__in = ObjectSerializer::serializeCollection($institution_user_id__in, 'csv', true);
        }
        if ($institution_user_id__in !== null) {
            $queryParams['institution_user_id__in'] = ObjectSerializer::toQueryValue($institution_user_id__in, null);
        }
        // query params
        if ($refresh_rate !== null) {
            $queryParams['refresh_rate'] = ObjectSerializer::toQueryValue($refresh_rate, null);
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
     * Operation modifyLinkDataRetrieval
     *
     * Modify a link's data retrieval
     *
     * @param  \Swagger\Client\Model\LinksIdBody1 $body body (required)
     * @param  string $id The &#x60;link.id&#x60; you want to change the &#x60;access_mode&#x60; for. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse201
     */
    public function modifyLinkDataRetrieval($body, $id)
    {
        list($response) = $this->modifyLinkDataRetrievalWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation modifyLinkDataRetrievalWithHttpInfo
     *
     * Modify a link's data retrieval
     *
     * @param  \Swagger\Client\Model\LinksIdBody1 $body (required)
     * @param  string $id The &#x60;link.id&#x60; you want to change the &#x60;access_mode&#x60; for. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse201, HTTP status code, HTTP response headers (array of strings)
     */
    public function modifyLinkDataRetrievalWithHttpInfo($body, $id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse201';
        $request = $this->modifyLinkDataRetrievalRequest($body, $id);

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
                        '\Swagger\Client\Model\InlineResponse201',
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
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\NotFound[]',
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
     * Operation modifyLinkDataRetrievalAsync
     *
     * Modify a link's data retrieval
     *
     * @param  \Swagger\Client\Model\LinksIdBody1 $body (required)
     * @param  string $id The &#x60;link.id&#x60; you want to change the &#x60;access_mode&#x60; for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyLinkDataRetrievalAsync($body, $id)
    {
        return $this->modifyLinkDataRetrievalAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation modifyLinkDataRetrievalAsyncWithHttpInfo
     *
     * Modify a link's data retrieval
     *
     * @param  \Swagger\Client\Model\LinksIdBody1 $body (required)
     * @param  string $id The &#x60;link.id&#x60; you want to change the &#x60;access_mode&#x60; for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function modifyLinkDataRetrievalAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse201';
        $request = $this->modifyLinkDataRetrievalRequest($body, $id);

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
     * Create request for operation 'modifyLinkDataRetrieval'
     *
     * @param  \Swagger\Client\Model\LinksIdBody1 $body (required)
     * @param  string $id The &#x60;link.id&#x60; you want to change the &#x60;access_mode&#x60; for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function modifyLinkDataRetrievalRequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling modifyLinkDataRetrieval'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling modifyLinkDataRetrieval'
            );
        }

        $resourcePath = '/api/links/{id}/';
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
     * Operation patchLinks
     *
     * Complete a links request
     *
     * @param  \Swagger\Client\Model\ApiLinksBody1 $body body (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse201
     */
    public function patchLinks($body)
    {
        list($response) = $this->patchLinksWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation patchLinksWithHttpInfo
     *
     * Complete a links request
     *
     * @param  \Swagger\Client\Model\ApiLinksBody1 $body (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse201, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchLinksWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse201';
        $request = $this->patchLinksRequest($body);

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
                        '\Swagger\Client\Model\InlineResponse201',
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
     * Operation patchLinksAsync
     *
     * Complete a links request
     *
     * @param  \Swagger\Client\Model\ApiLinksBody1 $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchLinksAsync($body)
    {
        return $this->patchLinksAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchLinksAsyncWithHttpInfo
     *
     * Complete a links request
     *
     * @param  \Swagger\Client\Model\ApiLinksBody1 $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchLinksAsyncWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse201';
        $request = $this->patchLinksRequest($body);

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
     * Create request for operation 'patchLinks'
     *
     * @param  \Swagger\Client\Model\ApiLinksBody1 $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function patchLinksRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling patchLinks'
            );
        }

        $resourcePath = '/api/links/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation registerLink
     *
     * Register a new link
     *
     * @param  \Swagger\Client\Model\ApiLinksBody $body body (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse201
     */
    public function registerLink($body)
    {
        list($response) = $this->registerLinkWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation registerLinkWithHttpInfo
     *
     * Register a new link
     *
     * @param  \Swagger\Client\Model\ApiLinksBody $body (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse201, HTTP status code, HTTP response headers (array of strings)
     */
    public function registerLinkWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse201';
        $request = $this->registerLinkRequest($body);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse201',
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
     * Operation registerLinkAsync
     *
     * Register a new link
     *
     * @param  \Swagger\Client\Model\ApiLinksBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registerLinkAsync($body)
    {
        return $this->registerLinkAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registerLinkAsyncWithHttpInfo
     *
     * Register a new link
     *
     * @param  \Swagger\Client\Model\ApiLinksBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registerLinkAsyncWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse201';
        $request = $this->registerLinkRequest($body);

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
     * Create request for operation 'registerLink'
     *
     * @param  \Swagger\Client\Model\ApiLinksBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registerLinkRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling registerLink'
            );
        }

        $resourcePath = '/api/links/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation updateLink
     *
     * Update a link's credentials
     *
     * @param  \Swagger\Client\Model\LinksIdBody $body body (required)
     * @param  string $id The &#x60;link.id&#x60; you want to update. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse201
     */
    public function updateLink($body, $id)
    {
        list($response) = $this->updateLinkWithHttpInfo($body, $id);
        return $response;
    }

    /**
     * Operation updateLinkWithHttpInfo
     *
     * Update a link's credentials
     *
     * @param  \Swagger\Client\Model\LinksIdBody $body (required)
     * @param  string $id The &#x60;link.id&#x60; you want to update. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse201, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateLinkWithHttpInfo($body, $id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse201';
        $request = $this->updateLinkRequest($body, $id);

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
                        '\Swagger\Client\Model\InlineResponse201',
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
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\NotFound[]',
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
     * Operation updateLinkAsync
     *
     * Update a link's credentials
     *
     * @param  \Swagger\Client\Model\LinksIdBody $body (required)
     * @param  string $id The &#x60;link.id&#x60; you want to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLinkAsync($body, $id)
    {
        return $this->updateLinkAsyncWithHttpInfo($body, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateLinkAsyncWithHttpInfo
     *
     * Update a link's credentials
     *
     * @param  \Swagger\Client\Model\LinksIdBody $body (required)
     * @param  string $id The &#x60;link.id&#x60; you want to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLinkAsyncWithHttpInfo($body, $id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse201';
        $request = $this->updateLinkRequest($body, $id);

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
     * Create request for operation 'updateLink'
     *
     * @param  \Swagger\Client\Model\LinksIdBody $body (required)
     * @param  string $id The &#x60;link.id&#x60; you want to update. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateLinkRequest($body, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateLink'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateLink'
            );
        }

        $resourcePath = '/api/links/{id}/';
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
            'PUT',
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
