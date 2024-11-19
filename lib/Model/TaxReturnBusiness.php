<?php
/**
 * TaxReturnBusiness
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
 * TaxReturnBusiness Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxReturnBusiness implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Tax Return Business';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'collected_at' => '\DateTime',
        'created_at' => '\DateTime',
        'informacion_general' => 'object',
        'datos_adicionales' => 'object',
        'estado_resultados' => 'object',
        'estado_posicion_financiera_balance' => 'object',
        'conciliacion_entre_resultado_contable_fiscal' => 'object',
        'deducciones_autorizadas' => 'object',
        'cifras_cierre_ejercicio' => 'object',
        'determinacion_del_impuesto_sobre_la_renta' => 'object',
        'dividendos_o_utilidades_distribuidos' => 'object',
        'detalle_pago_r1_isr_personas_morales' => 'object',
        'ingressos' => 'object',
        'determinacion' => 'object',
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
        'collected_at' => 'date-time',
        'created_at' => 'date-time',
        'informacion_general' => null,
        'datos_adicionales' => null,
        'estado_resultados' => null,
        'estado_posicion_financiera_balance' => null,
        'conciliacion_entre_resultado_contable_fiscal' => null,
        'deducciones_autorizadas' => null,
        'cifras_cierre_ejercicio' => null,
        'determinacion_del_impuesto_sobre_la_renta' => null,
        'dividendos_o_utilidades_distribuidos' => null,
        'detalle_pago_r1_isr_personas_morales' => null,
        'ingressos' => null,
        'determinacion' => null,
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
        'collected_at' => 'collected_at',
        'created_at' => 'created_at',
        'informacion_general' => 'informacion_general',
        'datos_adicionales' => 'datos_adicionales',
        'estado_resultados' => 'estado_resultados',
        'estado_posicion_financiera_balance' => 'estado_posicion_financiera_balance',
        'conciliacion_entre_resultado_contable_fiscal' => 'conciliacion_entre_resultado_contable_fiscal',
        'deducciones_autorizadas' => 'deducciones_autorizadas',
        'cifras_cierre_ejercicio' => 'cifras_cierre_ejercicio',
        'determinacion_del_impuesto_sobre_la_renta' => 'determinacion_del_impuesto_sobre_la_renta',
        'dividendos_o_utilidades_distribuidos' => 'dividendos_o_utilidades_distribuidos',
        'detalle_pago_r1_isr_personas_morales' => 'detalle_pago_r1_isr_personas_morales',
        'ingressos' => 'ingressos',
        'determinacion' => 'determinacion',
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
        'collected_at' => 'setCollectedAt',
        'created_at' => 'setCreatedAt',
        'informacion_general' => 'setInformacionGeneral',
        'datos_adicionales' => 'setDatosAdicionales',
        'estado_resultados' => 'setEstadoResultados',
        'estado_posicion_financiera_balance' => 'setEstadoPosicionFinancieraBalance',
        'conciliacion_entre_resultado_contable_fiscal' => 'setConciliacionEntreResultadoContableFiscal',
        'deducciones_autorizadas' => 'setDeduccionesAutorizadas',
        'cifras_cierre_ejercicio' => 'setCifrasCierreEjercicio',
        'determinacion_del_impuesto_sobre_la_renta' => 'setDeterminacionDelImpuestoSobreLaRenta',
        'dividendos_o_utilidades_distribuidos' => 'setDividendosOUtilidadesDistribuidos',
        'detalle_pago_r1_isr_personas_morales' => 'setDetallePagoR1IsrPersonasMorales',
        'ingressos' => 'setIngressos',
        'determinacion' => 'setDeterminacion',
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
        'collected_at' => 'getCollectedAt',
        'created_at' => 'getCreatedAt',
        'informacion_general' => 'getInformacionGeneral',
        'datos_adicionales' => 'getDatosAdicionales',
        'estado_resultados' => 'getEstadoResultados',
        'estado_posicion_financiera_balance' => 'getEstadoPosicionFinancieraBalance',
        'conciliacion_entre_resultado_contable_fiscal' => 'getConciliacionEntreResultadoContableFiscal',
        'deducciones_autorizadas' => 'getDeduccionesAutorizadas',
        'cifras_cierre_ejercicio' => 'getCifrasCierreEjercicio',
        'determinacion_del_impuesto_sobre_la_renta' => 'getDeterminacionDelImpuestoSobreLaRenta',
        'dividendos_o_utilidades_distribuidos' => 'getDividendosOUtilidadesDistribuidos',
        'detalle_pago_r1_isr_personas_morales' => 'getDetallePagoR1IsrPersonasMorales',
        'ingressos' => 'getIngressos',
        'determinacion' => 'getDeterminacion',
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
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['informacion_general'] = isset($data['informacion_general']) ? $data['informacion_general'] : null;
        $this->container['datos_adicionales'] = isset($data['datos_adicionales']) ? $data['datos_adicionales'] : null;
        $this->container['estado_resultados'] = isset($data['estado_resultados']) ? $data['estado_resultados'] : null;
        $this->container['estado_posicion_financiera_balance'] = isset($data['estado_posicion_financiera_balance']) ? $data['estado_posicion_financiera_balance'] : null;
        $this->container['conciliacion_entre_resultado_contable_fiscal'] = isset($data['conciliacion_entre_resultado_contable_fiscal']) ? $data['conciliacion_entre_resultado_contable_fiscal'] : null;
        $this->container['deducciones_autorizadas'] = isset($data['deducciones_autorizadas']) ? $data['deducciones_autorizadas'] : null;
        $this->container['cifras_cierre_ejercicio'] = isset($data['cifras_cierre_ejercicio']) ? $data['cifras_cierre_ejercicio'] : null;
        $this->container['determinacion_del_impuesto_sobre_la_renta'] = isset($data['determinacion_del_impuesto_sobre_la_renta']) ? $data['determinacion_del_impuesto_sobre_la_renta'] : null;
        $this->container['dividendos_o_utilidades_distribuidos'] = isset($data['dividendos_o_utilidades_distribuidos']) ? $data['dividendos_o_utilidades_distribuidos'] : null;
        $this->container['detalle_pago_r1_isr_personas_morales'] = isset($data['detalle_pago_r1_isr_personas_morales']) ? $data['detalle_pago_r1_isr_personas_morales'] : null;
        $this->container['ingressos'] = isset($data['ingressos']) ? $data['ingressos'] : null;
        $this->container['determinacion'] = isset($data['determinacion']) ? $data['determinacion'] : null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['collected_at'] === null) {
            $invalidProperties[] = "'collected_at' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['informacion_general'] === null) {
            $invalidProperties[] = "'informacion_general' can't be null";
        }
        if ($this->container['datos_adicionales'] === null) {
            $invalidProperties[] = "'datos_adicionales' can't be null";
        }
        if ($this->container['estado_resultados'] === null) {
            $invalidProperties[] = "'estado_resultados' can't be null";
        }
        if ($this->container['estado_posicion_financiera_balance'] === null) {
            $invalidProperties[] = "'estado_posicion_financiera_balance' can't be null";
        }
        if ($this->container['conciliacion_entre_resultado_contable_fiscal'] === null) {
            $invalidProperties[] = "'conciliacion_entre_resultado_contable_fiscal' can't be null";
        }
        if ($this->container['deducciones_autorizadas'] === null) {
            $invalidProperties[] = "'deducciones_autorizadas' can't be null";
        }
        if ($this->container['cifras_cierre_ejercicio'] === null) {
            $invalidProperties[] = "'cifras_cierre_ejercicio' can't be null";
        }
        if ($this->container['determinacion_del_impuesto_sobre_la_renta'] === null) {
            $invalidProperties[] = "'determinacion_del_impuesto_sobre_la_renta' can't be null";
        }
        if ($this->container['dividendos_o_utilidades_distribuidos'] === null) {
            $invalidProperties[] = "'dividendos_o_utilidades_distribuidos' can't be null";
        }
        if ($this->container['detalle_pago_r1_isr_personas_morales'] === null) {
            $invalidProperties[] = "'detalle_pago_r1_isr_personas_morales' can't be null";
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
     * @param object $informacion_general General information regarding the tax return (year, RFC, return type, person/company name, and so on).
     *
     * @return $this
     */
    public function setInformacionGeneral($informacion_general)
    {
        $this->container['informacion_general'] = $informacion_general;

        return $this;
    }

    /**
     * Gets datos_adicionales
     *
     * @return object
     */
    public function getDatosAdicionales()
    {
        return $this->container['datos_adicionales'];
    }

    /**
     * Sets datos_adicionales
     *
     * @param object $datos_adicionales Additional data regarding the tax return.
     *
     * @return $this
     */
    public function setDatosAdicionales($datos_adicionales)
    {
        $this->container['datos_adicionales'] = $datos_adicionales;

        return $this;
    }

    /**
     * Gets estado_resultados
     *
     * @return object
     */
    public function getEstadoResultados()
    {
        return $this->container['estado_resultados'];
    }

    /**
     * Sets estado_resultados
     *
     * @param object $estado_resultados Detailed information about the legal entity's yearly profit and loss.  > **Note**: For tax returns submitted for the 2022 tax year and later, this field will return null as it is no longer a required field when submitting your tax return.
     *
     * @return $this
     */
    public function setEstadoResultados($estado_resultados)
    {
        $this->container['estado_resultados'] = $estado_resultados;

        return $this;
    }

    /**
     * Gets estado_posicion_financiera_balance
     *
     * @return object
     */
    public function getEstadoPosicionFinancieraBalance()
    {
        return $this->container['estado_posicion_financiera_balance'];
    }

    /**
     * Sets estado_posicion_financiera_balance
     *
     * @param object $estado_posicion_financiera_balance Details regarding balance sheet of the legal entity.  > **Note**: For tax returns submitted for the 2022 tax year and later, this field will return null as it is no longer a required field when submitting your tax return.
     *
     * @return $this
     */
    public function setEstadoPosicionFinancieraBalance($estado_posicion_financiera_balance)
    {
        $this->container['estado_posicion_financiera_balance'] = $estado_posicion_financiera_balance;

        return $this;
    }

    /**
     * Gets conciliacion_entre_resultado_contable_fiscal
     *
     * @return object
     */
    public function getConciliacionEntreResultadoContableFiscal()
    {
        return $this->container['conciliacion_entre_resultado_contable_fiscal'];
    }

    /**
     * Sets conciliacion_entre_resultado_contable_fiscal
     *
     * @param object $conciliacion_entre_resultado_contable_fiscal Details regarding the accounting reconciliation.  > **Note**: For tax returns submitted for the 2022 tax year and later, this field will return null as it is no longer a required field when submitting your tax return.
     *
     * @return $this
     */
    public function setConciliacionEntreResultadoContableFiscal($conciliacion_entre_resultado_contable_fiscal)
    {
        $this->container['conciliacion_entre_resultado_contable_fiscal'] = $conciliacion_entre_resultado_contable_fiscal;

        return $this;
    }

    /**
     * Gets deducciones_autorizadas
     *
     * @return object
     */
    public function getDeduccionesAutorizadas()
    {
        return $this->container['deducciones_autorizadas'];
    }

    /**
     * Sets deducciones_autorizadas
     *
     * @param object $deducciones_autorizadas Details regarding the legal entity's deductions.
     *
     * @return $this
     */
    public function setDeduccionesAutorizadas($deducciones_autorizadas)
    {
        $this->container['deducciones_autorizadas'] = $deducciones_autorizadas;

        return $this;
    }

    /**
     * Gets cifras_cierre_ejercicio
     *
     * @return object
     */
    public function getCifrasCierreEjercicio()
    {
        return $this->container['cifras_cierre_ejercicio'];
    }

    /**
     * Sets cifras_cierre_ejercicio
     *
     * @param object $cifras_cierre_ejercicio Details regarding key numbers at the end of the fiscal exercise.
     *
     * @return $this
     */
    public function setCifrasCierreEjercicio($cifras_cierre_ejercicio)
    {
        $this->container['cifras_cierre_ejercicio'] = $cifras_cierre_ejercicio;

        return $this;
    }

    /**
     * Gets determinacion_del_impuesto_sobre_la_renta
     *
     * @return object
     */
    public function getDeterminacionDelImpuestoSobreLaRenta()
    {
        return $this->container['determinacion_del_impuesto_sobre_la_renta'];
    }

    /**
     * Sets determinacion_del_impuesto_sobre_la_renta
     *
     * @param object $determinacion_del_impuesto_sobre_la_renta Details regarding the final tax return.
     *
     * @return $this
     */
    public function setDeterminacionDelImpuestoSobreLaRenta($determinacion_del_impuesto_sobre_la_renta)
    {
        $this->container['determinacion_del_impuesto_sobre_la_renta'] = $determinacion_del_impuesto_sobre_la_renta;

        return $this;
    }

    /**
     * Gets dividendos_o_utilidades_distribuidos
     *
     * @return object
     */
    public function getDividendosOUtilidadesDistribuidos()
    {
        return $this->container['dividendos_o_utilidades_distribuidos'];
    }

    /**
     * Sets dividendos_o_utilidades_distribuidos
     *
     * @param object $dividendos_o_utilidades_distribuidos Details regarding distributed dividends.
     *
     * @return $this
     */
    public function setDividendosOUtilidadesDistribuidos($dividendos_o_utilidades_distribuidos)
    {
        $this->container['dividendos_o_utilidades_distribuidos'] = $dividendos_o_utilidades_distribuidos;

        return $this;
    }

    /**
     * Gets detalle_pago_r1_isr_personas_morales
     *
     * @return object
     */
    public function getDetallePagoR1IsrPersonasMorales()
    {
        return $this->container['detalle_pago_r1_isr_personas_morales'];
    }

    /**
     * Sets detalle_pago_r1_isr_personas_morales
     *
     * @param object $detalle_pago_r1_isr_personas_morales Details of the tax payment.
     *
     * @return $this
     */
    public function setDetallePagoR1IsrPersonasMorales($detalle_pago_r1_isr_personas_morales)
    {
        $this->container['detalle_pago_r1_isr_personas_morales'] = $detalle_pago_r1_isr_personas_morales;

        return $this;
    }

    /**
     * Gets ingressos
     *
     * @return object
     */
    public function getIngressos()
    {
        return $this->container['ingressos'];
    }

    /**
     * Sets ingressos
     *
     * @param object $ingressos > **Note**: Only applicable for tax return filed on or after 2022. For tax returns filed before 2022, this field will return `null`.  Details regarding the total amounts earned in the fiscal year.
     *
     * @return $this
     */
    public function setIngressos($ingressos)
    {
        $this->container['ingressos'] = $ingressos;

        return $this;
    }

    /**
     * Gets determinacion
     *
     * @return object
     */
    public function getDeterminacion()
    {
        return $this->container['determinacion'];
    }

    /**
     * Sets determinacion
     *
     * @param object $determinacion > **Note**: Only applicable for tax return filed on or after 2022. For tax returns filed before 2022, this field will return `null`.  Details regarding the tax due or tax credit.
     *
     * @return $this
     */
    public function setDeterminacion($determinacion)
    {
        $this->container['determinacion'] = $determinacion;

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
