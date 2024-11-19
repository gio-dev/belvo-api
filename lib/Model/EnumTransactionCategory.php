<?php
/**
 * EnumTransactionCategory
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
use \Swagger\Client\ObjectSerializer;

/**
 * EnumTransactionCategory Class Doc Comment
 *
 * @category Class
 * @description The name of the transaction category.  &gt; **Get transaction categorization** With [Transaction categorization](https://developers.belvo.com/docs/banking#categorizing-transactions), we clean and categorize transactions for you, turning raw data into actionable insights. To enable this feature, just [reach out](https://belvo.com/contact/?utm_source&#x3D;documentation) to us, and we&#x27;ll get right to it.  We return one of the following enum values:    - &#x60;Bills &amp; Utilities&#x60;   - &#x60;Credits &amp; Loans&#x60;   - &#x60;Deposits&#x60;   - &#x60;Fees &amp; Charges&#x60;   - &#x60;Food &amp; Groceries&#x60;   - &#x60;Home &amp; Life&#x60;   - &#x60;Income &amp; Payments&#x60;   - &#x60;Insurance&#x60;   - &#x60;Investments &amp; Savings&#x60;   - &#x60;Online Platforms &amp; Leisure&#x60;   - &#x60;Personal Shopping&#x60;   - &#x60;Taxes&#x60;   - &#x60;Transfers&#x60;   - &#x60;Transport &amp; Travel&#x60;   - &#x60;Unknown&#x60;*   - &#x60;Withdrawal &amp; ATM&#x60;   - &#x60;null&#x60;     \\* For clients not using our Transaction Categorization product, we return &#x60;null&#x60; instead.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnumTransactionCategory
{
    /**
     * Possible values of this enum
     */
    const BILLS__UTILITIES = 'Bills & Utilities';
    const CREDITS__LOANS = 'Credits & Loans';
    const DEPOSITS = 'Deposits';
    const FEES__CHARGES = 'Fees & Charges';
    const FOOD__GROCERIES = 'Food & Groceries';
    const HOME__LIFE = 'Home & Life';
    const INCOME__PAYMENTS = 'Income & Payments';
    const INSURANCE = 'Insurance';
    const INVESTMENTS__SAVINGS = 'Investments & Savings';
    const ONLINE_PLATFORMS__LEISURE = 'Online Platforms & Leisure';
    const PERSONAL_SHOPPING = 'Personal Shopping';
    const TAXES = 'Taxes';
    const TRANSFERS = 'Transfers';
    const TRANSPORT__TRAVEL = 'Transport & Travel';
    const UNKNOWN = 'Unknown';
    const WITHDRAWAL__ATM = 'Withdrawal & ATM';
    const NULL = 'null';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BILLS__UTILITIES
            self::CREDITS__LOANS
            self::DEPOSITS
            self::FEES__CHARGES
            self::FOOD__GROCERIES
            self::HOME__LIFE
            self::INCOME__PAYMENTS
            self::INSURANCE
            self::INVESTMENTS__SAVINGS
            self::ONLINE_PLATFORMS__LEISURE
            self::PERSONAL_SHOPPING
            self::TAXES
            self::TRANSFERS
            self::TRANSPORT__TRAVEL
            self::UNKNOWN
            self::WITHDRAWAL__ATM
            self::NULL
        ];
    }
}
