<?php
/**
 * OwnerIndividualOFDABrazil
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
 * OwnerIndividualOFDABrazil Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OwnerIndividualOFDABrazil implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Owner Individual OFDA Brazil';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'link' => 'string',
        'internal_identification' => 'string',
        'collected_at' => '\DateTime',
        'created_at' => '\DateTime',
        'display_name' => 'string',
        'social_name' => 'string',
        'birth_date' => '\DateTime',
        'marital_status' => 'string',
        'marital_status_additional_info' => 'string',
        'gender' => 'string',
        'companies_id' => 'string[]',
        'is_local_resident' => 'bool',
        'document_id' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilDocumentId',
        'additional_documents' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilAdditionalDocuments[]',
        'nationalities' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilNationalities[]',
        'email' => 'string',
        'emails' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilEmails[]',
        'address' => 'string',
        'addresses' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilAddresses[]',
        'phone_number' => 'string',
        'phone_numbers' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilPhoneNumbers[]',
        'filiations' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFiliations[]',
        'financial_profile' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFinancialProfile',
        'financial_relation' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFinancialRelation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'link' => 'uuid',
        'internal_identification' => null,
        'collected_at' => 'date-time',
        'created_at' => 'date-time',
        'display_name' => null,
        'social_name' => null,
        'birth_date' => 'date',
        'marital_status' => null,
        'marital_status_additional_info' => null,
        'gender' => null,
        'companies_id' => null,
        'is_local_resident' => null,
        'document_id' => null,
        'additional_documents' => null,
        'nationalities' => null,
        'email' => 'email',
        'emails' => null,
        'address' => null,
        'addresses' => null,
        'phone_number' => null,
        'phone_numbers' => null,
        'filiations' => null,
        'financial_profile' => null,
        'financial_relation' => null
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
        'internal_identification' => 'internal_identification',
        'collected_at' => 'collected_at',
        'created_at' => 'created_at',
        'display_name' => 'display_name',
        'social_name' => 'social_name',
        'birth_date' => 'birth_date',
        'marital_status' => 'marital_status',
        'marital_status_additional_info' => 'marital_status_additional_info',
        'gender' => 'gender',
        'companies_id' => 'companies_id',
        'is_local_resident' => 'is_local_resident',
        'document_id' => 'document_id',
        'additional_documents' => 'additional_documents',
        'nationalities' => 'nationalities',
        'email' => 'email',
        'emails' => 'emails',
        'address' => 'address',
        'addresses' => 'addresses',
        'phone_number' => 'phone_number',
        'phone_numbers' => 'phone_numbers',
        'filiations' => 'filiations',
        'financial_profile' => 'financial_profile',
        'financial_relation' => 'financial_relation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'link' => 'setLink',
        'internal_identification' => 'setInternalIdentification',
        'collected_at' => 'setCollectedAt',
        'created_at' => 'setCreatedAt',
        'display_name' => 'setDisplayName',
        'social_name' => 'setSocialName',
        'birth_date' => 'setBirthDate',
        'marital_status' => 'setMaritalStatus',
        'marital_status_additional_info' => 'setMaritalStatusAdditionalInfo',
        'gender' => 'setGender',
        'companies_id' => 'setCompaniesId',
        'is_local_resident' => 'setIsLocalResident',
        'document_id' => 'setDocumentId',
        'additional_documents' => 'setAdditionalDocuments',
        'nationalities' => 'setNationalities',
        'email' => 'setEmail',
        'emails' => 'setEmails',
        'address' => 'setAddress',
        'addresses' => 'setAddresses',
        'phone_number' => 'setPhoneNumber',
        'phone_numbers' => 'setPhoneNumbers',
        'filiations' => 'setFiliations',
        'financial_profile' => 'setFinancialProfile',
        'financial_relation' => 'setFinancialRelation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'link' => 'getLink',
        'internal_identification' => 'getInternalIdentification',
        'collected_at' => 'getCollectedAt',
        'created_at' => 'getCreatedAt',
        'display_name' => 'getDisplayName',
        'social_name' => 'getSocialName',
        'birth_date' => 'getBirthDate',
        'marital_status' => 'getMaritalStatus',
        'marital_status_additional_info' => 'getMaritalStatusAdditionalInfo',
        'gender' => 'getGender',
        'companies_id' => 'getCompaniesId',
        'is_local_resident' => 'getIsLocalResident',
        'document_id' => 'getDocumentId',
        'additional_documents' => 'getAdditionalDocuments',
        'nationalities' => 'getNationalities',
        'email' => 'getEmail',
        'emails' => 'getEmails',
        'address' => 'getAddress',
        'addresses' => 'getAddresses',
        'phone_number' => 'getPhoneNumber',
        'phone_numbers' => 'getPhoneNumbers',
        'filiations' => 'getFiliations',
        'financial_profile' => 'getFinancialProfile',
        'financial_relation' => 'getFinancialRelation'
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

    const MARITAL_STATUS_SINGLE = 'SINGLE';
    const MARITAL_STATUS_MARRIED = 'MARRIED';
    const MARITAL_STATUS_WIDOWED = 'WIDOWED';
    const MARITAL_STATUS_SEPARATED = 'SEPARATED';
    const MARITAL_STATUS_DIVORCED = 'DIVORCED';
    const MARITAL_STATUS_CIVIL_UNION = 'CIVIL_UNION';
    const MARITAL_STATUS_OTHER = 'OTHER';
    const GENDER_FEMALE = 'FEMALE';
    const GENDER_MALE = 'MALE';
    const GENDER_OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMaritalStatusAllowableValues()
    {
        return [
            self::MARITAL_STATUS_SINGLE,
            self::MARITAL_STATUS_MARRIED,
            self::MARITAL_STATUS_WIDOWED,
            self::MARITAL_STATUS_SEPARATED,
            self::MARITAL_STATUS_DIVORCED,
            self::MARITAL_STATUS_CIVIL_UNION,
            self::MARITAL_STATUS_OTHER,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_FEMALE,
            self::GENDER_MALE,
            self::GENDER_OTHER,
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
        $this->container['internal_identification'] = isset($data['internal_identification']) ? $data['internal_identification'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['social_name'] = isset($data['social_name']) ? $data['social_name'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['marital_status'] = isset($data['marital_status']) ? $data['marital_status'] : null;
        $this->container['marital_status_additional_info'] = isset($data['marital_status_additional_info']) ? $data['marital_status_additional_info'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['companies_id'] = isset($data['companies_id']) ? $data['companies_id'] : null;
        $this->container['is_local_resident'] = isset($data['is_local_resident']) ? $data['is_local_resident'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['additional_documents'] = isset($data['additional_documents']) ? $data['additional_documents'] : null;
        $this->container['nationalities'] = isset($data['nationalities']) ? $data['nationalities'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['phone_numbers'] = isset($data['phone_numbers']) ? $data['phone_numbers'] : null;
        $this->container['filiations'] = isset($data['filiations']) ? $data['filiations'] : null;
        $this->container['financial_profile'] = isset($data['financial_profile']) ? $data['financial_profile'] : null;
        $this->container['financial_relation'] = isset($data['financial_relation']) ? $data['financial_relation'] : null;
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
        if ($this->container['internal_identification'] === null) {
            $invalidProperties[] = "'internal_identification' can't be null";
        }
        if ($this->container['collected_at'] === null) {
            $invalidProperties[] = "'collected_at' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['social_name'] === null) {
            $invalidProperties[] = "'social_name' can't be null";
        }
        if ($this->container['birth_date'] === null) {
            $invalidProperties[] = "'birth_date' can't be null";
        }
        if ($this->container['marital_status'] === null) {
            $invalidProperties[] = "'marital_status' can't be null";
        }
        $allowedValues = $this->getMaritalStatusAllowableValues();
        if (!is_null($this->container['marital_status']) && !in_array($this->container['marital_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'marital_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['marital_status_additional_info'] === null) {
            $invalidProperties[] = "'marital_status_additional_info' can't be null";
        }
        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['companies_id'] === null) {
            $invalidProperties[] = "'companies_id' can't be null";
        }
        if ($this->container['is_local_resident'] === null) {
            $invalidProperties[] = "'is_local_resident' can't be null";
        }
        if ($this->container['document_id'] === null) {
            $invalidProperties[] = "'document_id' can't be null";
        }
        if ($this->container['additional_documents'] === null) {
            $invalidProperties[] = "'additional_documents' can't be null";
        }
        if ($this->container['nationalities'] === null) {
            $invalidProperties[] = "'nationalities' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['emails'] === null) {
            $invalidProperties[] = "'emails' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ($this->container['phone_numbers'] === null) {
            $invalidProperties[] = "'phone_numbers' can't be null";
        }
        if ($this->container['filiations'] === null) {
            $invalidProperties[] = "'filiations' can't be null";
        }
        if ($this->container['financial_profile'] === null) {
            $invalidProperties[] = "'financial_profile' can't be null";
        }
        if ($this->container['financial_relation'] === null) {
            $invalidProperties[] = "'financial_relation' can't be null";
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
     * @param string $internal_identification The institution's internal identifier for the owner.
     *
     * @return $this
     */
    public function setInternalIdentification($internal_identification)
    {
        $this->container['internal_identification'] = $internal_identification;

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
     * @param string $display_name The full name of the individual, as provided by the institution.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets social_name
     *
     * @return string
     */
    public function getSocialName()
    {
        return $this->container['social_name'];
    }

    /**
     * Sets social_name
     *
     * @param string $social_name The social name of the individual, as generally accepted by the country.
     *
     * @return $this
     */
    public function setSocialName($social_name)
    {
        $this->container['social_name'] = $social_name;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime $birth_date The individual's date of birth, in `YYYY-MM-DD` format.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets marital_status
     *
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->container['marital_status'];
    }

    /**
     * Sets marital_status
     *
     * @param string $marital_status The individual's marital status. We return one of the following values:    - `SINGLE`   - `MARRIED`   - `WIDOWED`   - `SEPARATED`   - `DIVORCED`   - `CIVIL_UNION`   - `OTHER`
     *
     * @return $this
     */
    public function setMaritalStatus($marital_status)
    {
        $allowedValues = $this->getMaritalStatusAllowableValues();
        if (!in_array($marital_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'marital_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['marital_status'] = $marital_status;

        return $this;
    }

    /**
     * Gets marital_status_additional_info
     *
     * @return string
     */
    public function getMaritalStatusAdditionalInfo()
    {
        return $this->container['marital_status_additional_info'];
    }

    /**
     * Sets marital_status_additional_info
     *
     * @param string $marital_status_additional_info Additional information about the individual's marital status.
     *
     * @return $this
     */
    public function setMaritalStatusAdditionalInfo($marital_status_additional_info)
    {
        $this->container['marital_status_additional_info'] = $marital_status_additional_info;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender The individual's gender. We return on of the following values:    - `FEMALE`   - `MALE`   - `OTHER`
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets companies_id
     *
     * @return string[]
     */
    public function getCompaniesId()
    {
        return $this->container['companies_id'];
    }

    /**
     * Sets companies_id
     *
     * @param string[] $companies_id The institutions responsible for the creation and verification of the owner.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setCompaniesId($companies_id)
    {
        $this->container['companies_id'] = $companies_id;

        return $this;
    }

    /**
     * Gets is_local_resident
     *
     * @return bool
     */
    public function getIsLocalResident()
    {
        return $this->container['is_local_resident'];
    }

    /**
     * Sets is_local_resident
     *
     * @param bool $is_local_resident Boolean to indicate if the individual is a local resident of the country.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setIsLocalResident($is_local_resident)
    {
        $this->container['is_local_resident'] = $is_local_resident;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilDocumentId
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilDocumentId $document_id document_id
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets additional_documents
     *
     * @return \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilAdditionalDocuments[]
     */
    public function getAdditionalDocuments()
    {
        return $this->container['additional_documents'];
    }

    /**
     * Sets additional_documents
     *
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilAdditionalDocuments[] $additional_documents Detailed information regarding additional documents provided to prove the individuals ID.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setAdditionalDocuments($additional_documents)
    {
        $this->container['additional_documents'] = $additional_documents;

        return $this;
    }

    /**
     * Gets nationalities
     *
     * @return \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilNationalities[]
     */
    public function getNationalities()
    {
        return $this->container['nationalities'];
    }

    /**
     * Sets nationalities
     *
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilNationalities[] $nationalities Detailed information regarding the individual's nationalities.  Only required to be returned when `is_local_resident` is set to `false`.
     *
     * @return $this
     */
    public function setNationalities($nationalities)
    {
        $this->container['nationalities'] = $nationalities;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The account owner's registered email address.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilEmails[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilEmails[] $emails Additional list of emails the owner provided.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address The account owner's registered address.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilAddresses[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilAddresses[] $addresses Detailed information regarding the owner's addresses.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number The account owner's registered phone number.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilPhoneNumbers[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilPhoneNumbers[] $phone_numbers Detailed information regarding the owner's phone numbers.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets filiations
     *
     * @return \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFiliations[]
     */
    public function getFiliations()
    {
        return $this->container['filiations'];
    }

    /**
     * Sets filiations
     *
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFiliations[] $filiations Information regarding any familial relationships of the individual.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setFiliations($filiations)
    {
        $this->container['filiations'] = $filiations;

        return $this;
    }

    /**
     * Gets financial_profile
     *
     * @return \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFinancialProfile
     */
    public function getFinancialProfile()
    {
        return $this->container['financial_profile'];
    }

    /**
     * Sets financial_profile
     *
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFinancialProfile $financial_profile financial_profile
     *
     * @return $this
     */
    public function setFinancialProfile($financial_profile)
    {
        $this->container['financial_profile'] = $financial_profile;

        return $this;
    }

    /**
     * Gets financial_relation
     *
     * @return \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFinancialRelation
     */
    public function getFinancialRelation()
    {
        return $this->container['financial_relation'];
    }

    /**
     * Sets financial_relation
     *
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFinancialRelation $financial_relation financial_relation
     *
     * @return $this
     */
    public function setFinancialRelation($financial_relation)
    {
        $this->container['financial_relation'] = $financial_relation;

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
