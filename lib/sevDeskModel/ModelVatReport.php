<?php
/**
 * ModelVatReport
 *
 * PHP version 5
 *
 * @category Class
 * @package  ispserverfarm\sevdesk
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sevDesk
 *
 * # Getting started  The sevDesk API v1 uses a token authentication.    You need to click on the authorization button (lock symbol) and enter your api-key there.    The token can be found on [https://my.sevdesk.de](https://my.sevdesk.de).    settings-->user-->specific user    # General information    The sevDesk api uses **models** to represent the different categories like **contacts** and **invoices**.    Every time you request such a model from the api, it will return the whole model schema including the unique **model id** and all the other objects and parameters that are included in the model.    Have a look at it in the developer console of your desired browser, especially if you are looking for specific parameters like the model id.    # URL    The basic URL contains four elements. **BaseURL** + **Controller** + **Version** + **Model**: [https://my.sevdesk.de/api/v1/Contact/](https://my.sevdesk.de/api/v1/Contact/)    # Basic Operations    Access a list of models: [https://my.sevdesk.de/api/v1/{Model}/](https://my.sevdesk.de/api/v1/{Model}/)    Access a specific model: [https://my.sevdesk.de/api/v1/{Model}/{id}](https://my.sevdesk.de/api/v1/{Model}/{id})    The **id** of a specific model can usually be found in the **developer console** of your browser or when opening a specific model, in the **url**.    Call a model function: [https://my.sevdesk.de/api/v1/{Model}/{id}/{Function}](https://my.sevdesk.de/api/v1/{Model}/{id}/{Function})    Each operation can be used with different HTTP methods:  * GET - read data  * POST - create data  * PUT - update existing data  * DELETE - delete data    # Useful Parameters    For each request, there are some specific parameters.    **GET Query Parameters**  * **limit** - limits the number of entries returned  * **offset** - set the index where the returned entries should start  * **embed** - embed can be used to get some additional information about a model. For example you can get the addresses of a contact with **embed=addresses**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses`    * If there is a need to get more information about the country in the addresses, embed can be extended by **addresses.country**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses,addresses.country`    * Some models also contain other models. By default these models are only filled with an id and objectName. If you want to get more information about the nested model you can use embed too.    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=parent`    * Every model also has specified 'query parameters'. These can be used to filter the results. E.g. all Contacts with a 'Company' in their name    `[GET]https://my.sevdesk.de/api/v1/Contact/?name=Company`    * **countAll** If countAll is set to 1 the total number of entries will be returned additionally  * **orderBy** Is an array that can be filled with objects containing the the properties field and arrangement    `json: orderBy = [{field:'parent' ,arrangement:'desc'},{field:'name' ,arrangement:'asc'}];`    `url: ?orderBy[0][field]=parent&orderBy[0][arrangement]=desc&orderBy[1][field]=name&orderBy[1][arrangement]=asc`
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ispserverfarm\sevdesk\sevDeskModel;

use \ArrayAccess;

/**
 * ModelVatReport Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelVatReport implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_VatReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_sev_client' => 'object',
        '_country' => '\ispserverfarm\sevdesk\sevDeskModel\ModelStaticCountry',
        '_report_date' => '\DateTime',
        '_reporting_year' => 'string',
        '_reporting_period' => 'string',
        '_reporting_period_code' => 'string',
        '_reporting_values' => 'string',
        '_test_case' => 'bool',
        '_actual_taxation' => 'bool',
        '_corrected' => 'bool',
        '_result_finance_authority' => 'string',
        '_finance_authority_ticket_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_sev_client' => null,
        '_country' => null,
        '_report_date' => 'date-time',
        '_reporting_year' => null,
        '_reporting_period' => null,
        '_reporting_period_code' => null,
        '_reporting_values' => null,
        '_test_case' => null,
        '_actual_taxation' => null,
        '_corrected' => null,
        '_result_finance_authority' => null,
        '_finance_authority_ticket_number' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        '_create' => '_create',
        '_update' => '_update',
        '_sev_client' => '_sevClient',
        '_country' => '_country',
        '_report_date' => '_reportDate',
        '_reporting_year' => '_reportingYear',
        '_reporting_period' => '_reportingPeriod',
        '_reporting_period_code' => '_reportingPeriodCode',
        '_reporting_values' => '_reportingValues',
        '_test_case' => '_testCase',
        '_actual_taxation' => '_actualTaxation',
        '_corrected' => '_corrected',
        '_result_finance_authority' => '_resultFinanceAuthority',
        '_finance_authority_ticket_number' => '_financeAuthorityTicketNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_sev_client' => 'setSevClient',
        '_country' => 'setCountry',
        '_report_date' => 'setReportDate',
        '_reporting_year' => 'setReportingYear',
        '_reporting_period' => 'setReportingPeriod',
        '_reporting_period_code' => 'setReportingPeriodCode',
        '_reporting_values' => 'setReportingValues',
        '_test_case' => 'setTestCase',
        '_actual_taxation' => 'setActualTaxation',
        '_corrected' => 'setCorrected',
        '_result_finance_authority' => 'setResultFinanceAuthority',
        '_finance_authority_ticket_number' => 'setFinanceAuthorityTicketNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_sev_client' => 'getSevClient',
        '_country' => 'getCountry',
        '_report_date' => 'getReportDate',
        '_reporting_year' => 'getReportingYear',
        '_reporting_period' => 'getReportingPeriod',
        '_reporting_period_code' => 'getReportingPeriodCode',
        '_reporting_values' => 'getReportingValues',
        '_test_case' => 'getTestCase',
        '_actual_taxation' => 'getActualTaxation',
        '_corrected' => 'getCorrected',
        '_result_finance_authority' => 'getResultFinanceAuthority',
        '_finance_authority_ticket_number' => 'getFinanceAuthorityTicketNumber'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['_create'] = isset($data['_create']) ? $data['_create'] : null;
        $this->container['_update'] = isset($data['_update']) ? $data['_update'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_country'] = isset($data['_country']) ? $data['_country'] : null;
        $this->container['_report_date'] = isset($data['_report_date']) ? $data['_report_date'] : null;
        $this->container['_reporting_year'] = isset($data['_reporting_year']) ? $data['_reporting_year'] : null;
        $this->container['_reporting_period'] = isset($data['_reporting_period']) ? $data['_reporting_period'] : null;
        $this->container['_reporting_period_code'] = isset($data['_reporting_period_code']) ? $data['_reporting_period_code'] : null;
        $this->container['_reporting_values'] = isset($data['_reporting_values']) ? $data['_reporting_values'] : null;
        $this->container['_test_case'] = isset($data['_test_case']) ? $data['_test_case'] : null;
        $this->container['_actual_taxation'] = isset($data['_actual_taxation']) ? $data['_actual_taxation'] : null;
        $this->container['_corrected'] = isset($data['_corrected']) ? $data['_corrected'] : null;
        $this->container['_result_finance_authority'] = isset($data['_result_finance_authority']) ? $data['_result_finance_authority'] : null;
        $this->container['_finance_authority_ticket_number'] = isset($data['_finance_authority_ticket_number']) ? $data['_finance_authority_ticket_number'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets _create
     * @return \DateTime
     */
    public function getCreate()
    {
        return $this->container['_create'];
    }

    /**
     * Sets _create
     * @param \DateTime $_create date the vat report was created
     * @return $this
     */
    public function setCreate($_create)
    {
        $this->container['_create'] = $_create;

        return $this;
    }

    /**
     * Gets _update
     * @return \DateTime
     */
    public function getUpdate()
    {
        return $this->container['_update'];
    }

    /**
     * Sets _update
     * @param \DateTime $_update date the vat report was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

        return $this;
    }

    /**
     * Gets _sev_client
     * @return object
     */
    public function getSevClient()
    {
        return $this->container['_sev_client'];
    }

    /**
     * Sets _sev_client
     * @param object $_sev_client sevClient is the unique id every customer has and is used in nearly all operations
     * @return $this
     */
    public function setSevClient($_sev_client)
    {
        $this->container['_sev_client'] = $_sev_client;

        return $this;
    }

    /**
     * Gets _country
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelStaticCountry
     */
    public function getCountry()
    {
        return $this->container['_country'];
    }

    /**
     * Sets _country
     * @param \ispserverfarm\sevdesk\sevDeskModel\ModelStaticCountry $_country StaticCountry of the vat report
     * @return $this
     */
    public function setCountry($_country)
    {
        $this->container['_country'] = $_country;

        return $this;
    }

    /**
     * Gets _report_date
     * @return \DateTime
     */
    public function getReportDate()
    {
        return $this->container['_report_date'];
    }

    /**
     * Sets _report_date
     * @param \DateTime $_report_date date of the vat report
     * @return $this
     */
    public function setReportDate($_report_date)
    {
        $this->container['_report_date'] = $_report_date;

        return $this;
    }

    /**
     * Gets _reporting_year
     * @return string
     */
    public function getReportingYear()
    {
        return $this->container['_reporting_year'];
    }

    /**
     * Sets _reporting_year
     * @param string $_reporting_year year which is reported
     * @return $this
     */
    public function setReportingYear($_reporting_year)
    {
        $this->container['_reporting_year'] = $_reporting_year;

        return $this;
    }

    /**
     * Gets _reporting_period
     * @return string
     */
    public function getReportingPeriod()
    {
        return $this->container['_reporting_period'];
    }

    /**
     * Sets _reporting_period
     * @param string $_reporting_period period which is reported
     * @return $this
     */
    public function setReportingPeriod($_reporting_period)
    {
        $this->container['_reporting_period'] = $_reporting_period;

        return $this;
    }

    /**
     * Gets _reporting_period_code
     * @return string
     */
    public function getReportingPeriodCode()
    {
        return $this->container['_reporting_period_code'];
    }

    /**
     * Sets _reporting_period_code
     * @param string $_reporting_period_code 
     * @return $this
     */
    public function setReportingPeriodCode($_reporting_period_code)
    {
        $this->container['_reporting_period_code'] = $_reporting_period_code;

        return $this;
    }

    /**
     * Gets _reporting_values
     * @return string
     */
    public function getReportingValues()
    {
        return $this->container['_reporting_values'];
    }

    /**
     * Sets _reporting_values
     * @param string $_reporting_values 
     * @return $this
     */
    public function setReportingValues($_reporting_values)
    {
        $this->container['_reporting_values'] = $_reporting_values;

        return $this;
    }

    /**
     * Gets _test_case
     * @return bool
     */
    public function getTestCase()
    {
        return $this->container['_test_case'];
    }

    /**
     * Sets _test_case
     * @param bool $_test_case 
     * @return $this
     */
    public function setTestCase($_test_case)
    {
        $this->container['_test_case'] = $_test_case;

        return $this;
    }

    /**
     * Gets _actual_taxation
     * @return bool
     */
    public function getActualTaxation()
    {
        return $this->container['_actual_taxation'];
    }

    /**
     * Sets _actual_taxation
     * @param bool $_actual_taxation define if you want to report the main income method or the profit and loss
     * @return $this
     */
    public function setActualTaxation($_actual_taxation)
    {
        $this->container['_actual_taxation'] = $_actual_taxation;

        return $this;
    }

    /**
     * Gets _corrected
     * @return bool
     */
    public function getCorrected()
    {
        return $this->container['_corrected'];
    }

    /**
     * Sets _corrected
     * @param bool $_corrected 
     * @return $this
     */
    public function setCorrected($_corrected)
    {
        $this->container['_corrected'] = $_corrected;

        return $this;
    }

    /**
     * Gets _result_finance_authority
     * @return string
     */
    public function getResultFinanceAuthority()
    {
        return $this->container['_result_finance_authority'];
    }

    /**
     * Sets _result_finance_authority
     * @param string $_result_finance_authority 
     * @return $this
     */
    public function setResultFinanceAuthority($_result_finance_authority)
    {
        $this->container['_result_finance_authority'] = $_result_finance_authority;

        return $this;
    }

    /**
     * Gets _finance_authority_ticket_number
     * @return string
     */
    public function getFinanceAuthorityTicketNumber()
    {
        return $this->container['_finance_authority_ticket_number'];
    }

    /**
     * Sets _finance_authority_ticket_number
     * @param string $_finance_authority_ticket_number 
     * @return $this
     */
    public function setFinanceAuthorityTicketNumber($_finance_authority_ticket_number)
    {
        $this->container['_finance_authority_ticket_number'] = $_finance_authority_ticket_number;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ispserverfarm\sevdesk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ispserverfarm\sevdesk\ObjectSerializer::sanitizeForSerialization($this));
    }
}

