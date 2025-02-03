<?php
/**
 * InstitutionsPaginatedResponseResults
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
 * InstitutionsPaginatedResponseResults Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InstitutionsPaginatedResponseResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InstitutionsPaginatedResponse_results';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'type' => 'string',
        'website' => 'string',
        'display_name' => 'string',
        'country_codes' => 'string[]',
        'primary_color' => 'string',
        'logo' => 'string',
        'icon_logo' => 'string',
        'text_logo' => 'string',
        'form_fields' => '\Swagger\Client\Model\InstitutionFormFields[]',
        'features' => '\Swagger\Client\Model\InstitutionFeatures[]',
        'resources' => 'string[]',
        'integration_type' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'type' => null,
        'website' => null,
        'display_name' => null,
        'country_codes' => null,
        'primary_color' => null,
        'logo' => null,
        'icon_logo' => null,
        'text_logo' => null,
        'form_fields' => null,
        'features' => null,
        'resources' => null,
        'integration_type' => null,
        'status' => null
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
        'name' => 'name',
        'type' => 'type',
        'website' => 'website',
        'display_name' => 'display_name',
        'country_codes' => 'country_codes',
        'primary_color' => 'primary_color',
        'logo' => 'logo',
        'icon_logo' => 'icon_logo',
        'text_logo' => 'text_logo',
        'form_fields' => 'form_fields',
        'features' => 'features',
        'resources' => 'resources',
        'integration_type' => 'integration_type',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'website' => 'setWebsite',
        'display_name' => 'setDisplayName',
        'country_codes' => 'setCountryCodes',
        'primary_color' => 'setPrimaryColor',
        'logo' => 'setLogo',
        'icon_logo' => 'setIconLogo',
        'text_logo' => 'setTextLogo',
        'form_fields' => 'setFormFields',
        'features' => 'setFeatures',
        'resources' => 'setResources',
        'integration_type' => 'setIntegrationType',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'website' => 'getWebsite',
        'display_name' => 'getDisplayName',
        'country_codes' => 'getCountryCodes',
        'primary_color' => 'getPrimaryColor',
        'logo' => 'getLogo',
        'icon_logo' => 'getIconLogo',
        'text_logo' => 'getTextLogo',
        'form_fields' => 'getFormFields',
        'features' => 'getFeatures',
        'resources' => 'getResources',
        'integration_type' => 'getIntegrationType',
        'status' => 'getStatus'
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

    const TYPE_BANK = 'bank';
    const TYPE_FISCAL = 'fiscal';
    const TYPE_EMPLOYMENT = 'employment';
    const INTEGRATION_TYPE_CREDENTIALS = 'credentials';
    const INTEGRATION_TYPE_OPENFINANCE = 'openfinance';
    const STATUS_HEALTHY = 'healthy';
    const STATUS_DOWN = 'down';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BANK,
            self::TYPE_FISCAL,
            self::TYPE_EMPLOYMENT,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntegrationTypeAllowableValues()
    {
        return [
            self::INTEGRATION_TYPE_CREDENTIALS,
            self::INTEGRATION_TYPE_OPENFINANCE,
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
            self::STATUS_HEALTHY,
            self::STATUS_DOWN
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['country_codes'] = isset($data['country_codes']) ? $data['country_codes'] : null;
        $this->container['primary_color'] = isset($data['primary_color']) ? $data['primary_color'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['icon_logo'] = isset($data['icon_logo']) ? $data['icon_logo'] : null;
        $this->container['text_logo'] = isset($data['text_logo']) ? $data['text_logo'] : null;
        $this->container['form_fields'] = isset($data['form_fields']) ? $data['form_fields'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['integration_type'] = isset($data['integration_type']) ? $data['integration_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIntegrationTypeAllowableValues();
        if (!is_null($this->container['integration_type']) && !in_array($this->container['integration_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'integration_type', must be one of '%s'",
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The ID of the institution as designated by Belvo.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the institution, as designated by Belvo.  Please see our [Institutions](https://developers.belvo.com/docs/institution) DevPortal article for a detailed list of institution names.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of institution. We return one of the following values:    - `bank`   - `fiscal`   - `employment`
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website The URL of the institution's website.
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name The customer-facing name of the institution.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets country_codes
     *
     * @return string[]
     */
    public function getCountryCodes()
    {
        return $this->container['country_codes'];
    }

    /**
     * Sets country_codes
     *
     * @param string[] $country_codes The country codes where the institution is available, for example: - 🇧🇷 BR (Brazil) - 🇨🇴 CO (Colombia) - 🇲🇽 MX (Mexico)
     *
     * @return $this
     */
    public function setCountryCodes($country_codes)
    {
        $this->container['country_codes'] = $country_codes;

        return $this;
    }

    /**
     * Gets primary_color
     *
     * @return string
     */
    public function getPrimaryColor()
    {
        return $this->container['primary_color'];
    }

    /**
     * Sets primary_color
     *
     * @param string $primary_color The primary color on the institution's website.
     *
     * @return $this
     */
    public function setPrimaryColor($primary_color)
    {
        $this->container['primary_color'] = $primary_color;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo The URL of the institution's logo.
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets icon_logo
     *
     * @return string
     */
    public function getIconLogo()
    {
        return $this->container['icon_logo'];
    }

    /**
     * Sets icon_logo
     *
     * @param string $icon_logo The URL of the institution's icon logo.
     *
     * @return $this
     */
    public function setIconLogo($icon_logo)
    {
        $this->container['icon_logo'] = $icon_logo;

        return $this;
    }

    /**
     * Gets text_logo
     *
     * @return string
     */
    public function getTextLogo()
    {
        return $this->container['text_logo'];
    }

    /**
     * Sets text_logo
     *
     * @param string $text_logo The URL of the institution's text logo.
     *
     * @return $this
     */
    public function setTextLogo($text_logo)
    {
        $this->container['text_logo'] = $text_logo;

        return $this;
    }

    /**
     * Gets form_fields
     *
     * @return \Swagger\Client\Model\InstitutionFormFields[]
     */
    public function getFormFields()
    {
        return $this->container['form_fields'];
    }

    /**
     * Sets form_fields
     *
     * @param \Swagger\Client\Model\InstitutionFormFields[] $form_fields form_fields
     *
     * @return $this
     */
    public function setFormFields($form_fields)
    {
        $this->container['form_fields'] = $form_fields;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \Swagger\Client\Model\InstitutionFeatures[]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \Swagger\Client\Model\InstitutionFeatures[] $features The features that the institution supports. If the institution has no special features, then Belvo returns an empty array.  Here is a list of the available features: - `token_required` indicates that the institution may require a token during link creation or when making any other requests.
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return string[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param string[] $resources A list of Belvo resources that you can use with the institution. This list includes one or more of the following resources:    - `ACCOUNTS`   - `BALANCES`   - `EMPLOYMENT_RECORDS`   - `INCOMES`   - `INVOICES`   - `OWNERS`   - `RECURRING_EXPENSES`   - `RISK_INSIGHTS`   - `TRANSACTIONS`   - `TAX_COMPLIANCE_STATUS`   - `TAX_DECLARATIONS`   - `TAX_RETENTIONS`   - `TAX_RETURNS`   - `TAX_STATUS`
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets integration_type
     *
     * @return string
     */
    public function getIntegrationType()
    {
        return $this->container['integration_type'];
    }

    /**
     * Sets integration_type
     *
     * @param string $integration_type The type of technology used to access the institution. We return one of the following values:  - `credentials`: Uses Belvo's scraping technology, combined with user credentials, to perform requests. - `openfinance`: Uses the bank's open finance API to perform requests.
     *
     * @return $this
     */
    public function setIntegrationType($integration_type)
    {
        $allowedValues = $this->getIntegrationTypeAllowableValues();
        if (!is_null($integration_type) && !in_array($integration_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'integration_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['integration_type'] = $integration_type;

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
     * @param string $status Indicates whether Belvo's integration with the institution is currently active (`healthy`) or undergoing maintenance (`down`).
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
