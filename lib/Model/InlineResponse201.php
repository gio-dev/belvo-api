<?php
/**
 * InlineResponse201
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse201 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse201 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_201';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'institution' => 'string',
        'access_mode' => 'string',
        'last_accessed_at' => '\DateTime',
        'created_at' => '\DateTime',
        'external_id' => 'string',
        'institution_user_id' => 'string',
        'status' => 'string',
        'created_by' => 'string',
        'refresh_rate' => 'string',
        'credentials_storage' => 'string',
        'fetch_resources' => 'string[]',
        'stale_in' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'institution' => null,
        'access_mode' => null,
        'last_accessed_at' => 'date-time',
        'created_at' => 'date-time',
        'external_id' => null,
        'institution_user_id' => null,
        'status' => null,
        'created_by' => 'uuid',
        'refresh_rate' => null,
        'credentials_storage' => null,
        'fetch_resources' => null,
        'stale_in' => null
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
        'id' => 'id',
        'institution' => 'institution',
        'access_mode' => 'access_mode',
        'last_accessed_at' => 'last_accessed_at',
        'created_at' => 'created_at',
        'external_id' => 'external_id',
        'institution_user_id' => 'institution_user_id',
        'status' => 'status',
        'created_by' => 'created_by',
        'refresh_rate' => 'refresh_rate',
        'credentials_storage' => 'credentials_storage',
        'fetch_resources' => 'fetch_resources',
        'stale_in' => 'stale_in'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'institution' => 'setInstitution',
        'access_mode' => 'setAccessMode',
        'last_accessed_at' => 'setLastAccessedAt',
        'created_at' => 'setCreatedAt',
        'external_id' => 'setExternalId',
        'institution_user_id' => 'setInstitutionUserId',
        'status' => 'setStatus',
        'created_by' => 'setCreatedBy',
        'refresh_rate' => 'setRefreshRate',
        'credentials_storage' => 'setCredentialsStorage',
        'fetch_resources' => 'setFetchResources',
        'stale_in' => 'setStaleIn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'institution' => 'getInstitution',
        'access_mode' => 'getAccessMode',
        'last_accessed_at' => 'getLastAccessedAt',
        'created_at' => 'getCreatedAt',
        'external_id' => 'getExternalId',
        'institution_user_id' => 'getInstitutionUserId',
        'status' => 'getStatus',
        'created_by' => 'getCreatedBy',
        'refresh_rate' => 'getRefreshRate',
        'credentials_storage' => 'getCredentialsStorage',
        'fetch_resources' => 'getFetchResources',
        'stale_in' => 'getStaleIn'
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

    const ACCESS_MODE_SINGLE = 'single';
    const ACCESS_MODE_RECURRENT = 'recurrent';
    const ACCESS_MODE_NULL = 'null';
    const STATUS_VALID = 'valid';
    const STATUS_INVALID = 'invalid';
    const STATUS_UNCONFIRMED = 'unconfirmed';
    const STATUS_TOKEN_REQUIRED = 'token_required';
    const REFRESH_RATE__6H = '6h';
    const REFRESH_RATE__12H = '12h';
    const REFRESH_RATE__24H = '24h';
    const REFRESH_RATE__7D = '7d';
    const REFRESH_RATE__30D = '30d';
    const REFRESH_RATE_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessModeAllowableValues()
    {
        return [
            self::ACCESS_MODE_SINGLE,
            self::ACCESS_MODE_RECURRENT,
            self::ACCESS_MODE_NULL,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_VALID,
            self::STATUS_INVALID,
            self::STATUS_UNCONFIRMED,
            self::STATUS_TOKEN_REQUIRED,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefreshRateAllowableValues()
    {
        return [
            self::REFRESH_RATE__6H,
            self::REFRESH_RATE__12H,
            self::REFRESH_RATE__24H,
            self::REFRESH_RATE__7D,
            self::REFRESH_RATE__30D,
            self::REFRESH_RATE_NULL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['institution'] = isset($data['institution']) ? $data['institution'] : null;
        $this->container['access_mode'] = isset($data['access_mode']) ? $data['access_mode'] : null;
        $this->container['last_accessed_at'] = isset($data['last_accessed_at']) ? $data['last_accessed_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['institution_user_id'] = isset($data['institution_user_id']) ? $data['institution_user_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['refresh_rate'] = isset($data['refresh_rate']) ? $data['refresh_rate'] : '7d';
        $this->container['credentials_storage'] = isset($data['credentials_storage']) ? $data['credentials_storage'] : null;
        $this->container['fetch_resources'] = isset($data['fetch_resources']) ? $data['fetch_resources'] : null;
        $this->container['stale_in'] = isset($data['stale_in']) ? $data['stale_in'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccessModeAllowableValues();
        if (!is_null($this->container['access_mode']) && !in_array($this->container['access_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'access_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRefreshRateAllowableValues();
        if (!is_null($this->container['refresh_rate']) && !in_array($this->container['refresh_rate'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'refresh_rate', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Belvo's unique identifier for the current item.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets institution
     *
     * @return string
     */
    public function getInstitution()
    {
        return $this->container['institution'];
    }

    /**
     * Sets institution
     *
     * @param string $institution Belvo's name for the institution.
     *
     * @return $this
     */
    public function setInstitution($institution)
    {
        $this->container['institution'] = $institution;

        return $this;
    }

    /**
     * Gets access_mode
     *
     * @return string
     */
    public function getAccessMode()
    {
        return $this->container['access_mode'];
    }

    /**
     * Sets access_mode
     *
     * @param string $access_mode The link type. For more information, see our [Links](https://developers.belvo.com/docs/links-and-institutions#links) article. We return one of the following enum values:   - `single`   - `recurrent`   - `null`
     *
     * @return $this
     */
    public function setAccessMode($access_mode)
    {
        $allowedValues = $this->getAccessModeAllowableValues();
        if (!is_null($access_mode) && !in_array($access_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'access_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['access_mode'] = $access_mode;

        return $this;
    }

    /**
     * Gets last_accessed_at
     *
     * @return \DateTime
     */
    public function getLastAccessedAt()
    {
        return $this->container['last_accessed_at'];
    }

    /**
     * Sets last_accessed_at
     *
     * @param \DateTime $last_accessed_at The ISO-8601 timestamp of Belvo's most recent successful access to the institution for the given link.
     *
     * @return $this
     */
    public function setLastAccessedAt($last_accessed_at)
    {
        $this->container['last_accessed_at'] = $last_accessed_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The ISO-8601 timestamp of when the data point was created in Belvo's database.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id The `external_id` you provided as an additional identifier for the link. For more information, see our [Link creation article](https://developers.belvo.com/docs/link-creation-best-practices#adding-your-own-identifier).
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets institution_user_id
     *
     * @return string
     */
    public function getInstitutionUserId()
    {
        return $this->container['institution_user_id'];
    }

    /**
     * Sets institution_user_id
     *
     * @param string $institution_user_id <div style=\"background-color:#f4f6f8; border-left: 6px solid #0663F9;padding: 12px;margin-left: 25px; border-radius: 4px; margin-right: 25px\"> <strong>Info:</strong> Only applicable for links created <b>after 08-02-2022</b>. </div>   A unique 44-character string that can be used to identify a user at a given institution.   📚 Check out our [Avoiding duplicated links](https://developers.belvo.com/docs/link-creation-best-practices#avoiding-duplicated-links) DevPortal article for more information and tips on how to use it.
     *
     * @return $this
     */
    public function setInstitutionUserId($institution_user_id)
    {
        $this->container['institution_user_id'] = $institution_user_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The current status of the link. For more information, see our [Link](https://developers.belvo.com/docs/links-and-institutions#links) article in the devportal. We return one of the following values:   - `valid`   - `invalid`   - `unconfirmed`   - `token_required`
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string $created_by The unique ID for the user that created this item.
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets refresh_rate
     *
     * @return string
     */
    public function getRefreshRate()
    {
        return $this->container['refresh_rate'];
    }

    /**
     * Sets refresh_rate
     *
     * @param string $refresh_rate The update refresh rate for the recurrent link. For more information, check out our [recurrent link documentation](https://developers.belvo.com/docs/links-and-institutions#recurrent-links) in our DevPortal. We return one of the following enum values:   - `6h`   - `12h`   - `24h`   - `7d` (default)   - `30d` (once a month)   - `null` (for single links)
     *
     * @return $this
     */
    public function setRefreshRate($refresh_rate)
    {
        $allowedValues = $this->getRefreshRateAllowableValues();
        if (!is_null($refresh_rate) && !in_array($refresh_rate, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'refresh_rate', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refresh_rate'] = $refresh_rate;

        return $this;
    }

    /**
     * Gets credentials_storage
     *
     * @return string
     */
    public function getCredentialsStorage()
    {
        return $this->container['credentials_storage'];
    }

    /**
     * Sets credentials_storage
     *
     * @param string $credentials_storage Indicates how long credentials are stored. For links where `access_mode=recurrent`, this is set to `store`.  We return one of the following values:    - `store` - credentials are stored (until the link is deleted).   - `nostore` - credentials are not stored.   -  Any value between `1d` and `365d` to indicate the number of days the credentials are stored (from when the link was `created_at`).
     *
     * @return $this
     */
    public function setCredentialsStorage($credentials_storage)
    {
        $this->container['credentials_storage'] = $credentials_storage;

        return $this;
    }

    /**
     * Gets fetch_resources
     *
     * @return string[]
     */
    public function getFetchResources()
    {
        return $this->container['fetch_resources'];
    }

    /**
     * Sets fetch_resources
     *
     * @param string[] $fetch_resources An array of resources that you will receive a historical update for.
     *
     * @return $this
     */
    public function setFetchResources($fetch_resources)
    {
        $this->container['fetch_resources'] = $fetch_resources;

        return $this;
    }

    /**
     * Gets stale_in
     *
     * @return string
     */
    public function getStaleIn()
    {
        return $this->container['stale_in'];
    }

    /**
     * Sets stale_in
     *
     * @param string $stale_in Indicates how long any data will be stored in Belvo's database for the link (both single and recurrent), relative to the `last_accessed_at` parameter.
     *
     * @return $this
     */
    public function setStaleIn($stale_in)
    {
        $this->container['stale_in'] = $stale_in;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
