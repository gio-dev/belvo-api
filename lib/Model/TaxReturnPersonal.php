<?php
/**
 * TaxReturnPersonal
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
 * TaxReturnPersonal Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxReturnPersonal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Tax Return Personal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'link' => 'string',
        'collected_at' => '\DateTime',
        'created_at' => '\DateTime',
        'informacion_general' => 'object',
        'sueldos_salarios' => 'object',
        'servicios_profesionales' => 'object',
        'deducciones_personales' => 'object',
        'determinacion_impuesto' => 'object',
        'retenciones' => 'object',
        'dividendos' => 'object',
        'datos_informativos' => 'object',
        'pdf' => 'string',
        'receipt_pdf' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'link' => 'uuid',
        'collected_at' => 'date-time',
        'created_at' => 'date-time',
        'informacion_general' => null,
        'sueldos_salarios' => null,
        'servicios_profesionales' => null,
        'deducciones_personales' => null,
        'determinacion_impuesto' => null,
        'retenciones' => null,
        'dividendos' => null,
        'datos_informativos' => null,
        'pdf' => 'binary',
        'receipt_pdf' => 'binary'
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
        'collected_at' => 'collected_at',
        'created_at' => 'created_at',
        'informacion_general' => 'informacion_general',
        'sueldos_salarios' => 'sueldos_salarios',
        'servicios_profesionales' => 'servicios_profesionales',
        'deducciones_personales' => 'deducciones_personales',
        'determinacion_impuesto' => 'determinacion_impuesto',
        'retenciones' => 'retenciones',
        'dividendos' => 'dividendos',
        'datos_informativos' => 'datos_informativos',
        'pdf' => 'pdf',
        'receipt_pdf' => 'receipt_pdf'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'link' => 'setLink',
        'collected_at' => 'setCollectedAt',
        'created_at' => 'setCreatedAt',
        'informacion_general' => 'setInformacionGeneral',
        'sueldos_salarios' => 'setSueldosSalarios',
        'servicios_profesionales' => 'setServiciosProfesionales',
        'deducciones_personales' => 'setDeduccionesPersonales',
        'determinacion_impuesto' => 'setDeterminacionImpuesto',
        'retenciones' => 'setRetenciones',
        'dividendos' => 'setDividendos',
        'datos_informativos' => 'setDatosInformativos',
        'pdf' => 'setPdf',
        'receipt_pdf' => 'setReceiptPdf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'link' => 'getLink',
        'collected_at' => 'getCollectedAt',
        'created_at' => 'getCreatedAt',
        'informacion_general' => 'getInformacionGeneral',
        'sueldos_salarios' => 'getSueldosSalarios',
        'servicios_profesionales' => 'getServiciosProfesionales',
        'deducciones_personales' => 'getDeduccionesPersonales',
        'determinacion_impuesto' => 'getDeterminacionImpuesto',
        'retenciones' => 'getRetenciones',
        'dividendos' => 'getDividendos',
        'datos_informativos' => 'getDatosInformativos',
        'pdf' => 'getPdf',
        'receipt_pdf' => 'getReceiptPdf'
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
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['informacion_general'] = isset($data['informacion_general']) ? $data['informacion_general'] : null;
        $this->container['sueldos_salarios'] = isset($data['sueldos_salarios']) ? $data['sueldos_salarios'] : null;
        $this->container['servicios_profesionales'] = isset($data['servicios_profesionales']) ? $data['servicios_profesionales'] : null;
        $this->container['deducciones_personales'] = isset($data['deducciones_personales']) ? $data['deducciones_personales'] : null;
        $this->container['determinacion_impuesto'] = isset($data['determinacion_impuesto']) ? $data['determinacion_impuesto'] : null;
        $this->container['retenciones'] = isset($data['retenciones']) ? $data['retenciones'] : null;
        $this->container['dividendos'] = isset($data['dividendos']) ? $data['dividendos'] : null;
        $this->container['datos_informativos'] = isset($data['datos_informativos']) ? $data['datos_informativos'] : null;
        $this->container['pdf'] = isset($data['pdf']) ? $data['pdf'] : null;
        $this->container['receipt_pdf'] = isset($data['receipt_pdf']) ? $data['receipt_pdf'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['collected_at'] === null) {
            $invalidProperties[] = "'collected_at' can't be null";
        }
        if ($this->container['informacion_general'] === null) {
            $invalidProperties[] = "'informacion_general' can't be null";
        }
        if ($this->container['sueldos_salarios'] === null) {
            $invalidProperties[] = "'sueldos_salarios' can't be null";
        }
        if ($this->container['servicios_profesionales'] === null) {
            $invalidProperties[] = "'servicios_profesionales' can't be null";
        }
        if ($this->container['deducciones_personales'] === null) {
            $invalidProperties[] = "'deducciones_personales' can't be null";
        }
        if ($this->container['determinacion_impuesto'] === null) {
            $invalidProperties[] = "'determinacion_impuesto' can't be null";
        }
        if ($this->container['retenciones'] === null) {
            $invalidProperties[] = "'retenciones' can't be null";
        }
        if ($this->container['dividendos'] === null) {
            $invalidProperties[] = "'dividendos' can't be null";
        }
        if ($this->container['pdf'] === null) {
            $invalidProperties[] = "'pdf' can't be null";
        }
        if ($this->container['receipt_pdf'] === null) {
            $invalidProperties[] = "'receipt_pdf' can't be null";
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
     * Gets informacion_general
     *
     * @return object
     */
    public function getInformacionGeneral()
    {
        return $this->container['informacion_general'];
    }

    /**
     * Sets informacion_general
     *
     * @param object $informacion_general General information on the tax return (year, RFC, return type, person/company name, and so on).
     *
     * @return $this
     */
    public function setInformacionGeneral($informacion_general)
    {
        $this->container['informacion_general'] = $informacion_general;

        return $this;
    }

    /**
     * Gets sueldos_salarios
     *
     * @return object
     */
    public function getSueldosSalarios()
    {
        return $this->container['sueldos_salarios'];
    }

    /**
     * Sets sueldos_salarios
     *
     * @param object $sueldos_salarios Details regarding the income information together combined with withheld taxes.
     *
     * @return $this
     */
    public function setSueldosSalarios($sueldos_salarios)
    {
        $this->container['sueldos_salarios'] = $sueldos_salarios;

        return $this;
    }

    /**
     * Gets servicios_profesionales
     *
     * @return object
     */
    public function getServiciosProfesionales()
    {
        return $this->container['servicios_profesionales'];
    }

    /**
     * Sets servicios_profesionales
     *
     * @param object $servicios_profesionales Details regarding the income and tax information from professional services provided.
     *
     * @return $this
     */
    public function setServiciosProfesionales($servicios_profesionales)
    {
        $this->container['servicios_profesionales'] = $servicios_profesionales;

        return $this;
    }

    /**
     * Gets deducciones_personales
     *
     * @return object
     */
    public function getDeduccionesPersonales()
    {
        return $this->container['deducciones_personales'];
    }

    /**
     * Sets deducciones_personales
     *
     * @param object $deducciones_personales List of all personal tax deductions.
     *
     * @return $this
     */
    public function setDeduccionesPersonales($deducciones_personales)
    {
        $this->container['deducciones_personales'] = $deducciones_personales;

        return $this;
    }

    /**
     * Gets determinacion_impuesto
     *
     * @return object
     */
    public function getDeterminacionImpuesto()
    {
        return $this->container['determinacion_impuesto'];
    }

    /**
     * Sets determinacion_impuesto
     *
     * @param object $determinacion_impuesto Details regarding the final tax return.
     *
     * @return $this
     */
    public function setDeterminacionImpuesto($determinacion_impuesto)
    {
        $this->container['determinacion_impuesto'] = $determinacion_impuesto;

        return $this;
    }

    /**
     * Gets retenciones
     *
     * @return object
     */
    public function getRetenciones()
    {
        return $this->container['retenciones'];
    }

    /**
     * Sets retenciones
     *
     * @param object $retenciones Details on the already withheld taxes.
     *
     * @return $this
     */
    public function setRetenciones($retenciones)
    {
        $this->container['retenciones'] = $retenciones;

        return $this;
    }

    /**
     * Gets dividendos
     *
     * @return object
     */
    public function getDividendos()
    {
        return $this->container['dividendos'];
    }

    /**
     * Sets dividendos
     *
     * @param object $dividendos Details regarding dividends.
     *
     * @return $this
     */
    public function setDividendos($dividendos)
    {
        $this->container['dividendos'] = $dividendos;

        return $this;
    }

    /**
     * Gets datos_informativos
     *
     * @return object
     */
    public function getDatosInformativos()
    {
        return $this->container['datos_informativos'];
    }

    /**
     * Sets datos_informativos
     *
     * @param object $datos_informativos Extra informative data on the tax return.
     *
     * @return $this
     */
    public function setDatosInformativos($datos_informativos)
    {
        $this->container['datos_informativos'] = $datos_informativos;

        return $this;
    }

    /**
     * Gets pdf
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->container['pdf'];
    }

    /**
     * Sets pdf
     *
     * @param string $pdf Tax return PDF as a binary.
     *
     * @return $this
     */
    public function setPdf($pdf)
    {
        $this->container['pdf'] = $pdf;

        return $this;
    }

    /**
     * Gets receipt_pdf
     *
     * @return string
     */
    public function getReceiptPdf()
    {
        return $this->container['receipt_pdf'];
    }

    /**
     * Sets receipt_pdf
     *
     * @param string $receipt_pdf The acknowledgement receipt from the fiscal institution confirming that they received the tax return.
     *
     * @return $this
     */
    public function setReceiptPdf($receipt_pdf)
    {
        $this->container['receipt_pdf'] = $receipt_pdf;

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
