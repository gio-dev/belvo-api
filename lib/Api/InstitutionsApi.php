<?php
/**
 * InstitutionsApi
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
 * InstitutionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InstitutionsApi
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
     * Operation detailInstitution
     *
     * Get an institution's details
     *
     * @param  string $id The &#x60;institution.id&#x60; you want to get detailed information about. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2001
     */
    public function detailInstitution($id)
    {
        list($response) = $this->detailInstitutionWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation detailInstitutionWithHttpInfo
     *
     * Get an institution's details
     *
     * @param  string $id The &#x60;institution.id&#x60; you want to get detailed information about. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function detailInstitutionWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2001';
        $request = $this->detailInstitutionRequest($id);

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
                        '\Swagger\Client\Model\InlineResponse2001',
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
     * Operation detailInstitutionAsync
     *
     * Get an institution's details
     *
     * @param  string $id The &#x60;institution.id&#x60; you want to get detailed information about. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailInstitutionAsync($id)
    {
        return $this->detailInstitutionAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation detailInstitutionAsyncWithHttpInfo
     *
     * Get an institution's details
     *
     * @param  string $id The &#x60;institution.id&#x60; you want to get detailed information about. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function detailInstitutionAsyncWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2001';
        $request = $this->detailInstitutionRequest($id);

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
     * Create request for operation 'detailInstitution'
     *
     * @param  string $id The &#x60;institution.id&#x60; you want to get detailed information about. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function detailInstitutionRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling detailInstitution'
            );
        }

        $resourcePath = '/api/institutions/{id}/';
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
     * Operation listInstitutions
     *
     * List institutions
     *
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $display_name Return institutions that partially match this display name. (optional)
     * @param  string $country_code Return institutions only for this two-letter country code. (optional)
     * @param  string[] $country_code__in Return institutions only for these two-letter country codes. (optional)
     * @param  string[] $resources__allin Return institutions that support these resources. (optional)
     * @param  string $name Return an institution with this Belvo-designated name. (optional)
     * @param  string[] $name__in Return institutions with one or more of these Belvo-designated names. (optional)
     * @param  string $status Return institutions with the given status. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. (optional)
     * @param  string[] $status__in Return institutions with one of the given statuses. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. (optional)
     * @param  string $type Return institutions of this type. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. (optional)
     * @param  string[] $type__in Return institutions of one of these types. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. (optional)
     * @param  string $website Return institutions with this website URL. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse200
     */
    public function listInstitutions($page_size = '100', $page = null, $display_name = null, $country_code = null, $country_code__in = null, $resources__allin = null, $name = null, $name__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $website = null)
    {
        list($response) = $this->listInstitutionsWithHttpInfo($page_size, $page, $display_name, $country_code, $country_code__in, $resources__allin, $name, $name__in, $status, $status__in, $type, $type__in, $website);
        return $response;
    }

    /**
     * Operation listInstitutionsWithHttpInfo
     *
     * List institutions
     *
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $display_name Return institutions that partially match this display name. (optional)
     * @param  string $country_code Return institutions only for this two-letter country code. (optional)
     * @param  string[] $country_code__in Return institutions only for these two-letter country codes. (optional)
     * @param  string[] $resources__allin Return institutions that support these resources. (optional)
     * @param  string $name Return an institution with this Belvo-designated name. (optional)
     * @param  string[] $name__in Return institutions with one or more of these Belvo-designated names. (optional)
     * @param  string $status Return institutions with the given status. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. (optional)
     * @param  string[] $status__in Return institutions with one of the given statuses. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. (optional)
     * @param  string $type Return institutions of this type. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. (optional)
     * @param  string[] $type__in Return institutions of one of these types. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. (optional)
     * @param  string $website Return institutions with this website URL. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function listInstitutionsWithHttpInfo($page_size = '100', $page = null, $display_name = null, $country_code = null, $country_code__in = null, $resources__allin = null, $name = null, $name__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $website = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse200';
        $request = $this->listInstitutionsRequest($page_size, $page, $display_name, $country_code, $country_code__in, $resources__allin, $name, $name__in, $status, $status__in, $type, $type__in, $website);

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
                        '\Swagger\Client\Model\InlineResponse200',
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
     * Operation listInstitutionsAsync
     *
     * List institutions
     *
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $display_name Return institutions that partially match this display name. (optional)
     * @param  string $country_code Return institutions only for this two-letter country code. (optional)
     * @param  string[] $country_code__in Return institutions only for these two-letter country codes. (optional)
     * @param  string[] $resources__allin Return institutions that support these resources. (optional)
     * @param  string $name Return an institution with this Belvo-designated name. (optional)
     * @param  string[] $name__in Return institutions with one or more of these Belvo-designated names. (optional)
     * @param  string $status Return institutions with the given status. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. (optional)
     * @param  string[] $status__in Return institutions with one of the given statuses. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. (optional)
     * @param  string $type Return institutions of this type. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. (optional)
     * @param  string[] $type__in Return institutions of one of these types. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. (optional)
     * @param  string $website Return institutions with this website URL. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInstitutionsAsync($page_size = '100', $page = null, $display_name = null, $country_code = null, $country_code__in = null, $resources__allin = null, $name = null, $name__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $website = null)
    {
        return $this->listInstitutionsAsyncWithHttpInfo($page_size, $page, $display_name, $country_code, $country_code__in, $resources__allin, $name, $name__in, $status, $status__in, $type, $type__in, $website)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listInstitutionsAsyncWithHttpInfo
     *
     * List institutions
     *
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $display_name Return institutions that partially match this display name. (optional)
     * @param  string $country_code Return institutions only for this two-letter country code. (optional)
     * @param  string[] $country_code__in Return institutions only for these two-letter country codes. (optional)
     * @param  string[] $resources__allin Return institutions that support these resources. (optional)
     * @param  string $name Return an institution with this Belvo-designated name. (optional)
     * @param  string[] $name__in Return institutions with one or more of these Belvo-designated names. (optional)
     * @param  string $status Return institutions with the given status. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. (optional)
     * @param  string[] $status__in Return institutions with one of the given statuses. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. (optional)
     * @param  string $type Return institutions of this type. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. (optional)
     * @param  string[] $type__in Return institutions of one of these types. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. (optional)
     * @param  string $website Return institutions with this website URL. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInstitutionsAsyncWithHttpInfo($page_size = '100', $page = null, $display_name = null, $country_code = null, $country_code__in = null, $resources__allin = null, $name = null, $name__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $website = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse200';
        $request = $this->listInstitutionsRequest($page_size, $page, $display_name, $country_code, $country_code__in, $resources__allin, $name, $name__in, $status, $status__in, $type, $type__in, $website);

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
     * Create request for operation 'listInstitutions'
     *
     * @param  int $page_size Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). (optional, default to 100)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  string $display_name Return institutions that partially match this display name. (optional)
     * @param  string $country_code Return institutions only for this two-letter country code. (optional)
     * @param  string[] $country_code__in Return institutions only for these two-letter country codes. (optional)
     * @param  string[] $resources__allin Return institutions that support these resources. (optional)
     * @param  string $name Return an institution with this Belvo-designated name. (optional)
     * @param  string[] $name__in Return institutions with one or more of these Belvo-designated names. (optional)
     * @param  string $status Return institutions with the given status. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. (optional)
     * @param  string[] $status__in Return institutions with one of the given statuses. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. (optional)
     * @param  string $type Return institutions of this type. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. (optional)
     * @param  string[] $type__in Return institutions of one of these types. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. (optional)
     * @param  string $website Return institutions with this website URL. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listInstitutionsRequest($page_size = '100', $page = null, $display_name = null, $country_code = null, $country_code__in = null, $resources__allin = null, $name = null, $name__in = null, $status = null, $status__in = null, $type = null, $type__in = null, $website = null)
    {

        $resourcePath = '/api/institutions/';
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
        if ($display_name !== null) {
            $queryParams['display_name'] = ObjectSerializer::toQueryValue($display_name, null);
        }
        // query params
        if ($country_code !== null) {
            $queryParams['country_code'] = ObjectSerializer::toQueryValue($country_code, null);
        }
        // query params
        if (is_array($country_code__in)) {
            $country_code__in = ObjectSerializer::serializeCollection($country_code__in, 'csv', true);
        }
        if ($country_code__in !== null) {
            $queryParams['country_code__in'] = ObjectSerializer::toQueryValue($country_code__in, null);
        }
        // query params
        if (is_array($resources__allin)) {
            $resources__allin = ObjectSerializer::serializeCollection($resources__allin, 'csv', true);
        }
        if ($resources__allin !== null) {
            $queryParams['resources__allin'] = ObjectSerializer::toQueryValue($resources__allin, null);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }
        // query params
        if (is_array($name__in)) {
            $name__in = ObjectSerializer::serializeCollection($name__in, 'csv', true);
        }
        if ($name__in !== null) {
            $queryParams['name__in'] = ObjectSerializer::toQueryValue($name__in, null);
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
        if ($website !== null) {
            $queryParams['website'] = ObjectSerializer::toQueryValue($website, null);
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
