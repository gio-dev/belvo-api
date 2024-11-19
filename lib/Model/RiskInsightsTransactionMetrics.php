<?php
/**
 * RiskInsightsTransactionMetrics
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
 * RiskInsightsTransactionMetrics Class Doc Comment
 *
 * @category Class
 * @description Aggregated metrics calculated based on the user&#x27;s transactions from checking, savings, credit card, and loan accounts.   &gt; ℹ️ **Note** &gt; &gt; If there is not enough transactional data for a given period, we return &#x60;null&#x60; for calculated fields and &#x60;0&#x60; for &#x27;count-based&#x27; fields. For example, if the account has only been open for five days (or you have provided data just for five days), we return values for &#x60;_3d&#x60;, &#x60;_1w&#x60;, and &#x60;_1m&#x60;, however: &gt;  &gt; - &#x60;mean_num_transactions_3m&#x60; will return &#x60;null&#x60; as there is no data for months two and three (calculated field). &gt; - &#x60;num_transactions_3m&#x60; will return &#x60;0&#x60; as there is no data for months two and three (&#x27;count-based&#x27; field)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RiskInsightsTransactionMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RiskInsightsTransactionMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'num_transactions_3d' => 'int',
        'num_transactions_1w' => 'int',
        'num_transactions_1m' => 'int',
        'num_transactions_3m' => 'int',
        'num_transactions_6m' => 'int',
        'num_transactions_12m' => 'int',
        'max_num_transactions_3d' => 'int',
        'max_num_transactions_1w' => 'int',
        'max_num_transactions_1m' => 'int',
        'max_num_transactions_3m' => 'int',
        'max_num_transactions_6m' => 'int',
        'max_num_transactions_12m' => 'int',
        'mean_num_transactions_3d' => 'float',
        'mean_num_transactions_1w' => 'float',
        'mean_num_transactions_1m' => 'float',
        'mean_num_transactions_3m' => 'float',
        'mean_num_transactions_6m' => 'float',
        'mean_num_transactions_12m' => 'float',
        'num_incoming_transactions_3d' => 'int',
        'num_incoming_transactions_1w' => 'int',
        'num_incoming_transactions_1m' => 'int',
        'num_incoming_transactions_3m' => 'int',
        'num_incoming_transactions_6m' => 'int',
        'num_incoming_transactions_12m' => 'int',
        'max_num_incoming_transactions_3d' => 'int',
        'max_num_incoming_transactions_1w' => 'int',
        'max_num_incoming_transactions_1m' => 'int',
        'max_num_incoming_transactions_3m' => 'int',
        'max_num_incoming_transactions_6m' => 'int',
        'max_num_incoming_transactions_12m' => 'int',
        'mean_num_incoming_transactions_3d' => 'float',
        'mean_num_incoming_transactions_1w' => 'float',
        'mean_num_incoming_transactions_1m' => 'float',
        'mean_num_incoming_transactions_3m' => 'float',
        'mean_num_incoming_transactions_6m' => 'float',
        'mean_num_incoming_transactions_12m' => 'float',
        'sum_incoming_amount_3d' => 'float',
        'sum_incoming_amount_1w' => 'float',
        'sum_incoming_amount_1m' => 'float',
        'sum_incoming_amount_3m' => 'float',
        'sum_incoming_amount_6m' => 'float',
        'sum_incoming_amount_12m' => 'float',
        'max_incoming_amount_3d' => 'float',
        'max_incoming_amount_1w' => 'float',
        'max_incoming_amount_1m' => 'float',
        'max_incoming_amount_3m' => 'float',
        'max_incoming_amount_6m' => 'float',
        'max_incoming_amount_12m' => 'float',
        'mean_incoming_amount_3d' => 'float',
        'mean_incoming_amount_1w' => 'float',
        'mean_incoming_amount_1m' => 'float',
        'mean_incoming_amount_3m' => 'float',
        'mean_incoming_amount_6m' => 'float',
        'mean_incoming_amount_12m' => 'float',
        'num_outgoing_transactions_3d' => 'int',
        'num_outgoing_transactions_1w' => 'int',
        'num_outgoing_transactions_1m' => 'int',
        'num_outgoing_transactions_3m' => 'int',
        'num_outgoing_transactions_6m' => 'int',
        'num_outgoing_transactions_12m' => 'int',
        'max_num_outgoing_transactions_3d' => 'int',
        'max_num_outgoing_transactions_1w' => 'int',
        'max_num_outgoing_transactions_1m' => 'int',
        'max_num_outgoing_transactions_3m' => 'int',
        'max_num_outgoing_transactions_6m' => 'int',
        'max_num_outgoing_transactions_12m' => 'int',
        'mean_num_outgoing_transactions_3d' => 'float',
        'mean_num_outgoing_transactions_1w' => 'float',
        'mean_num_outgoing_transactions_1m' => 'float',
        'mean_num_outgoing_transactions_3m' => 'float',
        'mean_num_outgoing_transactions_6m' => 'float',
        'mean_num_outgoing_transactions_12m' => 'float',
        'sum_outgoing_amount_3d' => 'float',
        'sum_outgoing_amount_1w' => 'float',
        'sum_outgoing_amount_1m' => 'float',
        'sum_outgoing_amount_3m' => 'float',
        'sum_outgoing_amount_6m' => 'float',
        'sum_outgoing_amount_12m' => 'float',
        'max_outgoing_amount_3d' => 'float',
        'max_outgoing_amount_1w' => 'float',
        'max_outgoing_amount_1m' => 'float',
        'max_outgoing_amount_3m' => 'float',
        'max_outgoing_amount_6m' => 'float',
        'max_outgoing_amount_12m' => 'float',
        'mean_outgoing_amount_3d' => 'float',
        'mean_outgoing_amount_1w' => 'float',
        'mean_outgoing_amount_1m' => 'float',
        'mean_outgoing_amount_3m' => 'float',
        'mean_outgoing_amount_6m' => 'float',
        'mean_outgoing_amount_12m' => 'float',
        'days_without_transactions_3d' => 'int',
        'days_without_transactions_1w' => 'int',
        'days_without_transactions_1m' => 'int',
        'days_without_transactions_3m' => 'int',
        'days_without_transactions_6m' => 'int',
        'days_without_transactions_12m' => 'int',
        'days_since_last_transaction' => 'int',
        'days_since_last_incoming_transaction' => 'int',
        'days_since_last_outgoing_transaction' => 'int',
        'days_history' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'num_transactions_3d' => 'int32',
        'num_transactions_1w' => 'int32',
        'num_transactions_1m' => 'int32',
        'num_transactions_3m' => 'int32',
        'num_transactions_6m' => 'int32',
        'num_transactions_12m' => 'int32',
        'max_num_transactions_3d' => 'int32',
        'max_num_transactions_1w' => 'int32',
        'max_num_transactions_1m' => 'int32',
        'max_num_transactions_3m' => 'int32',
        'max_num_transactions_6m' => 'int32',
        'max_num_transactions_12m' => 'int32',
        'mean_num_transactions_3d' => 'float',
        'mean_num_transactions_1w' => 'float',
        'mean_num_transactions_1m' => 'float',
        'mean_num_transactions_3m' => 'float',
        'mean_num_transactions_6m' => 'float',
        'mean_num_transactions_12m' => 'float',
        'num_incoming_transactions_3d' => 'int32',
        'num_incoming_transactions_1w' => 'int32',
        'num_incoming_transactions_1m' => 'int32',
        'num_incoming_transactions_3m' => 'int32',
        'num_incoming_transactions_6m' => 'int32',
        'num_incoming_transactions_12m' => 'int32',
        'max_num_incoming_transactions_3d' => 'int32',
        'max_num_incoming_transactions_1w' => 'int32',
        'max_num_incoming_transactions_1m' => 'int32',
        'max_num_incoming_transactions_3m' => 'int32',
        'max_num_incoming_transactions_6m' => 'int32',
        'max_num_incoming_transactions_12m' => 'int32',
        'mean_num_incoming_transactions_3d' => 'float',
        'mean_num_incoming_transactions_1w' => 'float',
        'mean_num_incoming_transactions_1m' => 'float',
        'mean_num_incoming_transactions_3m' => 'float',
        'mean_num_incoming_transactions_6m' => 'float',
        'mean_num_incoming_transactions_12m' => 'float',
        'sum_incoming_amount_3d' => 'float',
        'sum_incoming_amount_1w' => 'float',
        'sum_incoming_amount_1m' => 'float',
        'sum_incoming_amount_3m' => 'float',
        'sum_incoming_amount_6m' => 'float',
        'sum_incoming_amount_12m' => 'float',
        'max_incoming_amount_3d' => 'float',
        'max_incoming_amount_1w' => 'float',
        'max_incoming_amount_1m' => 'float',
        'max_incoming_amount_3m' => 'float',
        'max_incoming_amount_6m' => 'float',
        'max_incoming_amount_12m' => 'float',
        'mean_incoming_amount_3d' => 'float',
        'mean_incoming_amount_1w' => 'float',
        'mean_incoming_amount_1m' => 'float',
        'mean_incoming_amount_3m' => 'float',
        'mean_incoming_amount_6m' => 'float',
        'mean_incoming_amount_12m' => 'float',
        'num_outgoing_transactions_3d' => 'int32',
        'num_outgoing_transactions_1w' => 'int32',
        'num_outgoing_transactions_1m' => 'int32',
        'num_outgoing_transactions_3m' => 'int32',
        'num_outgoing_transactions_6m' => 'int32',
        'num_outgoing_transactions_12m' => 'int32',
        'max_num_outgoing_transactions_3d' => 'int32',
        'max_num_outgoing_transactions_1w' => 'int32',
        'max_num_outgoing_transactions_1m' => 'int32',
        'max_num_outgoing_transactions_3m' => 'int32',
        'max_num_outgoing_transactions_6m' => 'int32',
        'max_num_outgoing_transactions_12m' => 'int32',
        'mean_num_outgoing_transactions_3d' => 'float',
        'mean_num_outgoing_transactions_1w' => 'float',
        'mean_num_outgoing_transactions_1m' => 'float',
        'mean_num_outgoing_transactions_3m' => 'float',
        'mean_num_outgoing_transactions_6m' => 'float',
        'mean_num_outgoing_transactions_12m' => 'float',
        'sum_outgoing_amount_3d' => 'float',
        'sum_outgoing_amount_1w' => 'float',
        'sum_outgoing_amount_1m' => 'float',
        'sum_outgoing_amount_3m' => 'float',
        'sum_outgoing_amount_6m' => 'float',
        'sum_outgoing_amount_12m' => 'float',
        'max_outgoing_amount_3d' => 'float',
        'max_outgoing_amount_1w' => 'float',
        'max_outgoing_amount_1m' => 'float',
        'max_outgoing_amount_3m' => 'float',
        'max_outgoing_amount_6m' => 'float',
        'max_outgoing_amount_12m' => 'float',
        'mean_outgoing_amount_3d' => 'float',
        'mean_outgoing_amount_1w' => 'float',
        'mean_outgoing_amount_1m' => 'float',
        'mean_outgoing_amount_3m' => 'float',
        'mean_outgoing_amount_6m' => 'float',
        'mean_outgoing_amount_12m' => 'float',
        'days_without_transactions_3d' => 'int32',
        'days_without_transactions_1w' => 'int32',
        'days_without_transactions_1m' => 'int32',
        'days_without_transactions_3m' => 'int32',
        'days_without_transactions_6m' => 'int32',
        'days_without_transactions_12m' => 'int32',
        'days_since_last_transaction' => 'int32',
        'days_since_last_incoming_transaction' => 'int32',
        'days_since_last_outgoing_transaction' => 'int32',
        'days_history' => 'int32'
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
        'num_transactions_3d' => 'num_transactions_3d',
        'num_transactions_1w' => 'num_transactions_1w',
        'num_transactions_1m' => 'num_transactions_1m',
        'num_transactions_3m' => 'num_transactions_3m',
        'num_transactions_6m' => 'num_transactions_6m',
        'num_transactions_12m' => 'num_transactions_12m',
        'max_num_transactions_3d' => 'max_num_transactions_3d',
        'max_num_transactions_1w' => 'max_num_transactions_1w',
        'max_num_transactions_1m' => 'max_num_transactions_1m',
        'max_num_transactions_3m' => 'max_num_transactions_3m',
        'max_num_transactions_6m' => 'max_num_transactions_6m',
        'max_num_transactions_12m' => 'max_num_transactions_12m',
        'mean_num_transactions_3d' => 'mean_num_transactions_3d',
        'mean_num_transactions_1w' => 'mean_num_transactions_1w',
        'mean_num_transactions_1m' => 'mean_num_transactions_1m',
        'mean_num_transactions_3m' => 'mean_num_transactions_3m',
        'mean_num_transactions_6m' => 'mean_num_transactions_6m',
        'mean_num_transactions_12m' => 'mean_num_transactions_12m',
        'num_incoming_transactions_3d' => 'num_incoming_transactions_3d',
        'num_incoming_transactions_1w' => 'num_incoming_transactions_1w',
        'num_incoming_transactions_1m' => 'num_incoming_transactions_1m',
        'num_incoming_transactions_3m' => 'num_incoming_transactions_3m',
        'num_incoming_transactions_6m' => 'num_incoming_transactions_6m',
        'num_incoming_transactions_12m' => 'num_incoming_transactions_12m',
        'max_num_incoming_transactions_3d' => 'max_num_incoming_transactions_3d',
        'max_num_incoming_transactions_1w' => 'max_num_incoming_transactions_1w',
        'max_num_incoming_transactions_1m' => 'max_num_incoming_transactions_1m',
        'max_num_incoming_transactions_3m' => 'max_num_incoming_transactions_3m',
        'max_num_incoming_transactions_6m' => 'max_num_incoming_transactions_6m',
        'max_num_incoming_transactions_12m' => 'max_num_incoming_transactions_12m',
        'mean_num_incoming_transactions_3d' => 'mean_num_incoming_transactions_3d',
        'mean_num_incoming_transactions_1w' => 'mean_num_incoming_transactions_1w',
        'mean_num_incoming_transactions_1m' => 'mean_num_incoming_transactions_1m',
        'mean_num_incoming_transactions_3m' => 'mean_num_incoming_transactions_3m',
        'mean_num_incoming_transactions_6m' => 'mean_num_incoming_transactions_6m',
        'mean_num_incoming_transactions_12m' => 'mean_num_incoming_transactions_12m',
        'sum_incoming_amount_3d' => 'sum_incoming_amount_3d',
        'sum_incoming_amount_1w' => 'sum_incoming_amount_1w',
        'sum_incoming_amount_1m' => 'sum_incoming_amount_1m',
        'sum_incoming_amount_3m' => 'sum_incoming_amount_3m',
        'sum_incoming_amount_6m' => 'sum_incoming_amount_6m',
        'sum_incoming_amount_12m' => 'sum_incoming_amount_12m',
        'max_incoming_amount_3d' => 'max_incoming_amount_3d',
        'max_incoming_amount_1w' => 'max_incoming_amount_1w',
        'max_incoming_amount_1m' => 'max_incoming_amount_1m',
        'max_incoming_amount_3m' => 'max_incoming_amount_3m',
        'max_incoming_amount_6m' => 'max_incoming_amount_6m',
        'max_incoming_amount_12m' => 'max_incoming_amount_12m',
        'mean_incoming_amount_3d' => 'mean_incoming_amount_3d',
        'mean_incoming_amount_1w' => 'mean_incoming_amount_1w',
        'mean_incoming_amount_1m' => 'mean_incoming_amount_1m',
        'mean_incoming_amount_3m' => 'mean_incoming_amount_3m',
        'mean_incoming_amount_6m' => 'mean_incoming_amount_6m',
        'mean_incoming_amount_12m' => 'mean_incoming_amount_12m',
        'num_outgoing_transactions_3d' => 'num_outgoing_transactions_3d',
        'num_outgoing_transactions_1w' => 'num_outgoing_transactions_1w',
        'num_outgoing_transactions_1m' => 'num_outgoing_transactions_1m',
        'num_outgoing_transactions_3m' => 'num_outgoing_transactions_3m',
        'num_outgoing_transactions_6m' => 'num_outgoing_transactions_6m',
        'num_outgoing_transactions_12m' => 'num_outgoing_transactions_12m',
        'max_num_outgoing_transactions_3d' => 'max_num_outgoing_transactions_3d',
        'max_num_outgoing_transactions_1w' => 'max_num_outgoing_transactions_1w',
        'max_num_outgoing_transactions_1m' => 'max_num_outgoing_transactions_1m',
        'max_num_outgoing_transactions_3m' => 'max_num_outgoing_transactions_3m',
        'max_num_outgoing_transactions_6m' => 'max_num_outgoing_transactions_6m',
        'max_num_outgoing_transactions_12m' => 'max_num_outgoing_transactions_12m',
        'mean_num_outgoing_transactions_3d' => 'mean_num_outgoing_transactions_3d',
        'mean_num_outgoing_transactions_1w' => 'mean_num_outgoing_transactions_1w',
        'mean_num_outgoing_transactions_1m' => 'mean_num_outgoing_transactions_1m',
        'mean_num_outgoing_transactions_3m' => 'mean_num_outgoing_transactions_3m',
        'mean_num_outgoing_transactions_6m' => 'mean_num_outgoing_transactions_6m',
        'mean_num_outgoing_transactions_12m' => 'mean_num_outgoing_transactions_12m',
        'sum_outgoing_amount_3d' => 'sum_outgoing_amount_3d',
        'sum_outgoing_amount_1w' => 'sum_outgoing_amount_1w',
        'sum_outgoing_amount_1m' => 'sum_outgoing_amount_1m',
        'sum_outgoing_amount_3m' => 'sum_outgoing_amount_3m',
        'sum_outgoing_amount_6m' => 'sum_outgoing_amount_6m',
        'sum_outgoing_amount_12m' => 'sum_outgoing_amount_12m',
        'max_outgoing_amount_3d' => 'max_outgoing_amount_3d',
        'max_outgoing_amount_1w' => 'max_outgoing_amount_1w',
        'max_outgoing_amount_1m' => 'max_outgoing_amount_1m',
        'max_outgoing_amount_3m' => 'max_outgoing_amount_3m',
        'max_outgoing_amount_6m' => 'max_outgoing_amount_6m',
        'max_outgoing_amount_12m' => 'max_outgoing_amount_12m',
        'mean_outgoing_amount_3d' => 'mean_outgoing_amount_3d',
        'mean_outgoing_amount_1w' => 'mean_outgoing_amount_1w',
        'mean_outgoing_amount_1m' => 'mean_outgoing_amount_1m',
        'mean_outgoing_amount_3m' => 'mean_outgoing_amount_3m',
        'mean_outgoing_amount_6m' => 'mean_outgoing_amount_6m',
        'mean_outgoing_amount_12m' => 'mean_outgoing_amount_12m',
        'days_without_transactions_3d' => 'days_without_transactions_3d',
        'days_without_transactions_1w' => 'days_without_transactions_1w',
        'days_without_transactions_1m' => 'days_without_transactions_1m',
        'days_without_transactions_3m' => 'days_without_transactions_3m',
        'days_without_transactions_6m' => 'days_without_transactions_6m',
        'days_without_transactions_12m' => 'days_without_transactions_12m',
        'days_since_last_transaction' => 'days_since_last_transaction',
        'days_since_last_incoming_transaction' => 'days_since_last_incoming_transaction',
        'days_since_last_outgoing_transaction' => 'days_since_last_outgoing_transaction',
        'days_history' => 'days_history'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'num_transactions_3d' => 'setNumTransactions3d',
        'num_transactions_1w' => 'setNumTransactions1w',
        'num_transactions_1m' => 'setNumTransactions1m',
        'num_transactions_3m' => 'setNumTransactions3m',
        'num_transactions_6m' => 'setNumTransactions6m',
        'num_transactions_12m' => 'setNumTransactions12m',
        'max_num_transactions_3d' => 'setMaxNumTransactions3d',
        'max_num_transactions_1w' => 'setMaxNumTransactions1w',
        'max_num_transactions_1m' => 'setMaxNumTransactions1m',
        'max_num_transactions_3m' => 'setMaxNumTransactions3m',
        'max_num_transactions_6m' => 'setMaxNumTransactions6m',
        'max_num_transactions_12m' => 'setMaxNumTransactions12m',
        'mean_num_transactions_3d' => 'setMeanNumTransactions3d',
        'mean_num_transactions_1w' => 'setMeanNumTransactions1w',
        'mean_num_transactions_1m' => 'setMeanNumTransactions1m',
        'mean_num_transactions_3m' => 'setMeanNumTransactions3m',
        'mean_num_transactions_6m' => 'setMeanNumTransactions6m',
        'mean_num_transactions_12m' => 'setMeanNumTransactions12m',
        'num_incoming_transactions_3d' => 'setNumIncomingTransactions3d',
        'num_incoming_transactions_1w' => 'setNumIncomingTransactions1w',
        'num_incoming_transactions_1m' => 'setNumIncomingTransactions1m',
        'num_incoming_transactions_3m' => 'setNumIncomingTransactions3m',
        'num_incoming_transactions_6m' => 'setNumIncomingTransactions6m',
        'num_incoming_transactions_12m' => 'setNumIncomingTransactions12m',
        'max_num_incoming_transactions_3d' => 'setMaxNumIncomingTransactions3d',
        'max_num_incoming_transactions_1w' => 'setMaxNumIncomingTransactions1w',
        'max_num_incoming_transactions_1m' => 'setMaxNumIncomingTransactions1m',
        'max_num_incoming_transactions_3m' => 'setMaxNumIncomingTransactions3m',
        'max_num_incoming_transactions_6m' => 'setMaxNumIncomingTransactions6m',
        'max_num_incoming_transactions_12m' => 'setMaxNumIncomingTransactions12m',
        'mean_num_incoming_transactions_3d' => 'setMeanNumIncomingTransactions3d',
        'mean_num_incoming_transactions_1w' => 'setMeanNumIncomingTransactions1w',
        'mean_num_incoming_transactions_1m' => 'setMeanNumIncomingTransactions1m',
        'mean_num_incoming_transactions_3m' => 'setMeanNumIncomingTransactions3m',
        'mean_num_incoming_transactions_6m' => 'setMeanNumIncomingTransactions6m',
        'mean_num_incoming_transactions_12m' => 'setMeanNumIncomingTransactions12m',
        'sum_incoming_amount_3d' => 'setSumIncomingAmount3d',
        'sum_incoming_amount_1w' => 'setSumIncomingAmount1w',
        'sum_incoming_amount_1m' => 'setSumIncomingAmount1m',
        'sum_incoming_amount_3m' => 'setSumIncomingAmount3m',
        'sum_incoming_amount_6m' => 'setSumIncomingAmount6m',
        'sum_incoming_amount_12m' => 'setSumIncomingAmount12m',
        'max_incoming_amount_3d' => 'setMaxIncomingAmount3d',
        'max_incoming_amount_1w' => 'setMaxIncomingAmount1w',
        'max_incoming_amount_1m' => 'setMaxIncomingAmount1m',
        'max_incoming_amount_3m' => 'setMaxIncomingAmount3m',
        'max_incoming_amount_6m' => 'setMaxIncomingAmount6m',
        'max_incoming_amount_12m' => 'setMaxIncomingAmount12m',
        'mean_incoming_amount_3d' => 'setMeanIncomingAmount3d',
        'mean_incoming_amount_1w' => 'setMeanIncomingAmount1w',
        'mean_incoming_amount_1m' => 'setMeanIncomingAmount1m',
        'mean_incoming_amount_3m' => 'setMeanIncomingAmount3m',
        'mean_incoming_amount_6m' => 'setMeanIncomingAmount6m',
        'mean_incoming_amount_12m' => 'setMeanIncomingAmount12m',
        'num_outgoing_transactions_3d' => 'setNumOutgoingTransactions3d',
        'num_outgoing_transactions_1w' => 'setNumOutgoingTransactions1w',
        'num_outgoing_transactions_1m' => 'setNumOutgoingTransactions1m',
        'num_outgoing_transactions_3m' => 'setNumOutgoingTransactions3m',
        'num_outgoing_transactions_6m' => 'setNumOutgoingTransactions6m',
        'num_outgoing_transactions_12m' => 'setNumOutgoingTransactions12m',
        'max_num_outgoing_transactions_3d' => 'setMaxNumOutgoingTransactions3d',
        'max_num_outgoing_transactions_1w' => 'setMaxNumOutgoingTransactions1w',
        'max_num_outgoing_transactions_1m' => 'setMaxNumOutgoingTransactions1m',
        'max_num_outgoing_transactions_3m' => 'setMaxNumOutgoingTransactions3m',
        'max_num_outgoing_transactions_6m' => 'setMaxNumOutgoingTransactions6m',
        'max_num_outgoing_transactions_12m' => 'setMaxNumOutgoingTransactions12m',
        'mean_num_outgoing_transactions_3d' => 'setMeanNumOutgoingTransactions3d',
        'mean_num_outgoing_transactions_1w' => 'setMeanNumOutgoingTransactions1w',
        'mean_num_outgoing_transactions_1m' => 'setMeanNumOutgoingTransactions1m',
        'mean_num_outgoing_transactions_3m' => 'setMeanNumOutgoingTransactions3m',
        'mean_num_outgoing_transactions_6m' => 'setMeanNumOutgoingTransactions6m',
        'mean_num_outgoing_transactions_12m' => 'setMeanNumOutgoingTransactions12m',
        'sum_outgoing_amount_3d' => 'setSumOutgoingAmount3d',
        'sum_outgoing_amount_1w' => 'setSumOutgoingAmount1w',
        'sum_outgoing_amount_1m' => 'setSumOutgoingAmount1m',
        'sum_outgoing_amount_3m' => 'setSumOutgoingAmount3m',
        'sum_outgoing_amount_6m' => 'setSumOutgoingAmount6m',
        'sum_outgoing_amount_12m' => 'setSumOutgoingAmount12m',
        'max_outgoing_amount_3d' => 'setMaxOutgoingAmount3d',
        'max_outgoing_amount_1w' => 'setMaxOutgoingAmount1w',
        'max_outgoing_amount_1m' => 'setMaxOutgoingAmount1m',
        'max_outgoing_amount_3m' => 'setMaxOutgoingAmount3m',
        'max_outgoing_amount_6m' => 'setMaxOutgoingAmount6m',
        'max_outgoing_amount_12m' => 'setMaxOutgoingAmount12m',
        'mean_outgoing_amount_3d' => 'setMeanOutgoingAmount3d',
        'mean_outgoing_amount_1w' => 'setMeanOutgoingAmount1w',
        'mean_outgoing_amount_1m' => 'setMeanOutgoingAmount1m',
        'mean_outgoing_amount_3m' => 'setMeanOutgoingAmount3m',
        'mean_outgoing_amount_6m' => 'setMeanOutgoingAmount6m',
        'mean_outgoing_amount_12m' => 'setMeanOutgoingAmount12m',
        'days_without_transactions_3d' => 'setDaysWithoutTransactions3d',
        'days_without_transactions_1w' => 'setDaysWithoutTransactions1w',
        'days_without_transactions_1m' => 'setDaysWithoutTransactions1m',
        'days_without_transactions_3m' => 'setDaysWithoutTransactions3m',
        'days_without_transactions_6m' => 'setDaysWithoutTransactions6m',
        'days_without_transactions_12m' => 'setDaysWithoutTransactions12m',
        'days_since_last_transaction' => 'setDaysSinceLastTransaction',
        'days_since_last_incoming_transaction' => 'setDaysSinceLastIncomingTransaction',
        'days_since_last_outgoing_transaction' => 'setDaysSinceLastOutgoingTransaction',
        'days_history' => 'setDaysHistory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'num_transactions_3d' => 'getNumTransactions3d',
        'num_transactions_1w' => 'getNumTransactions1w',
        'num_transactions_1m' => 'getNumTransactions1m',
        'num_transactions_3m' => 'getNumTransactions3m',
        'num_transactions_6m' => 'getNumTransactions6m',
        'num_transactions_12m' => 'getNumTransactions12m',
        'max_num_transactions_3d' => 'getMaxNumTransactions3d',
        'max_num_transactions_1w' => 'getMaxNumTransactions1w',
        'max_num_transactions_1m' => 'getMaxNumTransactions1m',
        'max_num_transactions_3m' => 'getMaxNumTransactions3m',
        'max_num_transactions_6m' => 'getMaxNumTransactions6m',
        'max_num_transactions_12m' => 'getMaxNumTransactions12m',
        'mean_num_transactions_3d' => 'getMeanNumTransactions3d',
        'mean_num_transactions_1w' => 'getMeanNumTransactions1w',
        'mean_num_transactions_1m' => 'getMeanNumTransactions1m',
        'mean_num_transactions_3m' => 'getMeanNumTransactions3m',
        'mean_num_transactions_6m' => 'getMeanNumTransactions6m',
        'mean_num_transactions_12m' => 'getMeanNumTransactions12m',
        'num_incoming_transactions_3d' => 'getNumIncomingTransactions3d',
        'num_incoming_transactions_1w' => 'getNumIncomingTransactions1w',
        'num_incoming_transactions_1m' => 'getNumIncomingTransactions1m',
        'num_incoming_transactions_3m' => 'getNumIncomingTransactions3m',
        'num_incoming_transactions_6m' => 'getNumIncomingTransactions6m',
        'num_incoming_transactions_12m' => 'getNumIncomingTransactions12m',
        'max_num_incoming_transactions_3d' => 'getMaxNumIncomingTransactions3d',
        'max_num_incoming_transactions_1w' => 'getMaxNumIncomingTransactions1w',
        'max_num_incoming_transactions_1m' => 'getMaxNumIncomingTransactions1m',
        'max_num_incoming_transactions_3m' => 'getMaxNumIncomingTransactions3m',
        'max_num_incoming_transactions_6m' => 'getMaxNumIncomingTransactions6m',
        'max_num_incoming_transactions_12m' => 'getMaxNumIncomingTransactions12m',
        'mean_num_incoming_transactions_3d' => 'getMeanNumIncomingTransactions3d',
        'mean_num_incoming_transactions_1w' => 'getMeanNumIncomingTransactions1w',
        'mean_num_incoming_transactions_1m' => 'getMeanNumIncomingTransactions1m',
        'mean_num_incoming_transactions_3m' => 'getMeanNumIncomingTransactions3m',
        'mean_num_incoming_transactions_6m' => 'getMeanNumIncomingTransactions6m',
        'mean_num_incoming_transactions_12m' => 'getMeanNumIncomingTransactions12m',
        'sum_incoming_amount_3d' => 'getSumIncomingAmount3d',
        'sum_incoming_amount_1w' => 'getSumIncomingAmount1w',
        'sum_incoming_amount_1m' => 'getSumIncomingAmount1m',
        'sum_incoming_amount_3m' => 'getSumIncomingAmount3m',
        'sum_incoming_amount_6m' => 'getSumIncomingAmount6m',
        'sum_incoming_amount_12m' => 'getSumIncomingAmount12m',
        'max_incoming_amount_3d' => 'getMaxIncomingAmount3d',
        'max_incoming_amount_1w' => 'getMaxIncomingAmount1w',
        'max_incoming_amount_1m' => 'getMaxIncomingAmount1m',
        'max_incoming_amount_3m' => 'getMaxIncomingAmount3m',
        'max_incoming_amount_6m' => 'getMaxIncomingAmount6m',
        'max_incoming_amount_12m' => 'getMaxIncomingAmount12m',
        'mean_incoming_amount_3d' => 'getMeanIncomingAmount3d',
        'mean_incoming_amount_1w' => 'getMeanIncomingAmount1w',
        'mean_incoming_amount_1m' => 'getMeanIncomingAmount1m',
        'mean_incoming_amount_3m' => 'getMeanIncomingAmount3m',
        'mean_incoming_amount_6m' => 'getMeanIncomingAmount6m',
        'mean_incoming_amount_12m' => 'getMeanIncomingAmount12m',
        'num_outgoing_transactions_3d' => 'getNumOutgoingTransactions3d',
        'num_outgoing_transactions_1w' => 'getNumOutgoingTransactions1w',
        'num_outgoing_transactions_1m' => 'getNumOutgoingTransactions1m',
        'num_outgoing_transactions_3m' => 'getNumOutgoingTransactions3m',
        'num_outgoing_transactions_6m' => 'getNumOutgoingTransactions6m',
        'num_outgoing_transactions_12m' => 'getNumOutgoingTransactions12m',
        'max_num_outgoing_transactions_3d' => 'getMaxNumOutgoingTransactions3d',
        'max_num_outgoing_transactions_1w' => 'getMaxNumOutgoingTransactions1w',
        'max_num_outgoing_transactions_1m' => 'getMaxNumOutgoingTransactions1m',
        'max_num_outgoing_transactions_3m' => 'getMaxNumOutgoingTransactions3m',
        'max_num_outgoing_transactions_6m' => 'getMaxNumOutgoingTransactions6m',
        'max_num_outgoing_transactions_12m' => 'getMaxNumOutgoingTransactions12m',
        'mean_num_outgoing_transactions_3d' => 'getMeanNumOutgoingTransactions3d',
        'mean_num_outgoing_transactions_1w' => 'getMeanNumOutgoingTransactions1w',
        'mean_num_outgoing_transactions_1m' => 'getMeanNumOutgoingTransactions1m',
        'mean_num_outgoing_transactions_3m' => 'getMeanNumOutgoingTransactions3m',
        'mean_num_outgoing_transactions_6m' => 'getMeanNumOutgoingTransactions6m',
        'mean_num_outgoing_transactions_12m' => 'getMeanNumOutgoingTransactions12m',
        'sum_outgoing_amount_3d' => 'getSumOutgoingAmount3d',
        'sum_outgoing_amount_1w' => 'getSumOutgoingAmount1w',
        'sum_outgoing_amount_1m' => 'getSumOutgoingAmount1m',
        'sum_outgoing_amount_3m' => 'getSumOutgoingAmount3m',
        'sum_outgoing_amount_6m' => 'getSumOutgoingAmount6m',
        'sum_outgoing_amount_12m' => 'getSumOutgoingAmount12m',
        'max_outgoing_amount_3d' => 'getMaxOutgoingAmount3d',
        'max_outgoing_amount_1w' => 'getMaxOutgoingAmount1w',
        'max_outgoing_amount_1m' => 'getMaxOutgoingAmount1m',
        'max_outgoing_amount_3m' => 'getMaxOutgoingAmount3m',
        'max_outgoing_amount_6m' => 'getMaxOutgoingAmount6m',
        'max_outgoing_amount_12m' => 'getMaxOutgoingAmount12m',
        'mean_outgoing_amount_3d' => 'getMeanOutgoingAmount3d',
        'mean_outgoing_amount_1w' => 'getMeanOutgoingAmount1w',
        'mean_outgoing_amount_1m' => 'getMeanOutgoingAmount1m',
        'mean_outgoing_amount_3m' => 'getMeanOutgoingAmount3m',
        'mean_outgoing_amount_6m' => 'getMeanOutgoingAmount6m',
        'mean_outgoing_amount_12m' => 'getMeanOutgoingAmount12m',
        'days_without_transactions_3d' => 'getDaysWithoutTransactions3d',
        'days_without_transactions_1w' => 'getDaysWithoutTransactions1w',
        'days_without_transactions_1m' => 'getDaysWithoutTransactions1m',
        'days_without_transactions_3m' => 'getDaysWithoutTransactions3m',
        'days_without_transactions_6m' => 'getDaysWithoutTransactions6m',
        'days_without_transactions_12m' => 'getDaysWithoutTransactions12m',
        'days_since_last_transaction' => 'getDaysSinceLastTransaction',
        'days_since_last_incoming_transaction' => 'getDaysSinceLastIncomingTransaction',
        'days_since_last_outgoing_transaction' => 'getDaysSinceLastOutgoingTransaction',
        'days_history' => 'getDaysHistory'
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
        $this->container['num_transactions_3d'] = isset($data['num_transactions_3d']) ? $data['num_transactions_3d'] : 0;
        $this->container['num_transactions_1w'] = isset($data['num_transactions_1w']) ? $data['num_transactions_1w'] : 0;
        $this->container['num_transactions_1m'] = isset($data['num_transactions_1m']) ? $data['num_transactions_1m'] : 0;
        $this->container['num_transactions_3m'] = isset($data['num_transactions_3m']) ? $data['num_transactions_3m'] : 0;
        $this->container['num_transactions_6m'] = isset($data['num_transactions_6m']) ? $data['num_transactions_6m'] : 670;
        $this->container['num_transactions_12m'] = isset($data['num_transactions_12m']) ? $data['num_transactions_12m'] : 0;
        $this->container['max_num_transactions_3d'] = isset($data['max_num_transactions_3d']) ? $data['max_num_transactions_3d'] : 0;
        $this->container['max_num_transactions_1w'] = isset($data['max_num_transactions_1w']) ? $data['max_num_transactions_1w'] : 0;
        $this->container['max_num_transactions_1m'] = isset($data['max_num_transactions_1m']) ? $data['max_num_transactions_1m'] : 0;
        $this->container['max_num_transactions_3m'] = isset($data['max_num_transactions_3m']) ? $data['max_num_transactions_3m'] : 0;
        $this->container['max_num_transactions_6m'] = isset($data['max_num_transactions_6m']) ? $data['max_num_transactions_6m'] : 0;
        $this->container['max_num_transactions_12m'] = isset($data['max_num_transactions_12m']) ? $data['max_num_transactions_12m'] : 0;
        $this->container['mean_num_transactions_3d'] = isset($data['mean_num_transactions_3d']) ? $data['mean_num_transactions_3d'] : 0;
        $this->container['mean_num_transactions_1w'] = isset($data['mean_num_transactions_1w']) ? $data['mean_num_transactions_1w'] : 0;
        $this->container['mean_num_transactions_1m'] = isset($data['mean_num_transactions_1m']) ? $data['mean_num_transactions_1m'] : 0;
        $this->container['mean_num_transactions_3m'] = isset($data['mean_num_transactions_3m']) ? $data['mean_num_transactions_3m'] : 0;
        $this->container['mean_num_transactions_6m'] = isset($data['mean_num_transactions_6m']) ? $data['mean_num_transactions_6m'] : 0;
        $this->container['mean_num_transactions_12m'] = isset($data['mean_num_transactions_12m']) ? $data['mean_num_transactions_12m'] : 0;
        $this->container['num_incoming_transactions_3d'] = isset($data['num_incoming_transactions_3d']) ? $data['num_incoming_transactions_3d'] : 0;
        $this->container['num_incoming_transactions_1w'] = isset($data['num_incoming_transactions_1w']) ? $data['num_incoming_transactions_1w'] : 0;
        $this->container['num_incoming_transactions_1m'] = isset($data['num_incoming_transactions_1m']) ? $data['num_incoming_transactions_1m'] : 0;
        $this->container['num_incoming_transactions_3m'] = isset($data['num_incoming_transactions_3m']) ? $data['num_incoming_transactions_3m'] : 0;
        $this->container['num_incoming_transactions_6m'] = isset($data['num_incoming_transactions_6m']) ? $data['num_incoming_transactions_6m'] : 0;
        $this->container['num_incoming_transactions_12m'] = isset($data['num_incoming_transactions_12m']) ? $data['num_incoming_transactions_12m'] : 0;
        $this->container['max_num_incoming_transactions_3d'] = isset($data['max_num_incoming_transactions_3d']) ? $data['max_num_incoming_transactions_3d'] : 0;
        $this->container['max_num_incoming_transactions_1w'] = isset($data['max_num_incoming_transactions_1w']) ? $data['max_num_incoming_transactions_1w'] : 0;
        $this->container['max_num_incoming_transactions_1m'] = isset($data['max_num_incoming_transactions_1m']) ? $data['max_num_incoming_transactions_1m'] : 0;
        $this->container['max_num_incoming_transactions_3m'] = isset($data['max_num_incoming_transactions_3m']) ? $data['max_num_incoming_transactions_3m'] : 0;
        $this->container['max_num_incoming_transactions_6m'] = isset($data['max_num_incoming_transactions_6m']) ? $data['max_num_incoming_transactions_6m'] : 0;
        $this->container['max_num_incoming_transactions_12m'] = isset($data['max_num_incoming_transactions_12m']) ? $data['max_num_incoming_transactions_12m'] : 0;
        $this->container['mean_num_incoming_transactions_3d'] = isset($data['mean_num_incoming_transactions_3d']) ? $data['mean_num_incoming_transactions_3d'] : 0;
        $this->container['mean_num_incoming_transactions_1w'] = isset($data['mean_num_incoming_transactions_1w']) ? $data['mean_num_incoming_transactions_1w'] : 0;
        $this->container['mean_num_incoming_transactions_1m'] = isset($data['mean_num_incoming_transactions_1m']) ? $data['mean_num_incoming_transactions_1m'] : 0;
        $this->container['mean_num_incoming_transactions_3m'] = isset($data['mean_num_incoming_transactions_3m']) ? $data['mean_num_incoming_transactions_3m'] : 0;
        $this->container['mean_num_incoming_transactions_6m'] = isset($data['mean_num_incoming_transactions_6m']) ? $data['mean_num_incoming_transactions_6m'] : 0;
        $this->container['mean_num_incoming_transactions_12m'] = isset($data['mean_num_incoming_transactions_12m']) ? $data['mean_num_incoming_transactions_12m'] : 0;
        $this->container['sum_incoming_amount_3d'] = isset($data['sum_incoming_amount_3d']) ? $data['sum_incoming_amount_3d'] : null;
        $this->container['sum_incoming_amount_1w'] = isset($data['sum_incoming_amount_1w']) ? $data['sum_incoming_amount_1w'] : null;
        $this->container['sum_incoming_amount_1m'] = isset($data['sum_incoming_amount_1m']) ? $data['sum_incoming_amount_1m'] : null;
        $this->container['sum_incoming_amount_3m'] = isset($data['sum_incoming_amount_3m']) ? $data['sum_incoming_amount_3m'] : null;
        $this->container['sum_incoming_amount_6m'] = isset($data['sum_incoming_amount_6m']) ? $data['sum_incoming_amount_6m'] : null;
        $this->container['sum_incoming_amount_12m'] = isset($data['sum_incoming_amount_12m']) ? $data['sum_incoming_amount_12m'] : null;
        $this->container['max_incoming_amount_3d'] = isset($data['max_incoming_amount_3d']) ? $data['max_incoming_amount_3d'] : null;
        $this->container['max_incoming_amount_1w'] = isset($data['max_incoming_amount_1w']) ? $data['max_incoming_amount_1w'] : null;
        $this->container['max_incoming_amount_1m'] = isset($data['max_incoming_amount_1m']) ? $data['max_incoming_amount_1m'] : null;
        $this->container['max_incoming_amount_3m'] = isset($data['max_incoming_amount_3m']) ? $data['max_incoming_amount_3m'] : null;
        $this->container['max_incoming_amount_6m'] = isset($data['max_incoming_amount_6m']) ? $data['max_incoming_amount_6m'] : null;
        $this->container['max_incoming_amount_12m'] = isset($data['max_incoming_amount_12m']) ? $data['max_incoming_amount_12m'] : null;
        $this->container['mean_incoming_amount_3d'] = isset($data['mean_incoming_amount_3d']) ? $data['mean_incoming_amount_3d'] : null;
        $this->container['mean_incoming_amount_1w'] = isset($data['mean_incoming_amount_1w']) ? $data['mean_incoming_amount_1w'] : null;
        $this->container['mean_incoming_amount_1m'] = isset($data['mean_incoming_amount_1m']) ? $data['mean_incoming_amount_1m'] : null;
        $this->container['mean_incoming_amount_3m'] = isset($data['mean_incoming_amount_3m']) ? $data['mean_incoming_amount_3m'] : null;
        $this->container['mean_incoming_amount_6m'] = isset($data['mean_incoming_amount_6m']) ? $data['mean_incoming_amount_6m'] : null;
        $this->container['mean_incoming_amount_12m'] = isset($data['mean_incoming_amount_12m']) ? $data['mean_incoming_amount_12m'] : null;
        $this->container['num_outgoing_transactions_3d'] = isset($data['num_outgoing_transactions_3d']) ? $data['num_outgoing_transactions_3d'] : 0;
        $this->container['num_outgoing_transactions_1w'] = isset($data['num_outgoing_transactions_1w']) ? $data['num_outgoing_transactions_1w'] : 0;
        $this->container['num_outgoing_transactions_1m'] = isset($data['num_outgoing_transactions_1m']) ? $data['num_outgoing_transactions_1m'] : 0;
        $this->container['num_outgoing_transactions_3m'] = isset($data['num_outgoing_transactions_3m']) ? $data['num_outgoing_transactions_3m'] : 0;
        $this->container['num_outgoing_transactions_6m'] = isset($data['num_outgoing_transactions_6m']) ? $data['num_outgoing_transactions_6m'] : 0;
        $this->container['num_outgoing_transactions_12m'] = isset($data['num_outgoing_transactions_12m']) ? $data['num_outgoing_transactions_12m'] : 0;
        $this->container['max_num_outgoing_transactions_3d'] = isset($data['max_num_outgoing_transactions_3d']) ? $data['max_num_outgoing_transactions_3d'] : 0;
        $this->container['max_num_outgoing_transactions_1w'] = isset($data['max_num_outgoing_transactions_1w']) ? $data['max_num_outgoing_transactions_1w'] : 0;
        $this->container['max_num_outgoing_transactions_1m'] = isset($data['max_num_outgoing_transactions_1m']) ? $data['max_num_outgoing_transactions_1m'] : 0;
        $this->container['max_num_outgoing_transactions_3m'] = isset($data['max_num_outgoing_transactions_3m']) ? $data['max_num_outgoing_transactions_3m'] : 0;
        $this->container['max_num_outgoing_transactions_6m'] = isset($data['max_num_outgoing_transactions_6m']) ? $data['max_num_outgoing_transactions_6m'] : 0;
        $this->container['max_num_outgoing_transactions_12m'] = isset($data['max_num_outgoing_transactions_12m']) ? $data['max_num_outgoing_transactions_12m'] : 0;
        $this->container['mean_num_outgoing_transactions_3d'] = isset($data['mean_num_outgoing_transactions_3d']) ? $data['mean_num_outgoing_transactions_3d'] : 0;
        $this->container['mean_num_outgoing_transactions_1w'] = isset($data['mean_num_outgoing_transactions_1w']) ? $data['mean_num_outgoing_transactions_1w'] : 0;
        $this->container['mean_num_outgoing_transactions_1m'] = isset($data['mean_num_outgoing_transactions_1m']) ? $data['mean_num_outgoing_transactions_1m'] : 0;
        $this->container['mean_num_outgoing_transactions_3m'] = isset($data['mean_num_outgoing_transactions_3m']) ? $data['mean_num_outgoing_transactions_3m'] : 0;
        $this->container['mean_num_outgoing_transactions_6m'] = isset($data['mean_num_outgoing_transactions_6m']) ? $data['mean_num_outgoing_transactions_6m'] : 0;
        $this->container['mean_num_outgoing_transactions_12m'] = isset($data['mean_num_outgoing_transactions_12m']) ? $data['mean_num_outgoing_transactions_12m'] : 0;
        $this->container['sum_outgoing_amount_3d'] = isset($data['sum_outgoing_amount_3d']) ? $data['sum_outgoing_amount_3d'] : null;
        $this->container['sum_outgoing_amount_1w'] = isset($data['sum_outgoing_amount_1w']) ? $data['sum_outgoing_amount_1w'] : null;
        $this->container['sum_outgoing_amount_1m'] = isset($data['sum_outgoing_amount_1m']) ? $data['sum_outgoing_amount_1m'] : null;
        $this->container['sum_outgoing_amount_3m'] = isset($data['sum_outgoing_amount_3m']) ? $data['sum_outgoing_amount_3m'] : null;
        $this->container['sum_outgoing_amount_6m'] = isset($data['sum_outgoing_amount_6m']) ? $data['sum_outgoing_amount_6m'] : null;
        $this->container['sum_outgoing_amount_12m'] = isset($data['sum_outgoing_amount_12m']) ? $data['sum_outgoing_amount_12m'] : null;
        $this->container['max_outgoing_amount_3d'] = isset($data['max_outgoing_amount_3d']) ? $data['max_outgoing_amount_3d'] : null;
        $this->container['max_outgoing_amount_1w'] = isset($data['max_outgoing_amount_1w']) ? $data['max_outgoing_amount_1w'] : null;
        $this->container['max_outgoing_amount_1m'] = isset($data['max_outgoing_amount_1m']) ? $data['max_outgoing_amount_1m'] : null;
        $this->container['max_outgoing_amount_3m'] = isset($data['max_outgoing_amount_3m']) ? $data['max_outgoing_amount_3m'] : null;
        $this->container['max_outgoing_amount_6m'] = isset($data['max_outgoing_amount_6m']) ? $data['max_outgoing_amount_6m'] : null;
        $this->container['max_outgoing_amount_12m'] = isset($data['max_outgoing_amount_12m']) ? $data['max_outgoing_amount_12m'] : null;
        $this->container['mean_outgoing_amount_3d'] = isset($data['mean_outgoing_amount_3d']) ? $data['mean_outgoing_amount_3d'] : null;
        $this->container['mean_outgoing_amount_1w'] = isset($data['mean_outgoing_amount_1w']) ? $data['mean_outgoing_amount_1w'] : null;
        $this->container['mean_outgoing_amount_1m'] = isset($data['mean_outgoing_amount_1m']) ? $data['mean_outgoing_amount_1m'] : null;
        $this->container['mean_outgoing_amount_3m'] = isset($data['mean_outgoing_amount_3m']) ? $data['mean_outgoing_amount_3m'] : null;
        $this->container['mean_outgoing_amount_6m'] = isset($data['mean_outgoing_amount_6m']) ? $data['mean_outgoing_amount_6m'] : null;
        $this->container['mean_outgoing_amount_12m'] = isset($data['mean_outgoing_amount_12m']) ? $data['mean_outgoing_amount_12m'] : null;
        $this->container['days_without_transactions_3d'] = isset($data['days_without_transactions_3d']) ? $data['days_without_transactions_3d'] : 0;
        $this->container['days_without_transactions_1w'] = isset($data['days_without_transactions_1w']) ? $data['days_without_transactions_1w'] : 0;
        $this->container['days_without_transactions_1m'] = isset($data['days_without_transactions_1m']) ? $data['days_without_transactions_1m'] : 0;
        $this->container['days_without_transactions_3m'] = isset($data['days_without_transactions_3m']) ? $data['days_without_transactions_3m'] : 0;
        $this->container['days_without_transactions_6m'] = isset($data['days_without_transactions_6m']) ? $data['days_without_transactions_6m'] : 0;
        $this->container['days_without_transactions_12m'] = isset($data['days_without_transactions_12m']) ? $data['days_without_transactions_12m'] : 0;
        $this->container['days_since_last_transaction'] = isset($data['days_since_last_transaction']) ? $data['days_since_last_transaction'] : 0;
        $this->container['days_since_last_incoming_transaction'] = isset($data['days_since_last_incoming_transaction']) ? $data['days_since_last_incoming_transaction'] : 0;
        $this->container['days_since_last_outgoing_transaction'] = isset($data['days_since_last_outgoing_transaction']) ? $data['days_since_last_outgoing_transaction'] : 0;
        $this->container['days_history'] = isset($data['days_history']) ? $data['days_history'] : 0;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['num_transactions_3d'] === null) {
            $invalidProperties[] = "'num_transactions_3d' can't be null";
        }
        if ($this->container['num_transactions_1w'] === null) {
            $invalidProperties[] = "'num_transactions_1w' can't be null";
        }
        if ($this->container['num_transactions_1m'] === null) {
            $invalidProperties[] = "'num_transactions_1m' can't be null";
        }
        if ($this->container['num_transactions_3m'] === null) {
            $invalidProperties[] = "'num_transactions_3m' can't be null";
        }
        if ($this->container['num_transactions_6m'] === null) {
            $invalidProperties[] = "'num_transactions_6m' can't be null";
        }
        if ($this->container['num_transactions_12m'] === null) {
            $invalidProperties[] = "'num_transactions_12m' can't be null";
        }
        if ($this->container['max_num_transactions_3d'] === null) {
            $invalidProperties[] = "'max_num_transactions_3d' can't be null";
        }
        if ($this->container['max_num_transactions_1w'] === null) {
            $invalidProperties[] = "'max_num_transactions_1w' can't be null";
        }
        if ($this->container['max_num_transactions_1m'] === null) {
            $invalidProperties[] = "'max_num_transactions_1m' can't be null";
        }
        if ($this->container['max_num_transactions_3m'] === null) {
            $invalidProperties[] = "'max_num_transactions_3m' can't be null";
        }
        if ($this->container['max_num_transactions_6m'] === null) {
            $invalidProperties[] = "'max_num_transactions_6m' can't be null";
        }
        if ($this->container['max_num_transactions_12m'] === null) {
            $invalidProperties[] = "'max_num_transactions_12m' can't be null";
        }
        if ($this->container['mean_num_transactions_3d'] === null) {
            $invalidProperties[] = "'mean_num_transactions_3d' can't be null";
        }
        if ($this->container['mean_num_transactions_1w'] === null) {
            $invalidProperties[] = "'mean_num_transactions_1w' can't be null";
        }
        if ($this->container['mean_num_transactions_1m'] === null) {
            $invalidProperties[] = "'mean_num_transactions_1m' can't be null";
        }
        if ($this->container['mean_num_transactions_3m'] === null) {
            $invalidProperties[] = "'mean_num_transactions_3m' can't be null";
        }
        if ($this->container['mean_num_transactions_6m'] === null) {
            $invalidProperties[] = "'mean_num_transactions_6m' can't be null";
        }
        if ($this->container['mean_num_transactions_12m'] === null) {
            $invalidProperties[] = "'mean_num_transactions_12m' can't be null";
        }
        if ($this->container['num_incoming_transactions_3d'] === null) {
            $invalidProperties[] = "'num_incoming_transactions_3d' can't be null";
        }
        if ($this->container['num_incoming_transactions_1w'] === null) {
            $invalidProperties[] = "'num_incoming_transactions_1w' can't be null";
        }
        if ($this->container['num_incoming_transactions_1m'] === null) {
            $invalidProperties[] = "'num_incoming_transactions_1m' can't be null";
        }
        if ($this->container['num_incoming_transactions_3m'] === null) {
            $invalidProperties[] = "'num_incoming_transactions_3m' can't be null";
        }
        if ($this->container['num_incoming_transactions_6m'] === null) {
            $invalidProperties[] = "'num_incoming_transactions_6m' can't be null";
        }
        if ($this->container['num_incoming_transactions_12m'] === null) {
            $invalidProperties[] = "'num_incoming_transactions_12m' can't be null";
        }
        if ($this->container['max_num_incoming_transactions_3d'] === null) {
            $invalidProperties[] = "'max_num_incoming_transactions_3d' can't be null";
        }
        if ($this->container['max_num_incoming_transactions_1w'] === null) {
            $invalidProperties[] = "'max_num_incoming_transactions_1w' can't be null";
        }
        if ($this->container['max_num_incoming_transactions_1m'] === null) {
            $invalidProperties[] = "'max_num_incoming_transactions_1m' can't be null";
        }
        if ($this->container['max_num_incoming_transactions_3m'] === null) {
            $invalidProperties[] = "'max_num_incoming_transactions_3m' can't be null";
        }
        if ($this->container['max_num_incoming_transactions_6m'] === null) {
            $invalidProperties[] = "'max_num_incoming_transactions_6m' can't be null";
        }
        if ($this->container['max_num_incoming_transactions_12m'] === null) {
            $invalidProperties[] = "'max_num_incoming_transactions_12m' can't be null";
        }
        if ($this->container['mean_num_incoming_transactions_3d'] === null) {
            $invalidProperties[] = "'mean_num_incoming_transactions_3d' can't be null";
        }
        if ($this->container['mean_num_incoming_transactions_1w'] === null) {
            $invalidProperties[] = "'mean_num_incoming_transactions_1w' can't be null";
        }
        if ($this->container['mean_num_incoming_transactions_1m'] === null) {
            $invalidProperties[] = "'mean_num_incoming_transactions_1m' can't be null";
        }
        if ($this->container['mean_num_incoming_transactions_3m'] === null) {
            $invalidProperties[] = "'mean_num_incoming_transactions_3m' can't be null";
        }
        if ($this->container['mean_num_incoming_transactions_6m'] === null) {
            $invalidProperties[] = "'mean_num_incoming_transactions_6m' can't be null";
        }
        if ($this->container['mean_num_incoming_transactions_12m'] === null) {
            $invalidProperties[] = "'mean_num_incoming_transactions_12m' can't be null";
        }
        if ($this->container['sum_incoming_amount_3d'] === null) {
            $invalidProperties[] = "'sum_incoming_amount_3d' can't be null";
        }
        if ($this->container['sum_incoming_amount_1w'] === null) {
            $invalidProperties[] = "'sum_incoming_amount_1w' can't be null";
        }
        if ($this->container['sum_incoming_amount_1m'] === null) {
            $invalidProperties[] = "'sum_incoming_amount_1m' can't be null";
        }
        if ($this->container['sum_incoming_amount_3m'] === null) {
            $invalidProperties[] = "'sum_incoming_amount_3m' can't be null";
        }
        if ($this->container['sum_incoming_amount_6m'] === null) {
            $invalidProperties[] = "'sum_incoming_amount_6m' can't be null";
        }
        if ($this->container['sum_incoming_amount_12m'] === null) {
            $invalidProperties[] = "'sum_incoming_amount_12m' can't be null";
        }
        if ($this->container['max_incoming_amount_3d'] === null) {
            $invalidProperties[] = "'max_incoming_amount_3d' can't be null";
        }
        if ($this->container['max_incoming_amount_1w'] === null) {
            $invalidProperties[] = "'max_incoming_amount_1w' can't be null";
        }
        if ($this->container['max_incoming_amount_1m'] === null) {
            $invalidProperties[] = "'max_incoming_amount_1m' can't be null";
        }
        if ($this->container['max_incoming_amount_3m'] === null) {
            $invalidProperties[] = "'max_incoming_amount_3m' can't be null";
        }
        if ($this->container['max_incoming_amount_6m'] === null) {
            $invalidProperties[] = "'max_incoming_amount_6m' can't be null";
        }
        if ($this->container['max_incoming_amount_12m'] === null) {
            $invalidProperties[] = "'max_incoming_amount_12m' can't be null";
        }
        if ($this->container['mean_incoming_amount_3d'] === null) {
            $invalidProperties[] = "'mean_incoming_amount_3d' can't be null";
        }
        if ($this->container['mean_incoming_amount_1w'] === null) {
            $invalidProperties[] = "'mean_incoming_amount_1w' can't be null";
        }
        if ($this->container['mean_incoming_amount_1m'] === null) {
            $invalidProperties[] = "'mean_incoming_amount_1m' can't be null";
        }
        if ($this->container['mean_incoming_amount_3m'] === null) {
            $invalidProperties[] = "'mean_incoming_amount_3m' can't be null";
        }
        if ($this->container['mean_incoming_amount_6m'] === null) {
            $invalidProperties[] = "'mean_incoming_amount_6m' can't be null";
        }
        if ($this->container['mean_incoming_amount_12m'] === null) {
            $invalidProperties[] = "'mean_incoming_amount_12m' can't be null";
        }
        if ($this->container['num_outgoing_transactions_3d'] === null) {
            $invalidProperties[] = "'num_outgoing_transactions_3d' can't be null";
        }
        if ($this->container['num_outgoing_transactions_1w'] === null) {
            $invalidProperties[] = "'num_outgoing_transactions_1w' can't be null";
        }
        if ($this->container['num_outgoing_transactions_1m'] === null) {
            $invalidProperties[] = "'num_outgoing_transactions_1m' can't be null";
        }
        if ($this->container['num_outgoing_transactions_3m'] === null) {
            $invalidProperties[] = "'num_outgoing_transactions_3m' can't be null";
        }
        if ($this->container['num_outgoing_transactions_6m'] === null) {
            $invalidProperties[] = "'num_outgoing_transactions_6m' can't be null";
        }
        if ($this->container['num_outgoing_transactions_12m'] === null) {
            $invalidProperties[] = "'num_outgoing_transactions_12m' can't be null";
        }
        if ($this->container['max_num_outgoing_transactions_3d'] === null) {
            $invalidProperties[] = "'max_num_outgoing_transactions_3d' can't be null";
        }
        if ($this->container['max_num_outgoing_transactions_1w'] === null) {
            $invalidProperties[] = "'max_num_outgoing_transactions_1w' can't be null";
        }
        if ($this->container['max_num_outgoing_transactions_1m'] === null) {
            $invalidProperties[] = "'max_num_outgoing_transactions_1m' can't be null";
        }
        if ($this->container['max_num_outgoing_transactions_3m'] === null) {
            $invalidProperties[] = "'max_num_outgoing_transactions_3m' can't be null";
        }
        if ($this->container['max_num_outgoing_transactions_6m'] === null) {
            $invalidProperties[] = "'max_num_outgoing_transactions_6m' can't be null";
        }
        if ($this->container['max_num_outgoing_transactions_12m'] === null) {
            $invalidProperties[] = "'max_num_outgoing_transactions_12m' can't be null";
        }
        if ($this->container['mean_num_outgoing_transactions_3d'] === null) {
            $invalidProperties[] = "'mean_num_outgoing_transactions_3d' can't be null";
        }
        if ($this->container['mean_num_outgoing_transactions_1w'] === null) {
            $invalidProperties[] = "'mean_num_outgoing_transactions_1w' can't be null";
        }
        if ($this->container['mean_num_outgoing_transactions_1m'] === null) {
            $invalidProperties[] = "'mean_num_outgoing_transactions_1m' can't be null";
        }
        if ($this->container['mean_num_outgoing_transactions_3m'] === null) {
            $invalidProperties[] = "'mean_num_outgoing_transactions_3m' can't be null";
        }
        if ($this->container['mean_num_outgoing_transactions_6m'] === null) {
            $invalidProperties[] = "'mean_num_outgoing_transactions_6m' can't be null";
        }
        if ($this->container['mean_num_outgoing_transactions_12m'] === null) {
            $invalidProperties[] = "'mean_num_outgoing_transactions_12m' can't be null";
        }
        if ($this->container['sum_outgoing_amount_3d'] === null) {
            $invalidProperties[] = "'sum_outgoing_amount_3d' can't be null";
        }
        if ($this->container['sum_outgoing_amount_1w'] === null) {
            $invalidProperties[] = "'sum_outgoing_amount_1w' can't be null";
        }
        if ($this->container['sum_outgoing_amount_1m'] === null) {
            $invalidProperties[] = "'sum_outgoing_amount_1m' can't be null";
        }
        if ($this->container['sum_outgoing_amount_3m'] === null) {
            $invalidProperties[] = "'sum_outgoing_amount_3m' can't be null";
        }
        if ($this->container['sum_outgoing_amount_6m'] === null) {
            $invalidProperties[] = "'sum_outgoing_amount_6m' can't be null";
        }
        if ($this->container['sum_outgoing_amount_12m'] === null) {
            $invalidProperties[] = "'sum_outgoing_amount_12m' can't be null";
        }
        if ($this->container['max_outgoing_amount_3d'] === null) {
            $invalidProperties[] = "'max_outgoing_amount_3d' can't be null";
        }
        if ($this->container['max_outgoing_amount_1w'] === null) {
            $invalidProperties[] = "'max_outgoing_amount_1w' can't be null";
        }
        if ($this->container['max_outgoing_amount_1m'] === null) {
            $invalidProperties[] = "'max_outgoing_amount_1m' can't be null";
        }
        if ($this->container['max_outgoing_amount_3m'] === null) {
            $invalidProperties[] = "'max_outgoing_amount_3m' can't be null";
        }
        if ($this->container['max_outgoing_amount_6m'] === null) {
            $invalidProperties[] = "'max_outgoing_amount_6m' can't be null";
        }
        if ($this->container['max_outgoing_amount_12m'] === null) {
            $invalidProperties[] = "'max_outgoing_amount_12m' can't be null";
        }
        if ($this->container['mean_outgoing_amount_3d'] === null) {
            $invalidProperties[] = "'mean_outgoing_amount_3d' can't be null";
        }
        if ($this->container['mean_outgoing_amount_1w'] === null) {
            $invalidProperties[] = "'mean_outgoing_amount_1w' can't be null";
        }
        if ($this->container['mean_outgoing_amount_1m'] === null) {
            $invalidProperties[] = "'mean_outgoing_amount_1m' can't be null";
        }
        if ($this->container['mean_outgoing_amount_3m'] === null) {
            $invalidProperties[] = "'mean_outgoing_amount_3m' can't be null";
        }
        if ($this->container['mean_outgoing_amount_6m'] === null) {
            $invalidProperties[] = "'mean_outgoing_amount_6m' can't be null";
        }
        if ($this->container['mean_outgoing_amount_12m'] === null) {
            $invalidProperties[] = "'mean_outgoing_amount_12m' can't be null";
        }
        if ($this->container['days_without_transactions_3d'] === null) {
            $invalidProperties[] = "'days_without_transactions_3d' can't be null";
        }
        if ($this->container['days_without_transactions_1w'] === null) {
            $invalidProperties[] = "'days_without_transactions_1w' can't be null";
        }
        if ($this->container['days_without_transactions_1m'] === null) {
            $invalidProperties[] = "'days_without_transactions_1m' can't be null";
        }
        if ($this->container['days_without_transactions_3m'] === null) {
            $invalidProperties[] = "'days_without_transactions_3m' can't be null";
        }
        if ($this->container['days_without_transactions_6m'] === null) {
            $invalidProperties[] = "'days_without_transactions_6m' can't be null";
        }
        if ($this->container['days_without_transactions_12m'] === null) {
            $invalidProperties[] = "'days_without_transactions_12m' can't be null";
        }
        if ($this->container['days_since_last_transaction'] === null) {
            $invalidProperties[] = "'days_since_last_transaction' can't be null";
        }
        if ($this->container['days_since_last_incoming_transaction'] === null) {
            $invalidProperties[] = "'days_since_last_incoming_transaction' can't be null";
        }
        if ($this->container['days_since_last_outgoing_transaction'] === null) {
            $invalidProperties[] = "'days_since_last_outgoing_transaction' can't be null";
        }
        if ($this->container['days_history'] === null) {
            $invalidProperties[] = "'days_history' can't be null";
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
     * Gets num_transactions_3d
     *
     * @return int
     */
    public function getNumTransactions3d()
    {
        return $this->container['num_transactions_3d'];
    }

    /**
     * Sets num_transactions_3d
     *
     * @param int $num_transactions_3d The total number of transactions analyzed to determine the risk insights for the last three days (incoming and outgoing).
     *
     * @return $this
     */
    public function setNumTransactions3d($num_transactions_3d)
    {
        $this->container['num_transactions_3d'] = $num_transactions_3d;

        return $this;
    }

    /**
     * Gets num_transactions_1w
     *
     * @return int
     */
    public function getNumTransactions1w()
    {
        return $this->container['num_transactions_1w'];
    }

    /**
     * Sets num_transactions_1w
     *
     * @param int $num_transactions_1w The total number of transactions analyzed to determine the risk insights for the last week (incoming and outgoing).
     *
     * @return $this
     */
    public function setNumTransactions1w($num_transactions_1w)
    {
        $this->container['num_transactions_1w'] = $num_transactions_1w;

        return $this;
    }

    /**
     * Gets num_transactions_1m
     *
     * @return int
     */
    public function getNumTransactions1m()
    {
        return $this->container['num_transactions_1m'];
    }

    /**
     * Sets num_transactions_1m
     *
     * @param int $num_transactions_1m The total number of transactions analyzed to determine the risk insights for the last month (incoming and outgoing).
     *
     * @return $this
     */
    public function setNumTransactions1m($num_transactions_1m)
    {
        $this->container['num_transactions_1m'] = $num_transactions_1m;

        return $this;
    }

    /**
     * Gets num_transactions_3m
     *
     * @return int
     */
    public function getNumTransactions3m()
    {
        return $this->container['num_transactions_3m'];
    }

    /**
     * Sets num_transactions_3m
     *
     * @param int $num_transactions_3m The total number of transactions analyzed to determine the risk insights for the last three months (incoming and outgoing).
     *
     * @return $this
     */
    public function setNumTransactions3m($num_transactions_3m)
    {
        $this->container['num_transactions_3m'] = $num_transactions_3m;

        return $this;
    }

    /**
     * Gets num_transactions_6m
     *
     * @return int
     */
    public function getNumTransactions6m()
    {
        return $this->container['num_transactions_6m'];
    }

    /**
     * Sets num_transactions_6m
     *
     * @param int $num_transactions_6m The total number of transactions analyzed to determine the risk insights for the last six months (incoming and outgoing).
     *
     * @return $this
     */
    public function setNumTransactions6m($num_transactions_6m)
    {
        $this->container['num_transactions_6m'] = $num_transactions_6m;

        return $this;
    }

    /**
     * Gets num_transactions_12m
     *
     * @return int
     */
    public function getNumTransactions12m()
    {
        return $this->container['num_transactions_12m'];
    }

    /**
     * Sets num_transactions_12m
     *
     * @param int $num_transactions_12m The total number of transactions analyzed to determine the risk insights for the last twelve months (incoming and outgoing).
     *
     * @return $this
     */
    public function setNumTransactions12m($num_transactions_12m)
    {
        $this->container['num_transactions_12m'] = $num_transactions_12m;

        return $this;
    }

    /**
     * Gets max_num_transactions_3d
     *
     * @return int
     */
    public function getMaxNumTransactions3d()
    {
        return $this->container['max_num_transactions_3d'];
    }

    /**
     * Sets max_num_transactions_3d
     *
     * @param int $max_num_transactions_3d The maximum number of transactions for the last three days.
     *
     * @return $this
     */
    public function setMaxNumTransactions3d($max_num_transactions_3d)
    {
        $this->container['max_num_transactions_3d'] = $max_num_transactions_3d;

        return $this;
    }

    /**
     * Gets max_num_transactions_1w
     *
     * @return int
     */
    public function getMaxNumTransactions1w()
    {
        return $this->container['max_num_transactions_1w'];
    }

    /**
     * Sets max_num_transactions_1w
     *
     * @param int $max_num_transactions_1w The maximum number of transactions for the last week.
     *
     * @return $this
     */
    public function setMaxNumTransactions1w($max_num_transactions_1w)
    {
        $this->container['max_num_transactions_1w'] = $max_num_transactions_1w;

        return $this;
    }

    /**
     * Gets max_num_transactions_1m
     *
     * @return int
     */
    public function getMaxNumTransactions1m()
    {
        return $this->container['max_num_transactions_1m'];
    }

    /**
     * Sets max_num_transactions_1m
     *
     * @param int $max_num_transactions_1m The maximum number of transactions for the last month.
     *
     * @return $this
     */
    public function setMaxNumTransactions1m($max_num_transactions_1m)
    {
        $this->container['max_num_transactions_1m'] = $max_num_transactions_1m;

        return $this;
    }

    /**
     * Gets max_num_transactions_3m
     *
     * @return int
     */
    public function getMaxNumTransactions3m()
    {
        return $this->container['max_num_transactions_3m'];
    }

    /**
     * Sets max_num_transactions_3m
     *
     * @param int $max_num_transactions_3m The maximum number of transactions for the last three months.
     *
     * @return $this
     */
    public function setMaxNumTransactions3m($max_num_transactions_3m)
    {
        $this->container['max_num_transactions_3m'] = $max_num_transactions_3m;

        return $this;
    }

    /**
     * Gets max_num_transactions_6m
     *
     * @return int
     */
    public function getMaxNumTransactions6m()
    {
        return $this->container['max_num_transactions_6m'];
    }

    /**
     * Sets max_num_transactions_6m
     *
     * @param int $max_num_transactions_6m The maximum number of transactions for the last six months.
     *
     * @return $this
     */
    public function setMaxNumTransactions6m($max_num_transactions_6m)
    {
        $this->container['max_num_transactions_6m'] = $max_num_transactions_6m;

        return $this;
    }

    /**
     * Gets max_num_transactions_12m
     *
     * @return int
     */
    public function getMaxNumTransactions12m()
    {
        return $this->container['max_num_transactions_12m'];
    }

    /**
     * Sets max_num_transactions_12m
     *
     * @param int $max_num_transactions_12m The maximum number of transactions for the last twelve months.
     *
     * @return $this
     */
    public function setMaxNumTransactions12m($max_num_transactions_12m)
    {
        $this->container['max_num_transactions_12m'] = $max_num_transactions_12m;

        return $this;
    }

    /**
     * Gets mean_num_transactions_3d
     *
     * @return float
     */
    public function getMeanNumTransactions3d()
    {
        return $this->container['mean_num_transactions_3d'];
    }

    /**
     * Sets mean_num_transactions_3d
     *
     * @param float $mean_num_transactions_3d The mean number of transactions for the last three days.
     *
     * @return $this
     */
    public function setMeanNumTransactions3d($mean_num_transactions_3d)
    {
        $this->container['mean_num_transactions_3d'] = $mean_num_transactions_3d;

        return $this;
    }

    /**
     * Gets mean_num_transactions_1w
     *
     * @return float
     */
    public function getMeanNumTransactions1w()
    {
        return $this->container['mean_num_transactions_1w'];
    }

    /**
     * Sets mean_num_transactions_1w
     *
     * @param float $mean_num_transactions_1w The mean number of transactions for the last week.
     *
     * @return $this
     */
    public function setMeanNumTransactions1w($mean_num_transactions_1w)
    {
        $this->container['mean_num_transactions_1w'] = $mean_num_transactions_1w;

        return $this;
    }

    /**
     * Gets mean_num_transactions_1m
     *
     * @return float
     */
    public function getMeanNumTransactions1m()
    {
        return $this->container['mean_num_transactions_1m'];
    }

    /**
     * Sets mean_num_transactions_1m
     *
     * @param float $mean_num_transactions_1m The mean number of transactions for the last month.
     *
     * @return $this
     */
    public function setMeanNumTransactions1m($mean_num_transactions_1m)
    {
        $this->container['mean_num_transactions_1m'] = $mean_num_transactions_1m;

        return $this;
    }

    /**
     * Gets mean_num_transactions_3m
     *
     * @return float
     */
    public function getMeanNumTransactions3m()
    {
        return $this->container['mean_num_transactions_3m'];
    }

    /**
     * Sets mean_num_transactions_3m
     *
     * @param float $mean_num_transactions_3m The mean number of transactions for the last three months.
     *
     * @return $this
     */
    public function setMeanNumTransactions3m($mean_num_transactions_3m)
    {
        $this->container['mean_num_transactions_3m'] = $mean_num_transactions_3m;

        return $this;
    }

    /**
     * Gets mean_num_transactions_6m
     *
     * @return float
     */
    public function getMeanNumTransactions6m()
    {
        return $this->container['mean_num_transactions_6m'];
    }

    /**
     * Sets mean_num_transactions_6m
     *
     * @param float $mean_num_transactions_6m The mean number of transactions for the last six months.
     *
     * @return $this
     */
    public function setMeanNumTransactions6m($mean_num_transactions_6m)
    {
        $this->container['mean_num_transactions_6m'] = $mean_num_transactions_6m;

        return $this;
    }

    /**
     * Gets mean_num_transactions_12m
     *
     * @return float
     */
    public function getMeanNumTransactions12m()
    {
        return $this->container['mean_num_transactions_12m'];
    }

    /**
     * Sets mean_num_transactions_12m
     *
     * @param float $mean_num_transactions_12m The mean number of transactions for the last twelve months.
     *
     * @return $this
     */
    public function setMeanNumTransactions12m($mean_num_transactions_12m)
    {
        $this->container['mean_num_transactions_12m'] = $mean_num_transactions_12m;

        return $this;
    }

    /**
     * Gets num_incoming_transactions_3d
     *
     * @return int
     */
    public function getNumIncomingTransactions3d()
    {
        return $this->container['num_incoming_transactions_3d'];
    }

    /**
     * Sets num_incoming_transactions_3d
     *
     * @param int $num_incoming_transactions_3d The total number of inflow transactions for the last three days.
     *
     * @return $this
     */
    public function setNumIncomingTransactions3d($num_incoming_transactions_3d)
    {
        $this->container['num_incoming_transactions_3d'] = $num_incoming_transactions_3d;

        return $this;
    }

    /**
     * Gets num_incoming_transactions_1w
     *
     * @return int
     */
    public function getNumIncomingTransactions1w()
    {
        return $this->container['num_incoming_transactions_1w'];
    }

    /**
     * Sets num_incoming_transactions_1w
     *
     * @param int $num_incoming_transactions_1w The total number of inflow transactions for the last week.
     *
     * @return $this
     */
    public function setNumIncomingTransactions1w($num_incoming_transactions_1w)
    {
        $this->container['num_incoming_transactions_1w'] = $num_incoming_transactions_1w;

        return $this;
    }

    /**
     * Gets num_incoming_transactions_1m
     *
     * @return int
     */
    public function getNumIncomingTransactions1m()
    {
        return $this->container['num_incoming_transactions_1m'];
    }

    /**
     * Sets num_incoming_transactions_1m
     *
     * @param int $num_incoming_transactions_1m The total number of inflow transactions for the last month.
     *
     * @return $this
     */
    public function setNumIncomingTransactions1m($num_incoming_transactions_1m)
    {
        $this->container['num_incoming_transactions_1m'] = $num_incoming_transactions_1m;

        return $this;
    }

    /**
     * Gets num_incoming_transactions_3m
     *
     * @return int
     */
    public function getNumIncomingTransactions3m()
    {
        return $this->container['num_incoming_transactions_3m'];
    }

    /**
     * Sets num_incoming_transactions_3m
     *
     * @param int $num_incoming_transactions_3m The total number of inflow transactions for the last three months.
     *
     * @return $this
     */
    public function setNumIncomingTransactions3m($num_incoming_transactions_3m)
    {
        $this->container['num_incoming_transactions_3m'] = $num_incoming_transactions_3m;

        return $this;
    }

    /**
     * Gets num_incoming_transactions_6m
     *
     * @return int
     */
    public function getNumIncomingTransactions6m()
    {
        return $this->container['num_incoming_transactions_6m'];
    }

    /**
     * Sets num_incoming_transactions_6m
     *
     * @param int $num_incoming_transactions_6m The total number of inflow transactions for the last six months.
     *
     * @return $this
     */
    public function setNumIncomingTransactions6m($num_incoming_transactions_6m)
    {
        $this->container['num_incoming_transactions_6m'] = $num_incoming_transactions_6m;

        return $this;
    }

    /**
     * Gets num_incoming_transactions_12m
     *
     * @return int
     */
    public function getNumIncomingTransactions12m()
    {
        return $this->container['num_incoming_transactions_12m'];
    }

    /**
     * Sets num_incoming_transactions_12m
     *
     * @param int $num_incoming_transactions_12m The total number of inflow transactions for the last twelve months.
     *
     * @return $this
     */
    public function setNumIncomingTransactions12m($num_incoming_transactions_12m)
    {
        $this->container['num_incoming_transactions_12m'] = $num_incoming_transactions_12m;

        return $this;
    }

    /**
     * Gets max_num_incoming_transactions_3d
     *
     * @return int
     */
    public function getMaxNumIncomingTransactions3d()
    {
        return $this->container['max_num_incoming_transactions_3d'];
    }

    /**
     * Sets max_num_incoming_transactions_3d
     *
     * @param int $max_num_incoming_transactions_3d The maximum number of inflow transactions for the last three days.
     *
     * @return $this
     */
    public function setMaxNumIncomingTransactions3d($max_num_incoming_transactions_3d)
    {
        $this->container['max_num_incoming_transactions_3d'] = $max_num_incoming_transactions_3d;

        return $this;
    }

    /**
     * Gets max_num_incoming_transactions_1w
     *
     * @return int
     */
    public function getMaxNumIncomingTransactions1w()
    {
        return $this->container['max_num_incoming_transactions_1w'];
    }

    /**
     * Sets max_num_incoming_transactions_1w
     *
     * @param int $max_num_incoming_transactions_1w The maximum number of inflow transactions for the last week.
     *
     * @return $this
     */
    public function setMaxNumIncomingTransactions1w($max_num_incoming_transactions_1w)
    {
        $this->container['max_num_incoming_transactions_1w'] = $max_num_incoming_transactions_1w;

        return $this;
    }

    /**
     * Gets max_num_incoming_transactions_1m
     *
     * @return int
     */
    public function getMaxNumIncomingTransactions1m()
    {
        return $this->container['max_num_incoming_transactions_1m'];
    }

    /**
     * Sets max_num_incoming_transactions_1m
     *
     * @param int $max_num_incoming_transactions_1m The maximum number of inflow transactions for the last month.
     *
     * @return $this
     */
    public function setMaxNumIncomingTransactions1m($max_num_incoming_transactions_1m)
    {
        $this->container['max_num_incoming_transactions_1m'] = $max_num_incoming_transactions_1m;

        return $this;
    }

    /**
     * Gets max_num_incoming_transactions_3m
     *
     * @return int
     */
    public function getMaxNumIncomingTransactions3m()
    {
        return $this->container['max_num_incoming_transactions_3m'];
    }

    /**
     * Sets max_num_incoming_transactions_3m
     *
     * @param int $max_num_incoming_transactions_3m The maximum number of inflow transactions for the last three months.
     *
     * @return $this
     */
    public function setMaxNumIncomingTransactions3m($max_num_incoming_transactions_3m)
    {
        $this->container['max_num_incoming_transactions_3m'] = $max_num_incoming_transactions_3m;

        return $this;
    }

    /**
     * Gets max_num_incoming_transactions_6m
     *
     * @return int
     */
    public function getMaxNumIncomingTransactions6m()
    {
        return $this->container['max_num_incoming_transactions_6m'];
    }

    /**
     * Sets max_num_incoming_transactions_6m
     *
     * @param int $max_num_incoming_transactions_6m The maximum number of inflow transactions for the last six months.
     *
     * @return $this
     */
    public function setMaxNumIncomingTransactions6m($max_num_incoming_transactions_6m)
    {
        $this->container['max_num_incoming_transactions_6m'] = $max_num_incoming_transactions_6m;

        return $this;
    }

    /**
     * Gets max_num_incoming_transactions_12m
     *
     * @return int
     */
    public function getMaxNumIncomingTransactions12m()
    {
        return $this->container['max_num_incoming_transactions_12m'];
    }

    /**
     * Sets max_num_incoming_transactions_12m
     *
     * @param int $max_num_incoming_transactions_12m The maximum number of inflow transactions for the last twelve months.
     *
     * @return $this
     */
    public function setMaxNumIncomingTransactions12m($max_num_incoming_transactions_12m)
    {
        $this->container['max_num_incoming_transactions_12m'] = $max_num_incoming_transactions_12m;

        return $this;
    }

    /**
     * Gets mean_num_incoming_transactions_3d
     *
     * @return float
     */
    public function getMeanNumIncomingTransactions3d()
    {
        return $this->container['mean_num_incoming_transactions_3d'];
    }

    /**
     * Sets mean_num_incoming_transactions_3d
     *
     * @param float $mean_num_incoming_transactions_3d The mean number of inflow transactions for the last three days.
     *
     * @return $this
     */
    public function setMeanNumIncomingTransactions3d($mean_num_incoming_transactions_3d)
    {
        $this->container['mean_num_incoming_transactions_3d'] = $mean_num_incoming_transactions_3d;

        return $this;
    }

    /**
     * Gets mean_num_incoming_transactions_1w
     *
     * @return float
     */
    public function getMeanNumIncomingTransactions1w()
    {
        return $this->container['mean_num_incoming_transactions_1w'];
    }

    /**
     * Sets mean_num_incoming_transactions_1w
     *
     * @param float $mean_num_incoming_transactions_1w The mean number of inflow transactions for the last week.
     *
     * @return $this
     */
    public function setMeanNumIncomingTransactions1w($mean_num_incoming_transactions_1w)
    {
        $this->container['mean_num_incoming_transactions_1w'] = $mean_num_incoming_transactions_1w;

        return $this;
    }

    /**
     * Gets mean_num_incoming_transactions_1m
     *
     * @return float
     */
    public function getMeanNumIncomingTransactions1m()
    {
        return $this->container['mean_num_incoming_transactions_1m'];
    }

    /**
     * Sets mean_num_incoming_transactions_1m
     *
     * @param float $mean_num_incoming_transactions_1m The mean number of inflow transactions for the last month.
     *
     * @return $this
     */
    public function setMeanNumIncomingTransactions1m($mean_num_incoming_transactions_1m)
    {
        $this->container['mean_num_incoming_transactions_1m'] = $mean_num_incoming_transactions_1m;

        return $this;
    }

    /**
     * Gets mean_num_incoming_transactions_3m
     *
     * @return float
     */
    public function getMeanNumIncomingTransactions3m()
    {
        return $this->container['mean_num_incoming_transactions_3m'];
    }

    /**
     * Sets mean_num_incoming_transactions_3m
     *
     * @param float $mean_num_incoming_transactions_3m The mean number of inflow transactions for the last three months.
     *
     * @return $this
     */
    public function setMeanNumIncomingTransactions3m($mean_num_incoming_transactions_3m)
    {
        $this->container['mean_num_incoming_transactions_3m'] = $mean_num_incoming_transactions_3m;

        return $this;
    }

    /**
     * Gets mean_num_incoming_transactions_6m
     *
     * @return float
     */
    public function getMeanNumIncomingTransactions6m()
    {
        return $this->container['mean_num_incoming_transactions_6m'];
    }

    /**
     * Sets mean_num_incoming_transactions_6m
     *
     * @param float $mean_num_incoming_transactions_6m The mean number of inflow transactions for the last six months.
     *
     * @return $this
     */
    public function setMeanNumIncomingTransactions6m($mean_num_incoming_transactions_6m)
    {
        $this->container['mean_num_incoming_transactions_6m'] = $mean_num_incoming_transactions_6m;

        return $this;
    }

    /**
     * Gets mean_num_incoming_transactions_12m
     *
     * @return float
     */
    public function getMeanNumIncomingTransactions12m()
    {
        return $this->container['mean_num_incoming_transactions_12m'];
    }

    /**
     * Sets mean_num_incoming_transactions_12m
     *
     * @param float $mean_num_incoming_transactions_12m The mean number of inflow transactions for the last twelve months.
     *
     * @return $this
     */
    public function setMeanNumIncomingTransactions12m($mean_num_incoming_transactions_12m)
    {
        $this->container['mean_num_incoming_transactions_12m'] = $mean_num_incoming_transactions_12m;

        return $this;
    }

    /**
     * Gets sum_incoming_amount_3d
     *
     * @return float
     */
    public function getSumIncomingAmount3d()
    {
        return $this->container['sum_incoming_amount_3d'];
    }

    /**
     * Sets sum_incoming_amount_3d
     *
     * @param float $sum_incoming_amount_3d The total sum of all inflow transactions for the last three days.
     *
     * @return $this
     */
    public function setSumIncomingAmount3d($sum_incoming_amount_3d)
    {
        $this->container['sum_incoming_amount_3d'] = $sum_incoming_amount_3d;

        return $this;
    }

    /**
     * Gets sum_incoming_amount_1w
     *
     * @return float
     */
    public function getSumIncomingAmount1w()
    {
        return $this->container['sum_incoming_amount_1w'];
    }

    /**
     * Sets sum_incoming_amount_1w
     *
     * @param float $sum_incoming_amount_1w The total sum of all inflow transactions for the last week.
     *
     * @return $this
     */
    public function setSumIncomingAmount1w($sum_incoming_amount_1w)
    {
        $this->container['sum_incoming_amount_1w'] = $sum_incoming_amount_1w;

        return $this;
    }

    /**
     * Gets sum_incoming_amount_1m
     *
     * @return float
     */
    public function getSumIncomingAmount1m()
    {
        return $this->container['sum_incoming_amount_1m'];
    }

    /**
     * Sets sum_incoming_amount_1m
     *
     * @param float $sum_incoming_amount_1m The total sum of all inflow transactions for the last month.
     *
     * @return $this
     */
    public function setSumIncomingAmount1m($sum_incoming_amount_1m)
    {
        $this->container['sum_incoming_amount_1m'] = $sum_incoming_amount_1m;

        return $this;
    }

    /**
     * Gets sum_incoming_amount_3m
     *
     * @return float
     */
    public function getSumIncomingAmount3m()
    {
        return $this->container['sum_incoming_amount_3m'];
    }

    /**
     * Sets sum_incoming_amount_3m
     *
     * @param float $sum_incoming_amount_3m The total sum of all inflow transactions for the last three months.
     *
     * @return $this
     */
    public function setSumIncomingAmount3m($sum_incoming_amount_3m)
    {
        $this->container['sum_incoming_amount_3m'] = $sum_incoming_amount_3m;

        return $this;
    }

    /**
     * Gets sum_incoming_amount_6m
     *
     * @return float
     */
    public function getSumIncomingAmount6m()
    {
        return $this->container['sum_incoming_amount_6m'];
    }

    /**
     * Sets sum_incoming_amount_6m
     *
     * @param float $sum_incoming_amount_6m The total sum of all inflow transactions for the last six months.
     *
     * @return $this
     */
    public function setSumIncomingAmount6m($sum_incoming_amount_6m)
    {
        $this->container['sum_incoming_amount_6m'] = $sum_incoming_amount_6m;

        return $this;
    }

    /**
     * Gets sum_incoming_amount_12m
     *
     * @return float
     */
    public function getSumIncomingAmount12m()
    {
        return $this->container['sum_incoming_amount_12m'];
    }

    /**
     * Sets sum_incoming_amount_12m
     *
     * @param float $sum_incoming_amount_12m The total sum of all inflow transactions for the last twelve months.
     *
     * @return $this
     */
    public function setSumIncomingAmount12m($sum_incoming_amount_12m)
    {
        $this->container['sum_incoming_amount_12m'] = $sum_incoming_amount_12m;

        return $this;
    }

    /**
     * Gets max_incoming_amount_3d
     *
     * @return float
     */
    public function getMaxIncomingAmount3d()
    {
        return $this->container['max_incoming_amount_3d'];
    }

    /**
     * Sets max_incoming_amount_3d
     *
     * @param float $max_incoming_amount_3d The highest value inflow transaction in the last three days.
     *
     * @return $this
     */
    public function setMaxIncomingAmount3d($max_incoming_amount_3d)
    {
        $this->container['max_incoming_amount_3d'] = $max_incoming_amount_3d;

        return $this;
    }

    /**
     * Gets max_incoming_amount_1w
     *
     * @return float
     */
    public function getMaxIncomingAmount1w()
    {
        return $this->container['max_incoming_amount_1w'];
    }

    /**
     * Sets max_incoming_amount_1w
     *
     * @param float $max_incoming_amount_1w The highest value inflow transaction in the last week.
     *
     * @return $this
     */
    public function setMaxIncomingAmount1w($max_incoming_amount_1w)
    {
        $this->container['max_incoming_amount_1w'] = $max_incoming_amount_1w;

        return $this;
    }

    /**
     * Gets max_incoming_amount_1m
     *
     * @return float
     */
    public function getMaxIncomingAmount1m()
    {
        return $this->container['max_incoming_amount_1m'];
    }

    /**
     * Sets max_incoming_amount_1m
     *
     * @param float $max_incoming_amount_1m The highest value inflow transaction in the last month.
     *
     * @return $this
     */
    public function setMaxIncomingAmount1m($max_incoming_amount_1m)
    {
        $this->container['max_incoming_amount_1m'] = $max_incoming_amount_1m;

        return $this;
    }

    /**
     * Gets max_incoming_amount_3m
     *
     * @return float
     */
    public function getMaxIncomingAmount3m()
    {
        return $this->container['max_incoming_amount_3m'];
    }

    /**
     * Sets max_incoming_amount_3m
     *
     * @param float $max_incoming_amount_3m The highest value inflow transaction in the last three months.
     *
     * @return $this
     */
    public function setMaxIncomingAmount3m($max_incoming_amount_3m)
    {
        $this->container['max_incoming_amount_3m'] = $max_incoming_amount_3m;

        return $this;
    }

    /**
     * Gets max_incoming_amount_6m
     *
     * @return float
     */
    public function getMaxIncomingAmount6m()
    {
        return $this->container['max_incoming_amount_6m'];
    }

    /**
     * Sets max_incoming_amount_6m
     *
     * @param float $max_incoming_amount_6m The highest value inflow transaction in the last six months.
     *
     * @return $this
     */
    public function setMaxIncomingAmount6m($max_incoming_amount_6m)
    {
        $this->container['max_incoming_amount_6m'] = $max_incoming_amount_6m;

        return $this;
    }

    /**
     * Gets max_incoming_amount_12m
     *
     * @return float
     */
    public function getMaxIncomingAmount12m()
    {
        return $this->container['max_incoming_amount_12m'];
    }

    /**
     * Sets max_incoming_amount_12m
     *
     * @param float $max_incoming_amount_12m The highest value inflow transaction in the last twelve months.
     *
     * @return $this
     */
    public function setMaxIncomingAmount12m($max_incoming_amount_12m)
    {
        $this->container['max_incoming_amount_12m'] = $max_incoming_amount_12m;

        return $this;
    }

    /**
     * Gets mean_incoming_amount_3d
     *
     * @return float
     */
    public function getMeanIncomingAmount3d()
    {
        return $this->container['mean_incoming_amount_3d'];
    }

    /**
     * Sets mean_incoming_amount_3d
     *
     * @param float $mean_incoming_amount_3d The mean incoming value of all transactions in the last three days.
     *
     * @return $this
     */
    public function setMeanIncomingAmount3d($mean_incoming_amount_3d)
    {
        $this->container['mean_incoming_amount_3d'] = $mean_incoming_amount_3d;

        return $this;
    }

    /**
     * Gets mean_incoming_amount_1w
     *
     * @return float
     */
    public function getMeanIncomingAmount1w()
    {
        return $this->container['mean_incoming_amount_1w'];
    }

    /**
     * Sets mean_incoming_amount_1w
     *
     * @param float $mean_incoming_amount_1w The mean incoming value of all transactions in the last week.
     *
     * @return $this
     */
    public function setMeanIncomingAmount1w($mean_incoming_amount_1w)
    {
        $this->container['mean_incoming_amount_1w'] = $mean_incoming_amount_1w;

        return $this;
    }

    /**
     * Gets mean_incoming_amount_1m
     *
     * @return float
     */
    public function getMeanIncomingAmount1m()
    {
        return $this->container['mean_incoming_amount_1m'];
    }

    /**
     * Sets mean_incoming_amount_1m
     *
     * @param float $mean_incoming_amount_1m The mean incoming value of all transactions in the last month.
     *
     * @return $this
     */
    public function setMeanIncomingAmount1m($mean_incoming_amount_1m)
    {
        $this->container['mean_incoming_amount_1m'] = $mean_incoming_amount_1m;

        return $this;
    }

    /**
     * Gets mean_incoming_amount_3m
     *
     * @return float
     */
    public function getMeanIncomingAmount3m()
    {
        return $this->container['mean_incoming_amount_3m'];
    }

    /**
     * Sets mean_incoming_amount_3m
     *
     * @param float $mean_incoming_amount_3m The mean incoming value of all transactions in the last three months.
     *
     * @return $this
     */
    public function setMeanIncomingAmount3m($mean_incoming_amount_3m)
    {
        $this->container['mean_incoming_amount_3m'] = $mean_incoming_amount_3m;

        return $this;
    }

    /**
     * Gets mean_incoming_amount_6m
     *
     * @return float
     */
    public function getMeanIncomingAmount6m()
    {
        return $this->container['mean_incoming_amount_6m'];
    }

    /**
     * Sets mean_incoming_amount_6m
     *
     * @param float $mean_incoming_amount_6m The mean incoming value of all transactions in the last six months.
     *
     * @return $this
     */
    public function setMeanIncomingAmount6m($mean_incoming_amount_6m)
    {
        $this->container['mean_incoming_amount_6m'] = $mean_incoming_amount_6m;

        return $this;
    }

    /**
     * Gets mean_incoming_amount_12m
     *
     * @return float
     */
    public function getMeanIncomingAmount12m()
    {
        return $this->container['mean_incoming_amount_12m'];
    }

    /**
     * Sets mean_incoming_amount_12m
     *
     * @param float $mean_incoming_amount_12m The mean incoming value of all transactions in the last twelve months.
     *
     * @return $this
     */
    public function setMeanIncomingAmount12m($mean_incoming_amount_12m)
    {
        $this->container['mean_incoming_amount_12m'] = $mean_incoming_amount_12m;

        return $this;
    }

    /**
     * Gets num_outgoing_transactions_3d
     *
     * @return int
     */
    public function getNumOutgoingTransactions3d()
    {
        return $this->container['num_outgoing_transactions_3d'];
    }

    /**
     * Sets num_outgoing_transactions_3d
     *
     * @param int $num_outgoing_transactions_3d To total number of outflow transactions in the last three days.
     *
     * @return $this
     */
    public function setNumOutgoingTransactions3d($num_outgoing_transactions_3d)
    {
        $this->container['num_outgoing_transactions_3d'] = $num_outgoing_transactions_3d;

        return $this;
    }

    /**
     * Gets num_outgoing_transactions_1w
     *
     * @return int
     */
    public function getNumOutgoingTransactions1w()
    {
        return $this->container['num_outgoing_transactions_1w'];
    }

    /**
     * Sets num_outgoing_transactions_1w
     *
     * @param int $num_outgoing_transactions_1w To total number of outflow transactions in the last week.
     *
     * @return $this
     */
    public function setNumOutgoingTransactions1w($num_outgoing_transactions_1w)
    {
        $this->container['num_outgoing_transactions_1w'] = $num_outgoing_transactions_1w;

        return $this;
    }

    /**
     * Gets num_outgoing_transactions_1m
     *
     * @return int
     */
    public function getNumOutgoingTransactions1m()
    {
        return $this->container['num_outgoing_transactions_1m'];
    }

    /**
     * Sets num_outgoing_transactions_1m
     *
     * @param int $num_outgoing_transactions_1m To total number of outflow transactions in the last month.
     *
     * @return $this
     */
    public function setNumOutgoingTransactions1m($num_outgoing_transactions_1m)
    {
        $this->container['num_outgoing_transactions_1m'] = $num_outgoing_transactions_1m;

        return $this;
    }

    /**
     * Gets num_outgoing_transactions_3m
     *
     * @return int
     */
    public function getNumOutgoingTransactions3m()
    {
        return $this->container['num_outgoing_transactions_3m'];
    }

    /**
     * Sets num_outgoing_transactions_3m
     *
     * @param int $num_outgoing_transactions_3m To total number of outflow transactions in the last three months.
     *
     * @return $this
     */
    public function setNumOutgoingTransactions3m($num_outgoing_transactions_3m)
    {
        $this->container['num_outgoing_transactions_3m'] = $num_outgoing_transactions_3m;

        return $this;
    }

    /**
     * Gets num_outgoing_transactions_6m
     *
     * @return int
     */
    public function getNumOutgoingTransactions6m()
    {
        return $this->container['num_outgoing_transactions_6m'];
    }

    /**
     * Sets num_outgoing_transactions_6m
     *
     * @param int $num_outgoing_transactions_6m To total number of outflow transactions in the last six months.
     *
     * @return $this
     */
    public function setNumOutgoingTransactions6m($num_outgoing_transactions_6m)
    {
        $this->container['num_outgoing_transactions_6m'] = $num_outgoing_transactions_6m;

        return $this;
    }

    /**
     * Gets num_outgoing_transactions_12m
     *
     * @return int
     */
    public function getNumOutgoingTransactions12m()
    {
        return $this->container['num_outgoing_transactions_12m'];
    }

    /**
     * Sets num_outgoing_transactions_12m
     *
     * @param int $num_outgoing_transactions_12m To total number of outflow transactions in the last twelve months.
     *
     * @return $this
     */
    public function setNumOutgoingTransactions12m($num_outgoing_transactions_12m)
    {
        $this->container['num_outgoing_transactions_12m'] = $num_outgoing_transactions_12m;

        return $this;
    }

    /**
     * Gets max_num_outgoing_transactions_3d
     *
     * @return int
     */
    public function getMaxNumOutgoingTransactions3d()
    {
        return $this->container['max_num_outgoing_transactions_3d'];
    }

    /**
     * Sets max_num_outgoing_transactions_3d
     *
     * @param int $max_num_outgoing_transactions_3d The maximum number of outflow transactions for the last three days.
     *
     * @return $this
     */
    public function setMaxNumOutgoingTransactions3d($max_num_outgoing_transactions_3d)
    {
        $this->container['max_num_outgoing_transactions_3d'] = $max_num_outgoing_transactions_3d;

        return $this;
    }

    /**
     * Gets max_num_outgoing_transactions_1w
     *
     * @return int
     */
    public function getMaxNumOutgoingTransactions1w()
    {
        return $this->container['max_num_outgoing_transactions_1w'];
    }

    /**
     * Sets max_num_outgoing_transactions_1w
     *
     * @param int $max_num_outgoing_transactions_1w The maximum number of outflow transactions for the last week.
     *
     * @return $this
     */
    public function setMaxNumOutgoingTransactions1w($max_num_outgoing_transactions_1w)
    {
        $this->container['max_num_outgoing_transactions_1w'] = $max_num_outgoing_transactions_1w;

        return $this;
    }

    /**
     * Gets max_num_outgoing_transactions_1m
     *
     * @return int
     */
    public function getMaxNumOutgoingTransactions1m()
    {
        return $this->container['max_num_outgoing_transactions_1m'];
    }

    /**
     * Sets max_num_outgoing_transactions_1m
     *
     * @param int $max_num_outgoing_transactions_1m The maximum number of outflow transactions for the last month.
     *
     * @return $this
     */
    public function setMaxNumOutgoingTransactions1m($max_num_outgoing_transactions_1m)
    {
        $this->container['max_num_outgoing_transactions_1m'] = $max_num_outgoing_transactions_1m;

        return $this;
    }

    /**
     * Gets max_num_outgoing_transactions_3m
     *
     * @return int
     */
    public function getMaxNumOutgoingTransactions3m()
    {
        return $this->container['max_num_outgoing_transactions_3m'];
    }

    /**
     * Sets max_num_outgoing_transactions_3m
     *
     * @param int $max_num_outgoing_transactions_3m The maximum number of outflow transactions for the last three months.
     *
     * @return $this
     */
    public function setMaxNumOutgoingTransactions3m($max_num_outgoing_transactions_3m)
    {
        $this->container['max_num_outgoing_transactions_3m'] = $max_num_outgoing_transactions_3m;

        return $this;
    }

    /**
     * Gets max_num_outgoing_transactions_6m
     *
     * @return int
     */
    public function getMaxNumOutgoingTransactions6m()
    {
        return $this->container['max_num_outgoing_transactions_6m'];
    }

    /**
     * Sets max_num_outgoing_transactions_6m
     *
     * @param int $max_num_outgoing_transactions_6m The maximum number of outflow transactions for the last six months.
     *
     * @return $this
     */
    public function setMaxNumOutgoingTransactions6m($max_num_outgoing_transactions_6m)
    {
        $this->container['max_num_outgoing_transactions_6m'] = $max_num_outgoing_transactions_6m;

        return $this;
    }

    /**
     * Gets max_num_outgoing_transactions_12m
     *
     * @return int
     */
    public function getMaxNumOutgoingTransactions12m()
    {
        return $this->container['max_num_outgoing_transactions_12m'];
    }

    /**
     * Sets max_num_outgoing_transactions_12m
     *
     * @param int $max_num_outgoing_transactions_12m The maximum number of outflow transactions for the last twelve months.
     *
     * @return $this
     */
    public function setMaxNumOutgoingTransactions12m($max_num_outgoing_transactions_12m)
    {
        $this->container['max_num_outgoing_transactions_12m'] = $max_num_outgoing_transactions_12m;

        return $this;
    }

    /**
     * Gets mean_num_outgoing_transactions_3d
     *
     * @return float
     */
    public function getMeanNumOutgoingTransactions3d()
    {
        return $this->container['mean_num_outgoing_transactions_3d'];
    }

    /**
     * Sets mean_num_outgoing_transactions_3d
     *
     * @param float $mean_num_outgoing_transactions_3d The mean number of outflow transactions for the last three days.
     *
     * @return $this
     */
    public function setMeanNumOutgoingTransactions3d($mean_num_outgoing_transactions_3d)
    {
        $this->container['mean_num_outgoing_transactions_3d'] = $mean_num_outgoing_transactions_3d;

        return $this;
    }

    /**
     * Gets mean_num_outgoing_transactions_1w
     *
     * @return float
     */
    public function getMeanNumOutgoingTransactions1w()
    {
        return $this->container['mean_num_outgoing_transactions_1w'];
    }

    /**
     * Sets mean_num_outgoing_transactions_1w
     *
     * @param float $mean_num_outgoing_transactions_1w The mean number of outflow transactions for the last week.
     *
     * @return $this
     */
    public function setMeanNumOutgoingTransactions1w($mean_num_outgoing_transactions_1w)
    {
        $this->container['mean_num_outgoing_transactions_1w'] = $mean_num_outgoing_transactions_1w;

        return $this;
    }

    /**
     * Gets mean_num_outgoing_transactions_1m
     *
     * @return float
     */
    public function getMeanNumOutgoingTransactions1m()
    {
        return $this->container['mean_num_outgoing_transactions_1m'];
    }

    /**
     * Sets mean_num_outgoing_transactions_1m
     *
     * @param float $mean_num_outgoing_transactions_1m The mean number of outflow transactions for the last month.
     *
     * @return $this
     */
    public function setMeanNumOutgoingTransactions1m($mean_num_outgoing_transactions_1m)
    {
        $this->container['mean_num_outgoing_transactions_1m'] = $mean_num_outgoing_transactions_1m;

        return $this;
    }

    /**
     * Gets mean_num_outgoing_transactions_3m
     *
     * @return float
     */
    public function getMeanNumOutgoingTransactions3m()
    {
        return $this->container['mean_num_outgoing_transactions_3m'];
    }

    /**
     * Sets mean_num_outgoing_transactions_3m
     *
     * @param float $mean_num_outgoing_transactions_3m The mean number of outflow transactions for the last three months.
     *
     * @return $this
     */
    public function setMeanNumOutgoingTransactions3m($mean_num_outgoing_transactions_3m)
    {
        $this->container['mean_num_outgoing_transactions_3m'] = $mean_num_outgoing_transactions_3m;

        return $this;
    }

    /**
     * Gets mean_num_outgoing_transactions_6m
     *
     * @return float
     */
    public function getMeanNumOutgoingTransactions6m()
    {
        return $this->container['mean_num_outgoing_transactions_6m'];
    }

    /**
     * Sets mean_num_outgoing_transactions_6m
     *
     * @param float $mean_num_outgoing_transactions_6m The mean number of outflow transactions for the last six months.
     *
     * @return $this
     */
    public function setMeanNumOutgoingTransactions6m($mean_num_outgoing_transactions_6m)
    {
        $this->container['mean_num_outgoing_transactions_6m'] = $mean_num_outgoing_transactions_6m;

        return $this;
    }

    /**
     * Gets mean_num_outgoing_transactions_12m
     *
     * @return float
     */
    public function getMeanNumOutgoingTransactions12m()
    {
        return $this->container['mean_num_outgoing_transactions_12m'];
    }

    /**
     * Sets mean_num_outgoing_transactions_12m
     *
     * @param float $mean_num_outgoing_transactions_12m The mean number of outflow transactions for the last twelve months.
     *
     * @return $this
     */
    public function setMeanNumOutgoingTransactions12m($mean_num_outgoing_transactions_12m)
    {
        $this->container['mean_num_outgoing_transactions_12m'] = $mean_num_outgoing_transactions_12m;

        return $this;
    }

    /**
     * Gets sum_outgoing_amount_3d
     *
     * @return float
     */
    public function getSumOutgoingAmount3d()
    {
        return $this->container['sum_outgoing_amount_3d'];
    }

    /**
     * Sets sum_outgoing_amount_3d
     *
     * @param float $sum_outgoing_amount_3d The total sum of all outflow transactions for the last three days.
     *
     * @return $this
     */
    public function setSumOutgoingAmount3d($sum_outgoing_amount_3d)
    {
        $this->container['sum_outgoing_amount_3d'] = $sum_outgoing_amount_3d;

        return $this;
    }

    /**
     * Gets sum_outgoing_amount_1w
     *
     * @return float
     */
    public function getSumOutgoingAmount1w()
    {
        return $this->container['sum_outgoing_amount_1w'];
    }

    /**
     * Sets sum_outgoing_amount_1w
     *
     * @param float $sum_outgoing_amount_1w The total sum of all outflow transactions for the last week.
     *
     * @return $this
     */
    public function setSumOutgoingAmount1w($sum_outgoing_amount_1w)
    {
        $this->container['sum_outgoing_amount_1w'] = $sum_outgoing_amount_1w;

        return $this;
    }

    /**
     * Gets sum_outgoing_amount_1m
     *
     * @return float
     */
    public function getSumOutgoingAmount1m()
    {
        return $this->container['sum_outgoing_amount_1m'];
    }

    /**
     * Sets sum_outgoing_amount_1m
     *
     * @param float $sum_outgoing_amount_1m The total sum of all outflow transactions for the last month.
     *
     * @return $this
     */
    public function setSumOutgoingAmount1m($sum_outgoing_amount_1m)
    {
        $this->container['sum_outgoing_amount_1m'] = $sum_outgoing_amount_1m;

        return $this;
    }

    /**
     * Gets sum_outgoing_amount_3m
     *
     * @return float
     */
    public function getSumOutgoingAmount3m()
    {
        return $this->container['sum_outgoing_amount_3m'];
    }

    /**
     * Sets sum_outgoing_amount_3m
     *
     * @param float $sum_outgoing_amount_3m The total sum of all outflow transactions for the last three months.
     *
     * @return $this
     */
    public function setSumOutgoingAmount3m($sum_outgoing_amount_3m)
    {
        $this->container['sum_outgoing_amount_3m'] = $sum_outgoing_amount_3m;

        return $this;
    }

    /**
     * Gets sum_outgoing_amount_6m
     *
     * @return float
     */
    public function getSumOutgoingAmount6m()
    {
        return $this->container['sum_outgoing_amount_6m'];
    }

    /**
     * Sets sum_outgoing_amount_6m
     *
     * @param float $sum_outgoing_amount_6m The total sum of all outflow transactions for the last six months.
     *
     * @return $this
     */
    public function setSumOutgoingAmount6m($sum_outgoing_amount_6m)
    {
        $this->container['sum_outgoing_amount_6m'] = $sum_outgoing_amount_6m;

        return $this;
    }

    /**
     * Gets sum_outgoing_amount_12m
     *
     * @return float
     */
    public function getSumOutgoingAmount12m()
    {
        return $this->container['sum_outgoing_amount_12m'];
    }

    /**
     * Sets sum_outgoing_amount_12m
     *
     * @param float $sum_outgoing_amount_12m The total sum of all outflow transactions for the last twelve months.
     *
     * @return $this
     */
    public function setSumOutgoingAmount12m($sum_outgoing_amount_12m)
    {
        $this->container['sum_outgoing_amount_12m'] = $sum_outgoing_amount_12m;

        return $this;
    }

    /**
     * Gets max_outgoing_amount_3d
     *
     * @return float
     */
    public function getMaxOutgoingAmount3d()
    {
        return $this->container['max_outgoing_amount_3d'];
    }

    /**
     * Sets max_outgoing_amount_3d
     *
     * @param float $max_outgoing_amount_3d The highest value outflow transaction in the last three days.
     *
     * @return $this
     */
    public function setMaxOutgoingAmount3d($max_outgoing_amount_3d)
    {
        $this->container['max_outgoing_amount_3d'] = $max_outgoing_amount_3d;

        return $this;
    }

    /**
     * Gets max_outgoing_amount_1w
     *
     * @return float
     */
    public function getMaxOutgoingAmount1w()
    {
        return $this->container['max_outgoing_amount_1w'];
    }

    /**
     * Sets max_outgoing_amount_1w
     *
     * @param float $max_outgoing_amount_1w The highest value outflow transaction in the last week.
     *
     * @return $this
     */
    public function setMaxOutgoingAmount1w($max_outgoing_amount_1w)
    {
        $this->container['max_outgoing_amount_1w'] = $max_outgoing_amount_1w;

        return $this;
    }

    /**
     * Gets max_outgoing_amount_1m
     *
     * @return float
     */
    public function getMaxOutgoingAmount1m()
    {
        return $this->container['max_outgoing_amount_1m'];
    }

    /**
     * Sets max_outgoing_amount_1m
     *
     * @param float $max_outgoing_amount_1m The highest value outflow transaction in the last month.
     *
     * @return $this
     */
    public function setMaxOutgoingAmount1m($max_outgoing_amount_1m)
    {
        $this->container['max_outgoing_amount_1m'] = $max_outgoing_amount_1m;

        return $this;
    }

    /**
     * Gets max_outgoing_amount_3m
     *
     * @return float
     */
    public function getMaxOutgoingAmount3m()
    {
        return $this->container['max_outgoing_amount_3m'];
    }

    /**
     * Sets max_outgoing_amount_3m
     *
     * @param float $max_outgoing_amount_3m The highest value outflow transaction in the last three months.
     *
     * @return $this
     */
    public function setMaxOutgoingAmount3m($max_outgoing_amount_3m)
    {
        $this->container['max_outgoing_amount_3m'] = $max_outgoing_amount_3m;

        return $this;
    }

    /**
     * Gets max_outgoing_amount_6m
     *
     * @return float
     */
    public function getMaxOutgoingAmount6m()
    {
        return $this->container['max_outgoing_amount_6m'];
    }

    /**
     * Sets max_outgoing_amount_6m
     *
     * @param float $max_outgoing_amount_6m The highest value outflow transaction in the last six months.
     *
     * @return $this
     */
    public function setMaxOutgoingAmount6m($max_outgoing_amount_6m)
    {
        $this->container['max_outgoing_amount_6m'] = $max_outgoing_amount_6m;

        return $this;
    }

    /**
     * Gets max_outgoing_amount_12m
     *
     * @return float
     */
    public function getMaxOutgoingAmount12m()
    {
        return $this->container['max_outgoing_amount_12m'];
    }

    /**
     * Sets max_outgoing_amount_12m
     *
     * @param float $max_outgoing_amount_12m The highest value outflow transaction in the last twelve months.
     *
     * @return $this
     */
    public function setMaxOutgoingAmount12m($max_outgoing_amount_12m)
    {
        $this->container['max_outgoing_amount_12m'] = $max_outgoing_amount_12m;

        return $this;
    }

    /**
     * Gets mean_outgoing_amount_3d
     *
     * @return float
     */
    public function getMeanOutgoingAmount3d()
    {
        return $this->container['mean_outgoing_amount_3d'];
    }

    /**
     * Sets mean_outgoing_amount_3d
     *
     * @param float $mean_outgoing_amount_3d The mean outgoing value of all transaction in the last three days.
     *
     * @return $this
     */
    public function setMeanOutgoingAmount3d($mean_outgoing_amount_3d)
    {
        $this->container['mean_outgoing_amount_3d'] = $mean_outgoing_amount_3d;

        return $this;
    }

    /**
     * Gets mean_outgoing_amount_1w
     *
     * @return float
     */
    public function getMeanOutgoingAmount1w()
    {
        return $this->container['mean_outgoing_amount_1w'];
    }

    /**
     * Sets mean_outgoing_amount_1w
     *
     * @param float $mean_outgoing_amount_1w The mean outgoing value of all transaction in the last week.
     *
     * @return $this
     */
    public function setMeanOutgoingAmount1w($mean_outgoing_amount_1w)
    {
        $this->container['mean_outgoing_amount_1w'] = $mean_outgoing_amount_1w;

        return $this;
    }

    /**
     * Gets mean_outgoing_amount_1m
     *
     * @return float
     */
    public function getMeanOutgoingAmount1m()
    {
        return $this->container['mean_outgoing_amount_1m'];
    }

    /**
     * Sets mean_outgoing_amount_1m
     *
     * @param float $mean_outgoing_amount_1m The mean outgoing value of all transaction in the last month.
     *
     * @return $this
     */
    public function setMeanOutgoingAmount1m($mean_outgoing_amount_1m)
    {
        $this->container['mean_outgoing_amount_1m'] = $mean_outgoing_amount_1m;

        return $this;
    }

    /**
     * Gets mean_outgoing_amount_3m
     *
     * @return float
     */
    public function getMeanOutgoingAmount3m()
    {
        return $this->container['mean_outgoing_amount_3m'];
    }

    /**
     * Sets mean_outgoing_amount_3m
     *
     * @param float $mean_outgoing_amount_3m The mean outgoing value of all transaction in the last three months.
     *
     * @return $this
     */
    public function setMeanOutgoingAmount3m($mean_outgoing_amount_3m)
    {
        $this->container['mean_outgoing_amount_3m'] = $mean_outgoing_amount_3m;

        return $this;
    }

    /**
     * Gets mean_outgoing_amount_6m
     *
     * @return float
     */
    public function getMeanOutgoingAmount6m()
    {
        return $this->container['mean_outgoing_amount_6m'];
    }

    /**
     * Sets mean_outgoing_amount_6m
     *
     * @param float $mean_outgoing_amount_6m The mean outgoing value of all transaction in the last six months.
     *
     * @return $this
     */
    public function setMeanOutgoingAmount6m($mean_outgoing_amount_6m)
    {
        $this->container['mean_outgoing_amount_6m'] = $mean_outgoing_amount_6m;

        return $this;
    }

    /**
     * Gets mean_outgoing_amount_12m
     *
     * @return float
     */
    public function getMeanOutgoingAmount12m()
    {
        return $this->container['mean_outgoing_amount_12m'];
    }

    /**
     * Sets mean_outgoing_amount_12m
     *
     * @param float $mean_outgoing_amount_12m The mean outgoing value of all transaction in the last twelve months.
     *
     * @return $this
     */
    public function setMeanOutgoingAmount12m($mean_outgoing_amount_12m)
    {
        $this->container['mean_outgoing_amount_12m'] = $mean_outgoing_amount_12m;

        return $this;
    }

    /**
     * Gets days_without_transactions_3d
     *
     * @return int
     */
    public function getDaysWithoutTransactions3d()
    {
        return $this->container['days_without_transactions_3d'];
    }

    /**
     * Sets days_without_transactions_3d
     *
     * @param int $days_without_transactions_3d The number of days that no transactions occurred within the last three days.
     *
     * @return $this
     */
    public function setDaysWithoutTransactions3d($days_without_transactions_3d)
    {
        $this->container['days_without_transactions_3d'] = $days_without_transactions_3d;

        return $this;
    }

    /**
     * Gets days_without_transactions_1w
     *
     * @return int
     */
    public function getDaysWithoutTransactions1w()
    {
        return $this->container['days_without_transactions_1w'];
    }

    /**
     * Sets days_without_transactions_1w
     *
     * @param int $days_without_transactions_1w The number of days that no transactions occurred within the last week.
     *
     * @return $this
     */
    public function setDaysWithoutTransactions1w($days_without_transactions_1w)
    {
        $this->container['days_without_transactions_1w'] = $days_without_transactions_1w;

        return $this;
    }

    /**
     * Gets days_without_transactions_1m
     *
     * @return int
     */
    public function getDaysWithoutTransactions1m()
    {
        return $this->container['days_without_transactions_1m'];
    }

    /**
     * Sets days_without_transactions_1m
     *
     * @param int $days_without_transactions_1m The number of days that no transactions occurred within the last month.
     *
     * @return $this
     */
    public function setDaysWithoutTransactions1m($days_without_transactions_1m)
    {
        $this->container['days_without_transactions_1m'] = $days_without_transactions_1m;

        return $this;
    }

    /**
     * Gets days_without_transactions_3m
     *
     * @return int
     */
    public function getDaysWithoutTransactions3m()
    {
        return $this->container['days_without_transactions_3m'];
    }

    /**
     * Sets days_without_transactions_3m
     *
     * @param int $days_without_transactions_3m The number of days that no transactions occurred within the last three months.
     *
     * @return $this
     */
    public function setDaysWithoutTransactions3m($days_without_transactions_3m)
    {
        $this->container['days_without_transactions_3m'] = $days_without_transactions_3m;

        return $this;
    }

    /**
     * Gets days_without_transactions_6m
     *
     * @return int
     */
    public function getDaysWithoutTransactions6m()
    {
        return $this->container['days_without_transactions_6m'];
    }

    /**
     * Sets days_without_transactions_6m
     *
     * @param int $days_without_transactions_6m The number of days that no transactions occurred within the last six months.
     *
     * @return $this
     */
    public function setDaysWithoutTransactions6m($days_without_transactions_6m)
    {
        $this->container['days_without_transactions_6m'] = $days_without_transactions_6m;

        return $this;
    }

    /**
     * Gets days_without_transactions_12m
     *
     * @return int
     */
    public function getDaysWithoutTransactions12m()
    {
        return $this->container['days_without_transactions_12m'];
    }

    /**
     * Sets days_without_transactions_12m
     *
     * @param int $days_without_transactions_12m The number of days that no transactions occurred within the last twelve months.
     *
     * @return $this
     */
    public function setDaysWithoutTransactions12m($days_without_transactions_12m)
    {
        $this->container['days_without_transactions_12m'] = $days_without_transactions_12m;

        return $this;
    }

    /**
     * Gets days_since_last_transaction
     *
     * @return int
     */
    public function getDaysSinceLastTransaction()
    {
        return $this->container['days_since_last_transaction'];
    }

    /**
     * Sets days_since_last_transaction
     *
     * @param int $days_since_last_transaction The number of days since the last transaction occurred.
     *
     * @return $this
     */
    public function setDaysSinceLastTransaction($days_since_last_transaction)
    {
        $this->container['days_since_last_transaction'] = $days_since_last_transaction;

        return $this;
    }

    /**
     * Gets days_since_last_incoming_transaction
     *
     * @return int
     */
    public function getDaysSinceLastIncomingTransaction()
    {
        return $this->container['days_since_last_incoming_transaction'];
    }

    /**
     * Sets days_since_last_incoming_transaction
     *
     * @param int $days_since_last_incoming_transaction The number of days since the last inflow transaction occurred.
     *
     * @return $this
     */
    public function setDaysSinceLastIncomingTransaction($days_since_last_incoming_transaction)
    {
        $this->container['days_since_last_incoming_transaction'] = $days_since_last_incoming_transaction;

        return $this;
    }

    /**
     * Gets days_since_last_outgoing_transaction
     *
     * @return int
     */
    public function getDaysSinceLastOutgoingTransaction()
    {
        return $this->container['days_since_last_outgoing_transaction'];
    }

    /**
     * Sets days_since_last_outgoing_transaction
     *
     * @param int $days_since_last_outgoing_transaction The number of days since the last outflow transaction occurred.
     *
     * @return $this
     */
    public function setDaysSinceLastOutgoingTransaction($days_since_last_outgoing_transaction)
    {
        $this->container['days_since_last_outgoing_transaction'] = $days_since_last_outgoing_transaction;

        return $this;
    }

    /**
     * Gets days_history
     *
     * @return int
     */
    public function getDaysHistory()
    {
        return $this->container['days_history'];
    }

    /**
     * Sets days_history
     *
     * @param int $days_history The number of days between when the risk insight request was made and the first transaction.
     *
     * @return $this
     */
    public function setDaysHistory($days_history)
    {
        $this->container['days_history'] = $days_history;

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
