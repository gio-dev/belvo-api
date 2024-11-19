<?php
/**
 * OwnerBusinessOpenFinanceBrazil
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
 * OwnerBusinessOpenFinanceBrazil Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OwnerBusinessOpenFinanceBrazil implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OwnerBusinessOpenFinanceBrazil';

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
        'company_name' => 'string',
        'trade_name' => 'string',
        'incorporation_date' => '\DateTime',
        'companies_id' => 'string[]',
        'document_id' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilDocumentId',
        'additional_documents' => '\Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilAdditionalDocuments[]',
        'email' => 'string',
        'emails' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilEmails[]',
        'address' => 'string',
        'addresses' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilAddresses[]',
        'phone_number' => 'string',
        'phone_numbers' => '\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilPhoneNumbers[]',
        'parties' => '\Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilParties[]',
        'financial_profile' => '\Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilFinancialProfile',
        'financial_relation' => '\Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilFinancialRelation'
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
        'company_name' => null,
        'trade_name' => null,
        'incorporation_date' => 'date',
        'companies_id' => null,
        'document_id' => null,
        'additional_documents' => null,
        'email' => 'email',
        'emails' => null,
        'address' => null,
        'addresses' => null,
        'phone_number' => null,
        'phone_numbers' => null,
        'parties' => null,
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
        'company_name' => 'company_name',
        'trade_name' => 'trade_name',
        'incorporation_date' => 'incorporation_date',
        'companies_id' => 'companies_id',
        'document_id' => 'document_id',
        'additional_documents' => 'additional_documents',
        'email' => 'email',
        'emails' => 'emails',
        'address' => 'address',
        'addresses' => 'addresses',
        'phone_number' => 'phone_number',
        'phone_numbers' => 'phone_numbers',
        'parties' => 'parties',
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
        'company_name' => 'setCompanyName',
        'trade_name' => 'setTradeName',
        'incorporation_date' => 'setIncorporationDate',
        'companies_id' => 'setCompaniesId',
        'document_id' => 'setDocumentId',
        'additional_documents' => 'setAdditionalDocuments',
        'email' => 'setEmail',
        'emails' => 'setEmails',
        'address' => 'setAddress',
        'addresses' => 'setAddresses',
        'phone_number' => 'setPhoneNumber',
        'phone_numbers' => 'setPhoneNumbers',
        'parties' => 'setParties',
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
        'company_name' => 'getCompanyName',
        'trade_name' => 'getTradeName',
        'incorporation_date' => 'getIncorporationDate',
        'companies_id' => 'getCompaniesId',
        'document_id' => 'getDocumentId',
        'additional_documents' => 'getAdditionalDocuments',
        'email' => 'getEmail',
        'emails' => 'getEmails',
        'address' => 'getAddress',
        'addresses' => 'getAddresses',
        'phone_number' => 'getPhoneNumber',
        'phone_numbers' => 'getPhoneNumbers',
        'parties' => 'getParties',
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
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['trade_name'] = isset($data['trade_name']) ? $data['trade_name'] : null;
        $this->container['incorporation_date'] = isset($data['incorporation_date']) ? $data['incorporation_date'] : null;
        $this->container['companies_id'] = isset($data['companies_id']) ? $data['companies_id'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['additional_documents'] = isset($data['additional_documents']) ? $data['additional_documents'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['phone_numbers'] = isset($data['phone_numbers']) ? $data['phone_numbers'] : null;
        $this->container['parties'] = isset($data['parties']) ? $data['parties'] : null;
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
        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['trade_name'] === null) {
            $invalidProperties[] = "'trade_name' can't be null";
        }
        if ($this->container['incorporation_date'] === null) {
            $invalidProperties[] = "'incorporation_date' can't be null";
        }
        if ($this->container['companies_id'] === null) {
            $invalidProperties[] = "'companies_id' can't be null";
        }
        if ($this->container['document_id'] === null) {
            $invalidProperties[] = "'document_id' can't be null";
        }
        if ($this->container['additional_documents'] === null) {
            $invalidProperties[] = "'additional_documents' can't be null";
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
        if ($this->container['parties'] === null) {
            $invalidProperties[] = "'parties' can't be null";
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
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name The full (official) name of the business, as provided by the institution.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets trade_name
     *
     * @return string
     */
    public function getTradeName()
    {
        return $this->container['trade_name'];
    }

    /**
     * Sets trade_name
     *
     * @param string $trade_name The trade name of the business.
     *
     * @return $this
     */
    public function setTradeName($trade_name)
    {
        $this->container['trade_name'] = $trade_name;

        return $this;
    }

    /**
     * Gets incorporation_date
     *
     * @return \DateTime
     */
    public function getIncorporationDate()
    {
        return $this->container['incorporation_date'];
    }

    /**
     * Sets incorporation_date
     *
     * @param \DateTime $incorporation_date The date that the business was incorporated, in `YYYY-MM-DD` format.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setIncorporationDate($incorporation_date)
    {
        $this->container['incorporation_date'] = $incorporation_date;

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
     * @return \Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilAdditionalDocuments[]
     */
    public function getAdditionalDocuments()
    {
        return $this->container['additional_documents'];
    }

    /**
     * Sets additional_documents
     *
     * @param \Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilAdditionalDocuments[] $additional_documents Detailed information regarding additional documents provided to prove the business's ID.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setAdditionalDocuments($additional_documents)
    {
        $this->container['additional_documents'] = $additional_documents;

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
     * @param string $email The account owner's registered email address.
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
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilEmails[] $emails Additional list of emails the owner provided.
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
     * @param string $address The accounts owners registered address.
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
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilAddresses[] $addresses Detailed information regarding the owner's addresses.
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
     * @param string $phone_number The account owner's registered phone number.
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
     * @param \Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilPhoneNumbers[] $phone_numbers Detailed information regarding the owner's `phone_number`s.
     *
     * @return $this
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets parties
     *
     * @return \Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilParties[]
     */
    public function getParties()
    {
        return $this->container['parties'];
    }

    /**
     * Sets parties
     *
     * @param \Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilParties[] $parties Detailed information regarding the parties allowed to act on the owner's behalf.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setParties($parties)
    {
        $this->container['parties'] = $parties;

        return $this;
    }

    /**
     * Gets financial_profile
     *
     * @return \Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilFinancialProfile
     */
    public function getFinancialProfile()
    {
        return $this->container['financial_profile'];
    }

    /**
     * Sets financial_profile
     *
     * @param \Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilFinancialProfile $financial_profile financial_profile
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
     * @return \Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilFinancialRelation
     */
    public function getFinancialRelation()
    {
        return $this->container['financial_relation'];
    }

    /**
     * Sets financial_relation
     *
     * @param \Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilFinancialRelation $financial_relation financial_relation
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
