<?php
/**
 * ApicoemploymentsSalaryAndBenefitDetails
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
 * ApicoemploymentsSalaryAndBenefitDetails Class Doc Comment
 *
 * @category Class
 * @description Details regarding the monthly salary and benefits the employee received from the employer.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApicoemploymentsSalaryAndBenefitDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apicoemployments_salary_and_benefit_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'month' => 'string',
        'gross_amount' => 'float',
        'net_amount' => 'float',
        'employment_type' => 'string',
        'employment_type_additional_info' => 'string',
        'parafiscal_contribution' => 'bool',
        'salary_comprehensive' => 'bool',
        'salary_type' => 'string',
        'pension_fund_name' => 'string',
        'healthcare_provider_name' => 'string',
        'status_changes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'month' => null,
        'gross_amount' => null,
        'net_amount' => null,
        'employment_type' => null,
        'employment_type_additional_info' => null,
        'parafiscal_contribution' => null,
        'salary_comprehensive' => null,
        'salary_type' => null,
        'pension_fund_name' => null,
        'healthcare_provider_name' => null,
        'status_changes' => null
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
        'month' => 'month',
        'gross_amount' => 'gross_amount',
        'net_amount' => 'net_amount',
        'employment_type' => 'employment_type',
        'employment_type_additional_info' => 'employment_type_additional_info',
        'parafiscal_contribution' => 'parafiscal_contribution',
        'salary_comprehensive' => 'salary_comprehensive',
        'salary_type' => 'salary_type',
        'pension_fund_name' => 'pension_fund_name',
        'healthcare_provider_name' => 'healthcare_provider_name',
        'status_changes' => 'status_changes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'month' => 'setMonth',
        'gross_amount' => 'setGrossAmount',
        'net_amount' => 'setNetAmount',
        'employment_type' => 'setEmploymentType',
        'employment_type_additional_info' => 'setEmploymentTypeAdditionalInfo',
        'parafiscal_contribution' => 'setParafiscalContribution',
        'salary_comprehensive' => 'setSalaryComprehensive',
        'salary_type' => 'setSalaryType',
        'pension_fund_name' => 'setPensionFundName',
        'healthcare_provider_name' => 'setHealthcareProviderName',
        'status_changes' => 'setStatusChanges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'month' => 'getMonth',
        'gross_amount' => 'getGrossAmount',
        'net_amount' => 'getNetAmount',
        'employment_type' => 'getEmploymentType',
        'employment_type_additional_info' => 'getEmploymentTypeAdditionalInfo',
        'parafiscal_contribution' => 'getParafiscalContribution',
        'salary_comprehensive' => 'getSalaryComprehensive',
        'salary_type' => 'getSalaryType',
        'pension_fund_name' => 'getPensionFundName',
        'healthcare_provider_name' => 'getHealthcareProviderName',
        'status_changes' => 'getStatusChanges'
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

    const EMPLOYMENT_TYPE_SALARIED = 'SALARIED';
    const EMPLOYMENT_TYPE_CONTRACTUAL = 'CONTRACTUAL';
    const EMPLOYMENT_TYPE_PENSIONED = 'PENSIONED';
    const SALARY_TYPE_FIXED = 'FIXED';
    const SALARY_TYPE_VARIABLE = 'VARIABLE';
    const STATUS_CHANGES_FIRST_MONTH = 'FIRST_MONTH';
    const STATUS_CHANGES_FINAL_MONTH = 'FINAL_MONTH';
    const STATUS_CHANGES_ON_LEAVE = 'ON_LEAVE';
    const STATUS_CHANGES_RETIREMENT_MONTH = 'RETIREMENT_MONTH';
    const STATUS_CHANGES_ON_VACATION = 'ON_VACATION';
    const STATUS_CHANGES_PERMANENT_SALARY_CHANGE = 'PERMANENT_SALARY_CHANGE';
    const STATUS_CHANGES_TEMPORARY_SALARY_CHANGE = 'TEMPORARY_SALARY_CHANGE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmploymentTypeAllowableValues()
    {
        return [
            self::EMPLOYMENT_TYPE_SALARIED,
            self::EMPLOYMENT_TYPE_CONTRACTUAL,
            self::EMPLOYMENT_TYPE_PENSIONED,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSalaryTypeAllowableValues()
    {
        return [
            self::SALARY_TYPE_FIXED,
            self::SALARY_TYPE_VARIABLE,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusChangesAllowableValues()
    {
        return [
            self::STATUS_CHANGES_FIRST_MONTH
            self::STATUS_CHANGES_FINAL_MONTH
            self::STATUS_CHANGES_ON_LEAVE
            self::STATUS_CHANGES_RETIREMENT_MONTH
            self::STATUS_CHANGES_ON_VACATION
            self::STATUS_CHANGES_PERMANENT_SALARY_CHANGE
            self::STATUS_CHANGES_TEMPORARY_SALARY_CHANGE
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
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['gross_amount'] = isset($data['gross_amount']) ? $data['gross_amount'] : null;
        $this->container['net_amount'] = isset($data['net_amount']) ? $data['net_amount'] : null;
        $this->container['employment_type'] = isset($data['employment_type']) ? $data['employment_type'] : null;
        $this->container['employment_type_additional_info'] = isset($data['employment_type_additional_info']) ? $data['employment_type_additional_info'] : null;
        $this->container['parafiscal_contribution'] = isset($data['parafiscal_contribution']) ? $data['parafiscal_contribution'] : null;
        $this->container['salary_comprehensive'] = isset($data['salary_comprehensive']) ? $data['salary_comprehensive'] : null;
        $this->container['salary_type'] = isset($data['salary_type']) ? $data['salary_type'] : null;
        $this->container['pension_fund_name'] = isset($data['pension_fund_name']) ? $data['pension_fund_name'] : null;
        $this->container['healthcare_provider_name'] = isset($data['healthcare_provider_name']) ? $data['healthcare_provider_name'] : null;
        $this->container['status_changes'] = isset($data['status_changes']) ? $data['status_changes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEmploymentTypeAllowableValues();
        if (!is_null($this->container['employment_type']) && !in_array($this->container['employment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'employment_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSalaryTypeAllowableValues();
        if (!is_null($this->container['salary_type']) && !in_array($this->container['salary_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'salary_type', must be one of '%s'",
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
     * Gets month
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param string $month The month the salary and benefits were paid, in `YYYY-MM` format.
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets gross_amount
     *
     * @return float
     */
    public function getGrossAmount()
    {
        return $this->container['gross_amount'];
    }

    /**
     * Sets gross_amount
     *
     * @param float $gross_amount The total gross amount of the person's salary before deductions.
     *
     * @return $this
     */
    public function setGrossAmount($gross_amount)
    {
        $this->container['gross_amount'] = $gross_amount;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return float
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param float $net_amount The net amount of the person's salary after deductions (social security contributions, tax, and so on).
     *
     * @return $this
     */
    public function setNetAmount($net_amount)
    {
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets employment_type
     *
     * @return string
     */
    public function getEmploymentType()
    {
        return $this->container['employment_type'];
    }

    /**
     * Sets employment_type
     *
     * @param string $employment_type The contract type the employee has with the employer.
     *
     * @return $this
     */
    public function setEmploymentType($employment_type)
    {
        $allowedValues = $this->getEmploymentTypeAllowableValues();
        if (!is_null($employment_type) && !in_array($employment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'employment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['employment_type'] = $employment_type;

        return $this;
    }

    /**
     * Gets employment_type_additional_info
     *
     * @return string
     */
    public function getEmploymentTypeAdditionalInfo()
    {
        return $this->container['employment_type_additional_info'];
    }

    /**
     * Sets employment_type_additional_info
     *
     * @param string $employment_type_additional_info Additional information about the `employment_type`.
     *
     * @return $this
     */
    public function setEmploymentTypeAdditionalInfo($employment_type_additional_info)
    {
        $this->container['employment_type_additional_info'] = $employment_type_additional_info;

        return $this;
    }

    /**
     * Gets parafiscal_contribution
     *
     * @return bool
     */
    public function getParafiscalContribution()
    {
        return $this->container['parafiscal_contribution'];
    }

    /**
     * Sets parafiscal_contribution
     *
     * @param bool $parafiscal_contribution Indicates whether the person needs to make additional contributions to healthcare, welfare, or tax regimes.
     *
     * @return $this
     */
    public function setParafiscalContribution($parafiscal_contribution)
    {
        $this->container['parafiscal_contribution'] = $parafiscal_contribution;

        return $this;
    }

    /**
     * Gets salary_comprehensive
     *
     * @return bool
     */
    public function getSalaryComprehensive()
    {
        return $this->container['salary_comprehensive'];
    }

    /**
     * Sets salary_comprehensive
     *
     * @param bool $salary_comprehensive Indicates whether the salary includes all mandatory legal benfits and bonuses.
     *
     * @return $this
     */
    public function setSalaryComprehensive($salary_comprehensive)
    {
        $this->container['salary_comprehensive'] = $salary_comprehensive;

        return $this;
    }

    /**
     * Gets salary_type
     *
     * @return string
     */
    public function getSalaryType()
    {
        return $this->container['salary_type'];
    }

    /**
     * Sets salary_type
     *
     * @param string $salary_type Indicates what kind of salary the person retrieves. Can be either `FIXED` or `VARIABLE`.
     *
     * @return $this
     */
    public function setSalaryType($salary_type)
    {
        $allowedValues = $this->getSalaryTypeAllowableValues();
        if (!is_null($salary_type) && !in_array($salary_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'salary_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['salary_type'] = $salary_type;

        return $this;
    }

    /**
     * Gets pension_fund_name
     *
     * @return string
     */
    public function getPensionFundName()
    {
        return $this->container['pension_fund_name'];
    }

    /**
     * Sets pension_fund_name
     *
     * @param string $pension_fund_name The name of the pension fund that the person contributes to.
     *
     * @return $this
     */
    public function setPensionFundName($pension_fund_name)
    {
        $this->container['pension_fund_name'] = $pension_fund_name;

        return $this;
    }

    /**
     * Gets healthcare_provider_name
     *
     * @return string
     */
    public function getHealthcareProviderName()
    {
        return $this->container['healthcare_provider_name'];
    }

    /**
     * Sets healthcare_provider_name
     *
     * @param string $healthcare_provider_name The name of the healthcare provider that the person contributes to.
     *
     * @return $this
     */
    public function setHealthcareProviderName($healthcare_provider_name)
    {
        $this->container['healthcare_provider_name'] = $healthcare_provider_name;

        return $this;
    }

    /**
     * Gets status_changes
     *
     * @return string[]
     */
    public function getStatusChanges()
    {
        return $this->container['status_changes'];
    }

    /**
     * Sets status_changes
     *
     * @param string[] $status_changes An array of strings that indicate why the salary may be different from regular payments. Can be any of the following:    - `FIRST_MONTH` -  Indicates whether the person starting working for the employer in this month.   - `FINAL_MONTH` -  Indicates whether the person stopped working for the employer in this month.   - `ON_LEAVE` -  Indicates whether the person is on parental (or other) leave in this month.   - `RETIREMENT_MONTH` -  Indicates whether the person went on retirement after this month.   - `ON_VACATION` -  Indicates whether the person is on vacation in this month.   - `PERMANENT_SALARY_CHANGE` -  Indicates whether the person received a permanent change in salary this month.   - `TEMPORARY_SALARY_CHANGE` -  Indicates whether the person received an adhoc change in salary this month.
     *
     * @return $this
     */
    public function setStatusChanges($status_changes)
    {
        $allowedValues = $this->getStatusChangesAllowableValues();
        if (!is_null($status_changes) && array_diff($status_changes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_changes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_changes'] = $status_changes;

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
