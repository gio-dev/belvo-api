<?php
/**
 * EnumTransactionSubcategory
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
 * EnumTransactionSubcategory Class Doc Comment
 *
 * @category Class
 * @description The transaction subcategory.    &gt; **Get transaction categorization**   For clients not using our [Transaction categorization](https://developers.belvo.com/docs/banking#categorizing-transactions), we return &#x60;null&#x60; instead. To enable this feature, just [reach out](https://belvo.com/contact/?utm_source&#x3D;documentation) to us, and we&#x27;ll get right to it.   We return one of the following enum values:    - &#x60;Electricity &amp; Energy&#x60;   - &#x60;Rent&#x60;   - &#x60;Telecommunications&#x60;   - &#x60;Water&#x60;   - &#x60;Auto&#x60;   - &#x60;Credit Card&#x60;   - &#x60;Instalment&#x60;   - &#x60;Interest &amp; Charges&#x60;   - &#x60;Mortgage&#x60;   - &#x60;Pay Advance&#x60;   - &#x60;Personal&#x60;   - &#x60;Adjustments&#x60;   - &#x60;Bank Fees&#x60;   - &#x60;Chargeback&#x60;   - &#x60;Refund&#x60;   - &#x60;Blocked Balances&#x60;   - &#x60;Alimony&#x60;   - &#x60;Alcohol &amp; Tobacco&#x60;   - &#x60;Bakery &amp; Coffee&#x60;   - &#x60;Bars &amp; Nightclubs&#x60;   - &#x60;Convenience Store&#x60;   - &#x60;Delivery&#x60;   - &#x60;Groceries&#x60;   - &#x60;Restaurants&#x60;   - &#x60;Education&#x60;   - &#x60;Gyms &amp; Fitness&#x60;   - &#x60;Hair &amp; Beauty&#x60;   - &#x60;Health&#x60;   - &#x60;Home Decor &amp; Appliances&#x60;   - &#x60;Laundry &amp; Dry Cleaning&#x60;   - &#x60;Pharmacies&#x60;   - &#x60;Professional Services&#x60;   - &#x60;Veterinary Services&#x60;   - &#x60;Freelance&#x60;   - &#x60;Interest&#x60;   - &#x60;Retirement&#x60;   - &#x60;Salary&#x60;   - &#x60;Government&#x60;   - &#x60;Home Insurance&#x60;   - &#x60;Auto Insurance&#x60;   - &#x60;Health &amp; Life Insurance&#x60;   - &#x60;Savings&#x60;   - &#x60;Fixed income&#x60;   - &#x60;Equity&#x60;   - &#x60;Investment Funds&#x60;   - &#x60;Derivatives&#x60;   - &#x60;Cryptocurrencies&#x60;   - &#x60;Apps, Software and Cloud Services&#x60;   - &#x60;Events, Parks and Museums&#x60;   - &#x60;Gambling&#x60;   - &#x60;Gaming&#x60;   - &#x60;Lottery&#x60;   - &#x60;Movie &amp; Audio&#x60;   - &#x60;Books &amp; News&#x60;   - &#x60;Clothing &amp; Accessories&#x60;   - &#x60;Department Store&#x60;   - &#x60;Electronics&#x60;   - &#x60;E-commerce&#x60;   - &#x60;Gifts&#x60;   - &#x60;Office Supplies&#x60;   - &#x60;Pet Supplies&#x60;   - &#x60;Auto Tax &amp; Fees&#x60;   - &#x60;Donation&#x60;   - &#x60;Government Fees&#x60;   - &#x60;Income Tax&#x60;   - &#x60;Real Estate Tax &amp; Fees&#x60;   - &#x60;Tax Return&#x60;   - &#x60;Accommodation&#x60;   - &#x60;Auto Expenses&#x60;   - &#x60;Auto Rental&#x60;   - &#x60;Flights&#x60;   - &#x60;Gas&#x60;   - &#x60;Mileage Programs&#x60;   - &#x60;Parking &amp; Tolls&#x60;   - &#x60;Public Transit&#x60;   - &#x60;Taxis &amp; Rideshares&#x60;   - &#x60;Other&#x60;   - &#x60;null&#x60;
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnumTransactionSubcategory
{
    /**
     * Possible values of this enum
     */
    const ELECTRICITY__ENERGY = 'Electricity & Energy';
    const RENT = 'Rent';
    const TELECOMMUNICATIONS = 'Telecommunications';
    const WATER = 'Water';
    const AUTO = 'Auto';
    const CREDIT_CARD = 'Credit Card';
    const INSTALMENT = 'Instalment';
    const INTEREST__CHARGES = 'Interest & Charges';
    const MORTGAGE = 'Mortgage';
    const PAY_ADVANCE = 'Pay Advance';
    const PERSONAL = 'Personal';
    const ADJUSTMENTS = 'Adjustments';
    const BANK_FEES = 'Bank Fees';
    const CHARGEBACK = 'Chargeback';
    const REFUND = 'Refund';
    const BLOCKED_BALANCES = 'Blocked Balances';
    const ALIMONY = 'Alimony';
    const ALCOHOL__TOBACCO = 'Alcohol & Tobacco';
    const BAKERY__COFFEE = 'Bakery & Coffee';
    const BARS__NIGHTCLUBS = 'Bars & Nightclubs';
    const CONVENIENCE_STORE = 'Convenience Store';
    const DELIVERY = 'Delivery';
    const GROCERIES = 'Groceries';
    const RESTAURANTS = 'Restaurants';
    const EDUCATION = 'Education';
    const GYMS__FITNESS = 'Gyms & Fitness';
    const HAIR__BEAUTY = 'Hair & Beauty';
    const HEALTH = 'Health';
    const HOME_DECOR__APPLIANCES = 'Home Decor & Appliances';
    const LAUNDRY__DRY_CLEANING = 'Laundry & Dry Cleaning';
    const PHARMACIES = 'Pharmacies';
    const PROFESSIONAL_SERVICES = 'Professional Services';
    const VETERINARY_SERVICES = 'Veterinary Services';
    const FREELANCE = 'Freelance';
    const INTEREST = 'Interest';
    const RETIREMENT = 'Retirement';
    const SALARY = 'Salary';
    const GOVERNMENT = 'Government';
    const HOME_INSURANCE = 'Home Insurance';
    const AUTO_INSURANCE = 'Auto Insurance';
    const HEALTH__LIFE_INSURANCE = 'Health & Life Insurance';
    const SAVINGS = 'Savings';
    const FIXED_INCOME = 'Fixed income';
    const EQUITY = 'Equity';
    const INVESTMENT_FUNDS = 'Investment Funds';
    const DERIVATIVES = 'Derivatives';
    const CRYPTOCURRENCIES = 'Cryptocurrencies';
    const APPS_SOFTWARE_AND_CLOUD_SERVICES = 'Apps, Software and Cloud Services';
    const EVENTS_PARKS_AND_MUSEUMS = 'Events, Parks and Museums';
    const GAMBLING = 'Gambling';
    const GAMING = 'Gaming';
    const LOTTERY = 'Lottery';
    const MOVIE__AUDIO = 'Movie & Audio';
    const BOOKS__NEWS = 'Books & News';
    const CLOTHING__ACCESSORIES = 'Clothing & Accessories';
    const DEPARTMENT_STORE = 'Department Store';
    const ELECTRONICS = 'Electronics';
    const E_COMMERCE = 'E-commerce';
    const GIFTS = 'Gifts';
    const OFFICE_SUPPLIES = 'Office Supplies';
    const PET_SUPPLIES = 'Pet Supplies';
    const AUTO_TAX__FEES = 'Auto Tax & Fees';
    const DONATION = 'Donation';
    const GOVERNMENT_FEES = 'Government Fees';
    const INCOME_TAX = 'Income Tax';
    const REAL_ESTATE_TAX__FEES = 'Real Estate Tax & Fees';
    const TAX_RETURN = 'Tax Return';
    const ACCOMMODATION = 'Accommodation';
    const AUTO_EXPENSES = 'Auto Expenses';
    const AUTO_RENTAL = 'Auto Rental';
    const FLIGHTS = 'Flights';
    const GAS = 'Gas';
    const MILEAGE_PROGRAMS = 'Mileage Programs';
    const PARKING__TOLLS = 'Parking & Tolls';
    const PUBLIC_TRANSIT = 'Public Transit';
    const TAXIS__RIDESHARES = 'Taxis & Rideshares';
    const OTHER = 'Other';
    const NULL = 'null';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ELECTRICITY__ENERGY
            self::RENT
            self::TELECOMMUNICATIONS
            self::WATER
            self::AUTO
            self::CREDIT_CARD
            self::INSTALMENT
            self::INTEREST__CHARGES
            self::MORTGAGE
            self::PAY_ADVANCE
            self::PERSONAL
            self::ADJUSTMENTS
            self::BANK_FEES
            self::CHARGEBACK
            self::REFUND
            self::BLOCKED_BALANCES
            self::ALIMONY
            self::ALCOHOL__TOBACCO
            self::BAKERY__COFFEE
            self::BARS__NIGHTCLUBS
            self::CONVENIENCE_STORE
            self::DELIVERY
            self::GROCERIES
            self::RESTAURANTS
            self::EDUCATION
            self::GYMS__FITNESS
            self::HAIR__BEAUTY
            self::HEALTH
            self::HOME_DECOR__APPLIANCES
            self::LAUNDRY__DRY_CLEANING
            self::PHARMACIES
            self::PROFESSIONAL_SERVICES
            self::VETERINARY_SERVICES
            self::FREELANCE
            self::INTEREST
            self::RETIREMENT
            self::SALARY
            self::GOVERNMENT
            self::HOME_INSURANCE
            self::AUTO_INSURANCE
            self::HEALTH__LIFE_INSURANCE
            self::SAVINGS
            self::FIXED_INCOME
            self::EQUITY
            self::INVESTMENT_FUNDS
            self::DERIVATIVES
            self::CRYPTOCURRENCIES
            self::APPS_SOFTWARE_AND_CLOUD_SERVICES
            self::EVENTS_PARKS_AND_MUSEUMS
            self::GAMBLING
            self::GAMING
            self::LOTTERY
            self::MOVIE__AUDIO
            self::BOOKS__NEWS
            self::CLOTHING__ACCESSORIES
            self::DEPARTMENT_STORE
            self::ELECTRONICS
            self::E_COMMERCE
            self::GIFTS
            self::OFFICE_SUPPLIES
            self::PET_SUPPLIES
            self::AUTO_TAX__FEES
            self::DONATION
            self::GOVERNMENT_FEES
            self::INCOME_TAX
            self::REAL_ESTATE_TAX__FEES
            self::TAX_RETURN
            self::ACCOMMODATION
            self::AUTO_EXPENSES
            self::AUTO_RENTAL
            self::FLIGHTS
            self::GAS
            self::MILEAGE_PROGRAMS
            self::PARKING__TOLLS
            self::PUBLIC_TRANSIT
            self::TAXIS__RIDESHARES
            self::OTHER
            self::NULL
        ];
    }
}
