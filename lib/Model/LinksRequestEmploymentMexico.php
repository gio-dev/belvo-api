<?php
/**
 * LinksRequestEmploymentMexico
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
 * LinksRequestEmploymentMexico Class Doc Comment
 *
 * @category Class
 * @description The request body to create a link for employment institutions in Mexico.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinksRequestEmploymentMexico implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LinksRequestEmploymentMexico';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'institution' => 'string',
        'username' => 'string',
        'username2' => 'string',
        'external_id' => 'string',
        'access_mode' => 'string',
        'fetch_resources' => 'string[]',
        'credentials_storage' => 'string',
        'stale_in' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'institution' => null,
        'username' => null,
        'username2' => null,
        'external_id' => null,
        'access_mode' => null,
        'fetch_resources' => null,
        'credentials_storage' => null,
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
        'institution' => 'institution',
        'username' => 'username',
        'username2' => 'username2',
        'external_id' => 'external_id',
        'access_mode' => 'access_mode',
        'fetch_resources' => 'fetch_resources',
        'credentials_storage' => 'credentials_storage',
        'stale_in' => 'stale_in'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'institution' => 'setInstitution',
        'username' => 'setUsername',
        'username2' => 'setUsername2',
        'external_id' => 'setExternalId',
        'access_mode' => 'setAccessMode',
        'fetch_resources' => 'setFetchResources',
        'credentials_storage' => 'setCredentialsStorage',
        'stale_in' => 'setStaleIn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'institution' => 'getInstitution',
        'username' => 'getUsername',
        'username2' => 'getUsername2',
        'external_id' => 'getExternalId',
        'access_mode' => 'getAccessMode',
        'fetch_resources' => 'getFetchResources',
        'credentials_storage' => 'getCredentialsStorage',
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
        $this->container['institution'] = isset($data['institution']) ? $data['institution'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['username2'] = isset($data['username2']) ? $data['username2'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['access_mode'] = isset($data['access_mode']) ? $data['access_mode'] : 'recurrent';
        $this->container['fetch_resources'] = isset($data['fetch_resources']) ? $data['fetch_resources'] : null;
        $this->container['credentials_storage'] = isset($data['credentials_storage']) ? $data['credentials_storage'] : null;
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

        if ($this->container['institution'] === null) {
            $invalidProperties[] = "'institution' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        $allowedValues = $this->getAccessModeAllowableValues();
        if (!is_null($this->container['access_mode']) && !in_array($this->container['access_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'access_mode', must be one of '%s'",
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
     * @param string $institution The Belvo name for the institution. For employment institutions in Mexico, you can select the following institutions:  - `imss_mx_employment` - `issste_mx_employment` - `planet_mx_employment` (Sandbox institution)
     *
     * @return $this
     */
    public function setInstitution($institution)
    {
        $this->container['institution'] = $institution;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username The user's CURP (ID) used to log in to the institution.
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets username2
     *
     * @return string
     */
    public function getUsername2()
    {
        return $this->container['username2'];
    }

    /**
     * Sets username2
     *
     * @param string $username2 The user's email address used to log in to the institution. Note required for `issste_mx_employment`.
     *
     * @return $this
     */
    public function setUsername2($username2)
    {
        $this->container['username2'] = $username2;

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
     * @param string $external_id An additional identifier for the link, provided by you, to store in the Belvo database. **Cannot** include any Personal Identifiable Information (PII). **Must** be at least three characters long.   If we identify that the identifier contains PII, we will force a `null` value. For more information, see our [Link creation article](https://developers.belvo.com/docs/link-creation-best-practices#adding-your-own-identifier).
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

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
     * @param string $access_mode The type of link to create.  - Use `single` to do ad hoc one-time POST requests for accounts, owners, and transactions. - Use `recurrent` to have Belvo access information on a recurrent basis so you always have fresh account, owner, balance, and transaction data.  For more information, see our [Links](https://developers.belvo.com/docs/links-and-institutions#links) article.
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
     * @param string[] $fetch_resources An array of resources that you would like to receive a historical update for.  For employment institutions, you can select the following resources:   - `OWNERS`   - `EMPLOYMENT_RECORDS`   - `EMPLOYMENT_METRICS` (For Mexico's IMSS only)
     *
     * @return $this
     */
    public function setFetchResources($fetch_resources)
    {
        $this->container['fetch_resources'] = $fetch_resources;

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
     * @param string $credentials_storage Indicates whether or not to store credentials (and the duration for which to store the credentials).  - For recurrent links, this is set to `store` by default (and cannot be changed).  - For single links, this is set to `365d` by default.  Choose either:   - `store` to store credentials (until the link is deleted)   - `nostore` to not store credentials   -  Any value between `1d` and `365d` to indicate the number of days you want the credentials to be stored.
     *
     * @return $this
     */
    public function setCredentialsStorage($credentials_storage)
    {
        $this->container['credentials_storage'] = $credentials_storage;

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
     * @param string $stale_in Indicates how long any data should be stored in Belvo's database for the link (both single and recurrent). For example, if you send through `90d`, Belvo will remove any data from its database relating to the user after 90 days.  > **Note**: Belvo will only remove data for links that have not been updated in the period you provide in `stale_in`. >  > For example, if you set `stale_in` to `42d` and only request information once on that day, then Belvo will remove any data associated with the link after 42 days. However, if you make another request five days later, then Belvo will restart the day counter to that day.  By default Belvo stores user data for 365 days, unless the link is deleted.
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
