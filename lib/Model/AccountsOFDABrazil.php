<?php
/**
 * AccountsOFDABrazil
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
 * AccountsOFDABrazil Class Doc Comment
 *
 * @category Class
 * @description Details regarding the account.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsOFDABrazil implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Accounts OFDA Brazil';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'link' => 'string',
        'institution' => '\Swagger\Client\Model\AccountsOFDABrazilInstitution',
        'collected_at' => '\DateTime',
        'created_at' => '\DateTime',
        'last_accessed_at' => '\DateTime',
        'category' => 'string',
        'balance_type' => 'string',
        'overdraft' => '\Swagger\Client\Model\AccountsOFDABrazilOverdraft',
        'type' => 'string',
        'subtype' => 'string',
        'name' => 'string',
        'number' => 'string',
        'agency' => 'string',
        'check_digit' => 'string',
        'balance' => '\Swagger\Client\Model\AccountsOFDABrazilBalance',
        'currency' => 'string',
        'public_identification_name' => 'string',
        'public_identification_value' => 'string',
        'internal_identification' => 'string',
        'credit_data' => '\Swagger\Client\Model\AccountsOFDABrazilCreditData',
        'loan_data' => '\Swagger\Client\Model\AccountsOFDABrazilLoanData',
        'funds_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'link' => 'uuid',
        'institution' => null,
        'collected_at' => 'date-time',
        'created_at' => 'date-time',
        'last_accessed_at' => 'date-time',
        'category' => null,
        'balance_type' => null,
        'overdraft' => null,
        'type' => null,
        'subtype' => null,
        'name' => null,
        'number' => null,
        'agency' => null,
        'check_digit' => null,
        'balance' => null,
        'currency' => null,
        'public_identification_name' => null,
        'public_identification_value' => null,
        'internal_identification' => null,
        'credit_data' => null,
        'loan_data' => null,
        'funds_data' => null
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
        'link' => 'link',
        'institution' => 'institution',
        'collected_at' => 'collected_at',
        'created_at' => 'created_at',
        'last_accessed_at' => 'last_accessed_at',
        'category' => 'category',
        'balance_type' => 'balance_type',
        'overdraft' => 'overdraft',
        'type' => 'type',
        'subtype' => 'subtype',
        'name' => 'name',
        'number' => 'number',
        'agency' => 'agency',
        'check_digit' => 'check_digit',
        'balance' => 'balance',
        'currency' => 'currency',
        'public_identification_name' => 'public_identification_name',
        'public_identification_value' => 'public_identification_value',
        'internal_identification' => 'internal_identification',
        'credit_data' => 'credit_data',
        'loan_data' => 'loan_data',
        'funds_data' => 'funds_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'link' => 'setLink',
        'institution' => 'setInstitution',
        'collected_at' => 'setCollectedAt',
        'created_at' => 'setCreatedAt',
        'last_accessed_at' => 'setLastAccessedAt',
        'category' => 'setCategory',
        'balance_type' => 'setBalanceType',
        'overdraft' => 'setOverdraft',
        'type' => 'setType',
        'subtype' => 'setSubtype',
        'name' => 'setName',
        'number' => 'setNumber',
        'agency' => 'setAgency',
        'check_digit' => 'setCheckDigit',
        'balance' => 'setBalance',
        'currency' => 'setCurrency',
        'public_identification_name' => 'setPublicIdentificationName',
        'public_identification_value' => 'setPublicIdentificationValue',
        'internal_identification' => 'setInternalIdentification',
        'credit_data' => 'setCreditData',
        'loan_data' => 'setLoanData',
        'funds_data' => 'setFundsData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'link' => 'getLink',
        'institution' => 'getInstitution',
        'collected_at' => 'getCollectedAt',
        'created_at' => 'getCreatedAt',
        'last_accessed_at' => 'getLastAccessedAt',
        'category' => 'getCategory',
        'balance_type' => 'getBalanceType',
        'overdraft' => 'getOverdraft',
        'type' => 'getType',
        'subtype' => 'getSubtype',
        'name' => 'getName',
        'number' => 'getNumber',
        'agency' => 'getAgency',
        'check_digit' => 'getCheckDigit',
        'balance' => 'getBalance',
        'currency' => 'getCurrency',
        'public_identification_name' => 'getPublicIdentificationName',
        'public_identification_value' => 'getPublicIdentificationValue',
        'internal_identification' => 'getInternalIdentification',
        'credit_data' => 'getCreditData',
        'loan_data' => 'getLoanData',
        'funds_data' => 'getFundsData'
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

    const CATEGORY_ADVANCE_DEPOSIT_ACCOUNT = 'ADVANCE_DEPOSIT_ACCOUNT';
    const CATEGORY_CHECKING_ACCOUNT = 'CHECKING_ACCOUNT';
    const CATEGORY_CREDIT_CARD = 'CREDIT_CARD';
    const CATEGORY_FINANCING_ACCOUNT = 'FINANCING_ACCOUNT';
    const CATEGORY_INVESTMENT_ACCOUNT = 'INVESTMENT_ACCOUNT';
    const CATEGORY_INVOICE_FINANCING_ACCOUNT = 'INVOICE_FINANCING_ACCOUNT';
    const CATEGORY_LOAN_ACCOUNT = 'LOAN_ACCOUNT';
    const CATEGORY_PENSION_FUND_ACCOUNT = 'PENSION_FUND_ACCOUNT';
    const CATEGORY_SAVINGS_ACCOUNT = 'SAVINGS_ACCOUNT';
    const CATEGORY_UNCATEGORIZED = 'UNCATEGORIZED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_ADVANCE_DEPOSIT_ACCOUNT,
            self::CATEGORY_CHECKING_ACCOUNT,
            self::CATEGORY_CREDIT_CARD,
            self::CATEGORY_FINANCING_ACCOUNT,
            self::CATEGORY_INVESTMENT_ACCOUNT,
            self::CATEGORY_INVOICE_FINANCING_ACCOUNT,
            self::CATEGORY_LOAN_ACCOUNT,
            self::CATEGORY_PENSION_FUND_ACCOUNT,
            self::CATEGORY_SAVINGS_ACCOUNT,
            self::CATEGORY_UNCATEGORIZED,
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
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['institution'] = isset($data['institution']) ? $data['institution'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['last_accessed_at'] = isset($data['last_accessed_at']) ? $data['last_accessed_at'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['balance_type'] = isset($data['balance_type']) ? $data['balance_type'] : null;
        $this->container['overdraft'] = isset($data['overdraft']) ? $data['overdraft'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['subtype'] = isset($data['subtype']) ? $data['subtype'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['check_digit'] = isset($data['check_digit']) ? $data['check_digit'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['public_identification_name'] = isset($data['public_identification_name']) ? $data['public_identification_name'] : null;
        $this->container['public_identification_value'] = isset($data['public_identification_value']) ? $data['public_identification_value'] : null;
        $this->container['internal_identification'] = isset($data['internal_identification']) ? $data['internal_identification'] : null;
        $this->container['credit_data'] = isset($data['credit_data']) ? $data['credit_data'] : null;
        $this->container['loan_data'] = isset($data['loan_data']) ? $data['loan_data'] : null;
        $this->container['funds_data'] = isset($data['funds_data']) ? $data['funds_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['institution'] === null) {
            $invalidProperties[] = "'institution' can't be null";
        }
        if ($this->container['collected_at'] === null) {
            $invalidProperties[] = "'collected_at' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['last_accessed_at'] === null) {
            $invalidProperties[] = "'last_accessed_at' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['balance_type'] === null) {
            $invalidProperties[] = "'balance_type' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['subtype'] === null) {
            $invalidProperties[] = "'subtype' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['agency'] === null) {
            $invalidProperties[] = "'agency' can't be null";
        }
        if ($this->container['check_digit'] === null) {
            $invalidProperties[] = "'check_digit' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['public_identification_name'] === null) {
            $invalidProperties[] = "'public_identification_name' can't be null";
        }
        if ($this->container['public_identification_value'] === null) {
            $invalidProperties[] = "'public_identification_value' can't be null";
        }
        if ($this->container['internal_identification'] === null) {
            $invalidProperties[] = "'internal_identification' can't be null";
        }
        if ($this->container['credit_data'] === null) {
            $invalidProperties[] = "'credit_data' can't be null";
        }
        if ($this->container['loan_data'] === null) {
            $invalidProperties[] = "'loan_data' can't be null";
        }
        if ($this->container['funds_data'] === null) {
            $invalidProperties[] = "'funds_data' can't be null";
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
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link The `link.id` the data belongs to.
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets institution
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazilInstitution
     */
    public function getInstitution()
    {
        return $this->container['institution'];
    }

    /**
     * Sets institution
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilInstitution $institution institution
     *
     * @return $this
     */
    public function setInstitution($institution)
    {
        $this->container['institution'] = $institution;

        return $this;
    }

    /**
     * Gets collected_at
     *
     * @return \DateTime
     */
    public function getCollectedAt()
    {
        return $this->container['collected_at'];
    }

    /**
     * Sets collected_at
     *
     * @param \DateTime $collected_at The ISO-8601 timestamp when the data point was collected.
     *
     * @return $this
     */
    public function setCollectedAt($collected_at)
    {
        $this->container['collected_at'] = $collected_at;

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
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category The type of account. We return one of the following enum values:   - `ADVANCE_DEPOSIT_ACCOUNT`   - `CHECKING_ACCOUNT`   - `CREDIT_CARD`   - `FINANCING_ACCOUNT`   - `INVESTMENT_ACCOUNT`   - `INVOICE_FINANCING_ACCOUNT`   - `LOAN_ACCOUNT`   - `PENSION_FUND_ACCOUNT`   - `SAVINGS_ACCOUNT`   - `UNCATEGORIZED`
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets balance_type
     *
     * @return string
     */
    public function getBalanceType()
    {
        return $this->container['balance_type'];
    }

    /**
     * Sets balance_type
     *
     * @param string $balance_type Indicates whether this account is either an `ASSET` or a `LIABILITY`. You can consider the balance of an `ASSET` as being positive, while the balance of a `LIABILITY` as negative.
     *
     * @return $this
     */
    public function setBalanceType($balance_type)
    {
        $this->container['balance_type'] = $balance_type;

        return $this;
    }

    /**
     * Gets overdraft
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazilOverdraft
     */
    public function getOverdraft()
    {
        return $this->container['overdraft'];
    }

    /**
     * Sets overdraft
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilOverdraft $overdraft overdraft
     *
     * @return $this
     */
    public function setOverdraft($overdraft)
    {
        $this->container['overdraft'] = $overdraft;

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
     * @param string $type The account type, as designated by the institution.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets subtype
     *
     * @return string
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     *
     * @param string $subtype The account subtype, as designated by the institution.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setSubtype($subtype)
    {
        $this->container['subtype'] = $subtype;

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
     * @param string $name The account name, as given by the institution.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number The account number, as designated by the institution.
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets agency
     *
     * @return string
     */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
     * Sets agency
     *
     * @param string $agency The branch code where the product was opened.
     *
     * @return $this
     */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;

        return $this;
    }

    /**
     * Gets check_digit
     *
     * @return string
     */
    public function getCheckDigit()
    {
        return $this->container['check_digit'];
    }

    /**
     * Sets check_digit
     *
     * @param string $check_digit The check digit of the product's number, if applicable.
     *
     * @return $this
     */
    public function setCheckDigit($check_digit)
    {
        $this->container['check_digit'] = $check_digit;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazilBalance
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilBalance $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The three-letter currency code (ISO-4217).  > **Non-nullable:** A value must be returned by Brazil's open finance network if the `balances` field is available.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets public_identification_name
     *
     * @return string
     */
    public function getPublicIdentificationName()
    {
        return $this->container['public_identification_name'];
    }

    /**
     * Sets public_identification_name
     *
     * @param string $public_identification_name The public name for the type of identification. For 🇧🇷 Brazilian savings and checking accounts, this field will be `AGENCY/ACCOUNT`.
     *
     * @return $this
     */
    public function setPublicIdentificationName($public_identification_name)
    {
        $this->container['public_identification_name'] = $public_identification_name;

        return $this;
    }

    /**
     * Gets public_identification_value
     *
     * @return string
     */
    public function getPublicIdentificationValue()
    {
        return $this->container['public_identification_value'];
    }

    /**
     * Sets public_identification_value
     *
     * @param string $public_identification_value The value for the `public_identification_name`.  For 🇧🇷 OFDA Brazilian savings and checking accounts, this field will be the agency and bank account number, separated by a slash. For example: `0444/45722-0`.  For 🇧🇷 OFDA Brazilian credit card accounts, we will return a string of concatenated credit card numbers associated with the account. For example: \"8763,9076,5522\"
     *
     * @return $this
     */
    public function setPublicIdentificationValue($public_identification_value)
    {
        $this->container['public_identification_value'] = $public_identification_value;

        return $this;
    }

    /**
     * Gets internal_identification
     *
     * @return string
     */
    public function getInternalIdentification()
    {
        return $this->container['internal_identification'];
    }

    /**
     * Sets internal_identification
     *
     * @param string $internal_identification The institution's internal identification for the account.  > **Non-nullable:** A value must be returned by Brazil's open finance network if the `balances` field is available.
     *
     * @return $this
     */
    public function setInternalIdentification($internal_identification)
    {
        $this->container['internal_identification'] = $internal_identification;

        return $this;
    }

    /**
     * Gets credit_data
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazilCreditData
     */
    public function getCreditData()
    {
        return $this->container['credit_data'];
    }

    /**
     * Sets credit_data
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilCreditData $credit_data credit_data
     *
     * @return $this
     */
    public function setCreditData($credit_data)
    {
        $this->container['credit_data'] = $credit_data;

        return $this;
    }

    /**
     * Gets loan_data
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazilLoanData
     */
    public function getLoanData()
    {
        return $this->container['loan_data'];
    }

    /**
     * Sets loan_data
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilLoanData $loan_data loan_data
     *
     * @return $this
     */
    public function setLoanData($loan_data)
    {
        $this->container['loan_data'] = $loan_data;

        return $this;
    }

    /**
     * Gets funds_data
     *
     * @return string
     */
    public function getFundsData()
    {
        return $this->container['funds_data'];
    }

    /**
     * Sets funds_data
     *
     * @param string $funds_data **Note:** This field is not applicable for OF Brazil and will return null.
     *
     * @return $this
     */
    public function setFundsData($funds_data)
    {
        $this->container['funds_data'] = $funds_data;

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
