<?php
/**
 * Options
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  FormsmedjanKlarnaCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klarna Checkout API V3
 *
 * API spec
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FormsmedjanKlarnaCheckout\Model;

use \ArrayAccess;
use \FormsmedjanKlarnaCheckout\ObjectSerializer;

/**
 * Options Class Doc Comment
 *
 * @category Class
 * @package  FormsmedjanKlarnaCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Options implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'require_validate_callback_success' => 'bool',
        'acquiring_channel' => 'string',
        'vat_removed' => 'bool',
        'allow_separate_shipping_address' => 'bool',
        'color_button' => 'string',
        'color_button_text' => 'string',
        'color_checkbox' => 'string',
        'color_checkbox_checkmark' => 'string',
        'color_header' => 'string',
        'color_link' => 'string',
        'date_of_birth_mandatory' => 'bool',
        'shipping_details' => 'string',
        'title_mandatory' => 'bool',
        'additional_checkbox' => '\FormsmedjanKlarnaCheckout\Model\Checkbox',
        'national_identification_number_mandatory' => 'bool',
        'additional_merchant_terms' => 'string',
        'phone_mandatory' => 'bool',
        'radius_border' => 'string',
        'allowed_customer_types' => 'string[]',
        'show_subtotal_detail' => 'bool',
        'additional_checkboxes' => '\FormsmedjanKlarnaCheckout\Model\CheckboxV2[]',
        'verify_national_identification_number' => 'bool',
        'show_vat_registration_number_field' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'require_validate_callback_success' => null,
        'acquiring_channel' => null,
        'vat_removed' => null,
        'allow_separate_shipping_address' => null,
        'color_button' => null,
        'color_button_text' => null,
        'color_checkbox' => null,
        'color_checkbox_checkmark' => null,
        'color_header' => null,
        'color_link' => null,
        'date_of_birth_mandatory' => null,
        'shipping_details' => null,
        'title_mandatory' => null,
        'additional_checkbox' => null,
        'national_identification_number_mandatory' => null,
        'additional_merchant_terms' => null,
        'phone_mandatory' => null,
        'radius_border' => null,
        'allowed_customer_types' => null,
        'show_subtotal_detail' => null,
        'additional_checkboxes' => null,
        'verify_national_identification_number' => null,
        'show_vat_registration_number_field' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'require_validate_callback_success' => 'require_validate_callback_success',
        'acquiring_channel' => 'acquiring_channel',
        'vat_removed' => 'vat_removed',
        'allow_separate_shipping_address' => 'allow_separate_shipping_address',
        'color_button' => 'color_button',
        'color_button_text' => 'color_button_text',
        'color_checkbox' => 'color_checkbox',
        'color_checkbox_checkmark' => 'color_checkbox_checkmark',
        'color_header' => 'color_header',
        'color_link' => 'color_link',
        'date_of_birth_mandatory' => 'date_of_birth_mandatory',
        'shipping_details' => 'shipping_details',
        'title_mandatory' => 'title_mandatory',
        'additional_checkbox' => 'additional_checkbox',
        'national_identification_number_mandatory' => 'national_identification_number_mandatory',
        'additional_merchant_terms' => 'additional_merchant_terms',
        'phone_mandatory' => 'phone_mandatory',
        'radius_border' => 'radius_border',
        'allowed_customer_types' => 'allowed_customer_types',
        'show_subtotal_detail' => 'show_subtotal_detail',
        'additional_checkboxes' => 'additional_checkboxes',
        'verify_national_identification_number' => 'verify_national_identification_number',
        'show_vat_registration_number_field' => 'show_vat_registration_number_field'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'require_validate_callback_success' => 'setRequireValidateCallbackSuccess',
        'acquiring_channel' => 'setAcquiringChannel',
        'vat_removed' => 'setVatRemoved',
        'allow_separate_shipping_address' => 'setAllowSeparateShippingAddress',
        'color_button' => 'setColorButton',
        'color_button_text' => 'setColorButtonText',
        'color_checkbox' => 'setColorCheckbox',
        'color_checkbox_checkmark' => 'setColorCheckboxCheckmark',
        'color_header' => 'setColorHeader',
        'color_link' => 'setColorLink',
        'date_of_birth_mandatory' => 'setDateOfBirthMandatory',
        'shipping_details' => 'setShippingDetails',
        'title_mandatory' => 'setTitleMandatory',
        'additional_checkbox' => 'setAdditionalCheckbox',
        'national_identification_number_mandatory' => 'setNationalIdentificationNumberMandatory',
        'additional_merchant_terms' => 'setAdditionalMerchantTerms',
        'phone_mandatory' => 'setPhoneMandatory',
        'radius_border' => 'setRadiusBorder',
        'allowed_customer_types' => 'setAllowedCustomerTypes',
        'show_subtotal_detail' => 'setShowSubtotalDetail',
        'additional_checkboxes' => 'setAdditionalCheckboxes',
        'verify_national_identification_number' => 'setVerifyNationalIdentificationNumber',
        'show_vat_registration_number_field' => 'setShowVatRegistrationNumberField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'require_validate_callback_success' => 'getRequireValidateCallbackSuccess',
        'acquiring_channel' => 'getAcquiringChannel',
        'vat_removed' => 'getVatRemoved',
        'allow_separate_shipping_address' => 'getAllowSeparateShippingAddress',
        'color_button' => 'getColorButton',
        'color_button_text' => 'getColorButtonText',
        'color_checkbox' => 'getColorCheckbox',
        'color_checkbox_checkmark' => 'getColorCheckboxCheckmark',
        'color_header' => 'getColorHeader',
        'color_link' => 'getColorLink',
        'date_of_birth_mandatory' => 'getDateOfBirthMandatory',
        'shipping_details' => 'getShippingDetails',
        'title_mandatory' => 'getTitleMandatory',
        'additional_checkbox' => 'getAdditionalCheckbox',
        'national_identification_number_mandatory' => 'getNationalIdentificationNumberMandatory',
        'additional_merchant_terms' => 'getAdditionalMerchantTerms',
        'phone_mandatory' => 'getPhoneMandatory',
        'radius_border' => 'getRadiusBorder',
        'allowed_customer_types' => 'getAllowedCustomerTypes',
        'show_subtotal_detail' => 'getShowSubtotalDetail',
        'additional_checkboxes' => 'getAdditionalCheckboxes',
        'verify_national_identification_number' => 'getVerifyNationalIdentificationNumber',
        'show_vat_registration_number_field' => 'getShowVatRegistrationNumberField'
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
        return self::$openAPIModelName;
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
        $this->container['require_validate_callback_success'] = $data['require_validate_callback_success'] ?? false;
        $this->container['acquiring_channel'] = $data['acquiring_channel'] ?? null;
        $this->container['vat_removed'] = $data['vat_removed'] ?? false;
        $this->container['allow_separate_shipping_address'] = $data['allow_separate_shipping_address'] ?? false;
        $this->container['color_button'] = $data['color_button'] ?? null;
        $this->container['color_button_text'] = $data['color_button_text'] ?? null;
        $this->container['color_checkbox'] = $data['color_checkbox'] ?? null;
        $this->container['color_checkbox_checkmark'] = $data['color_checkbox_checkmark'] ?? null;
        $this->container['color_header'] = $data['color_header'] ?? null;
        $this->container['color_link'] = $data['color_link'] ?? null;
        $this->container['date_of_birth_mandatory'] = $data['date_of_birth_mandatory'] ?? false;
        $this->container['shipping_details'] = $data['shipping_details'] ?? null;
        $this->container['title_mandatory'] = $data['title_mandatory'] ?? false;
        $this->container['additional_checkbox'] = $data['additional_checkbox'] ?? null;
        $this->container['national_identification_number_mandatory'] = $data['national_identification_number_mandatory'] ?? false;
        $this->container['additional_merchant_terms'] = $data['additional_merchant_terms'] ?? null;
        $this->container['phone_mandatory'] = $data['phone_mandatory'] ?? false;
        $this->container['radius_border'] = $data['radius_border'] ?? null;
        $this->container['allowed_customer_types'] = $data['allowed_customer_types'] ?? null;
        $this->container['show_subtotal_detail'] = $data['show_subtotal_detail'] ?? false;
        $this->container['additional_checkboxes'] = $data['additional_checkboxes'] ?? null;
        $this->container['verify_national_identification_number'] = $data['verify_national_identification_number'] ?? false;
        $this->container['show_vat_registration_number_field'] = $data['show_vat_registration_number_field'] ?? false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['acquiring_channel']) && !preg_match("/ECOMMERCE|MOTO|IN_STORE|TELESALES/", $this->container['acquiring_channel'])) {
            $invalidProperties[] = "invalid value for 'acquiring_channel', must be conform to the pattern /ECOMMERCE|MOTO|IN_STORE|TELESALES/.";
        }

        if (!is_null($this->container['color_button']) && !preg_match("/^#[A-Fa-f0-9]{6}$/", $this->container['color_button'])) {
            $invalidProperties[] = "invalid value for 'color_button', must be conform to the pattern /^#[A-Fa-f0-9]{6}$/.";
        }

        if (!is_null($this->container['color_button_text']) && !preg_match("/^#[A-Fa-f0-9]{6}$/", $this->container['color_button_text'])) {
            $invalidProperties[] = "invalid value for 'color_button_text', must be conform to the pattern /^#[A-Fa-f0-9]{6}$/.";
        }

        if (!is_null($this->container['color_checkbox']) && !preg_match("/^#[A-Fa-f0-9]{6}$/", $this->container['color_checkbox'])) {
            $invalidProperties[] = "invalid value for 'color_checkbox', must be conform to the pattern /^#[A-Fa-f0-9]{6}$/.";
        }

        if (!is_null($this->container['color_checkbox_checkmark']) && !preg_match("/^#[A-Fa-f0-9]{6}$/", $this->container['color_checkbox_checkmark'])) {
            $invalidProperties[] = "invalid value for 'color_checkbox_checkmark', must be conform to the pattern /^#[A-Fa-f0-9]{6}$/.";
        }

        if (!is_null($this->container['color_header']) && !preg_match("/^#[A-Fa-f0-9]{6}$/", $this->container['color_header'])) {
            $invalidProperties[] = "invalid value for 'color_header', must be conform to the pattern /^#[A-Fa-f0-9]{6}$/.";
        }

        if (!is_null($this->container['color_link']) && !preg_match("/^#[A-Fa-f0-9]{6}$/", $this->container['color_link'])) {
            $invalidProperties[] = "invalid value for 'color_link', must be conform to the pattern /^#[A-Fa-f0-9]{6}$/.";
        }

        if (!is_null($this->container['allowed_customer_types']) && (count($this->container['allowed_customer_types']) > 2)) {
            $invalidProperties[] = "invalid value for 'allowed_customer_types', number of items must be less than or equal to 2.";
        }

        if (!is_null($this->container['allowed_customer_types']) && (count($this->container['allowed_customer_types']) < 1)) {
            $invalidProperties[] = "invalid value for 'allowed_customer_types', number of items must be greater than or equal to 1.";
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
     * Gets require_validate_callback_success
     *
     * @return bool|null
     */
    public function getRequireValidateCallbackSuccess()
    {
        return $this->container['require_validate_callback_success'];
    }

    /**
     * Sets require_validate_callback_success
     *
     * @param bool|null $require_validate_callback_success If true, validate callback must get a positive response to not stop purchase. Default: false.
     *
     * @return self
     */
    public function setRequireValidateCallbackSuccess($require_validate_callback_success)
    {
        $this->container['require_validate_callback_success'] = $require_validate_callback_success;

        return $this;
    }

    /**
     * Gets acquiring_channel
     *
     * @return string|null
     */
    public function getAcquiringChannel()
    {
        return $this->container['acquiring_channel'];
    }

    /**
     * Sets acquiring_channel
     *
     * @param string|null $acquiring_channel Acquiring channel for the order. The possible values are: <ul><li><em>MOTO for \"Mail Order Telephone Order\"</em></li><li><em>ECOMMERCE for \"E-commerce\"</em></li><li><em>IN_STORE for \"Purchase in boutique\"</em></li><li><em>TELESALES for \"Telesales/telemarketing\"</em></li><li><em>Default : ECOMMERCE</em></li></ul>
     *
     * @return self
     */
    public function setAcquiringChannel($acquiring_channel)
    {

        if (!is_null($acquiring_channel) && (!preg_match("/ECOMMERCE|MOTO|IN_STORE|TELESALES/", $acquiring_channel))) {
            throw new \InvalidArgumentException("invalid value for $acquiring_channel when calling Options., must conform to the pattern /ECOMMERCE|MOTO|IN_STORE|TELESALES/.");
        }

        $this->container['acquiring_channel'] = $acquiring_channel;

        return $this;
    }

    /**
     * Gets vat_removed
     *
     * @return bool|null
     */
    public function getVatRemoved()
    {
        return $this->container['vat_removed'];
    }

    /**
     * Sets vat_removed
     *
     * @param bool|null $vat_removed If true, VAT is not displayed in Checkout's Order Summary page.
     *
     * @return self
     */
    public function setVatRemoved($vat_removed)
    {
        $this->container['vat_removed'] = $vat_removed;

        return $this;
    }

    /**
     * Gets allow_separate_shipping_address
     *
     * @return bool|null
     */
    public function getAllowSeparateShippingAddress()
    {
        return $this->container['allow_separate_shipping_address'];
    }

    /**
     * Sets allow_separate_shipping_address
     *
     * @param bool|null $allow_separate_shipping_address If true, the consumer can enter different billing and shipping addresses. Default: false
     *
     * @return self
     */
    public function setAllowSeparateShippingAddress($allow_separate_shipping_address)
    {
        $this->container['allow_separate_shipping_address'] = $allow_separate_shipping_address;

        return $this;
    }

    /**
     * Gets color_button
     *
     * @return string|null
     */
    public function getColorButton()
    {
        return $this->container['color_button'];
    }

    /**
     * Sets color_button
     *
     * @param string|null $color_button Color for the buttons within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return self
     */
    public function setColorButton($color_button)
    {

        if (!is_null($color_button) && (!preg_match("/^#[A-Fa-f0-9]{6}$/", $color_button))) {
            throw new \InvalidArgumentException("invalid value for $color_button when calling Options., must conform to the pattern /^#[A-Fa-f0-9]{6}$/.");
        }

        $this->container['color_button'] = $color_button;

        return $this;
    }

    /**
     * Gets color_button_text
     *
     * @return string|null
     */
    public function getColorButtonText()
    {
        return $this->container['color_button_text'];
    }

    /**
     * Sets color_button_text
     *
     * @param string|null $color_button_text Color for the text inside the buttons within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return self
     */
    public function setColorButtonText($color_button_text)
    {

        if (!is_null($color_button_text) && (!preg_match("/^#[A-Fa-f0-9]{6}$/", $color_button_text))) {
            throw new \InvalidArgumentException("invalid value for $color_button_text when calling Options., must conform to the pattern /^#[A-Fa-f0-9]{6}$/.");
        }

        $this->container['color_button_text'] = $color_button_text;

        return $this;
    }

    /**
     * Gets color_checkbox
     *
     * @return string|null
     */
    public function getColorCheckbox()
    {
        return $this->container['color_checkbox'];
    }

    /**
     * Sets color_checkbox
     *
     * @param string|null $color_checkbox Color for the checkboxes within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return self
     */
    public function setColorCheckbox($color_checkbox)
    {

        if (!is_null($color_checkbox) && (!preg_match("/^#[A-Fa-f0-9]{6}$/", $color_checkbox))) {
            throw new \InvalidArgumentException("invalid value for $color_checkbox when calling Options., must conform to the pattern /^#[A-Fa-f0-9]{6}$/.");
        }

        $this->container['color_checkbox'] = $color_checkbox;

        return $this;
    }

    /**
     * Gets color_checkbox_checkmark
     *
     * @return string|null
     */
    public function getColorCheckboxCheckmark()
    {
        return $this->container['color_checkbox_checkmark'];
    }

    /**
     * Sets color_checkbox_checkmark
     *
     * @param string|null $color_checkbox_checkmark Color for the checkboxes checkmark within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return self
     */
    public function setColorCheckboxCheckmark($color_checkbox_checkmark)
    {

        if (!is_null($color_checkbox_checkmark) && (!preg_match("/^#[A-Fa-f0-9]{6}$/", $color_checkbox_checkmark))) {
            throw new \InvalidArgumentException("invalid value for $color_checkbox_checkmark when calling Options., must conform to the pattern /^#[A-Fa-f0-9]{6}$/.");
        }

        $this->container['color_checkbox_checkmark'] = $color_checkbox_checkmark;

        return $this;
    }

    /**
     * Gets color_header
     *
     * @return string|null
     */
    public function getColorHeader()
    {
        return $this->container['color_header'];
    }

    /**
     * Sets color_header
     *
     * @param string|null $color_header Color for the headers within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return self
     */
    public function setColorHeader($color_header)
    {

        if (!is_null($color_header) && (!preg_match("/^#[A-Fa-f0-9]{6}$/", $color_header))) {
            throw new \InvalidArgumentException("invalid value for $color_header when calling Options., must conform to the pattern /^#[A-Fa-f0-9]{6}$/.");
        }

        $this->container['color_header'] = $color_header;

        return $this;
    }

    /**
     * Gets color_link
     *
     * @return string|null
     */
    public function getColorLink()
    {
        return $this->container['color_link'];
    }

    /**
     * Sets color_link
     *
     * @param string|null $color_link Color for the hyperlinks within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return self
     */
    public function setColorLink($color_link)
    {

        if (!is_null($color_link) && (!preg_match("/^#[A-Fa-f0-9]{6}$/", $color_link))) {
            throw new \InvalidArgumentException("invalid value for $color_link when calling Options., must conform to the pattern /^#[A-Fa-f0-9]{6}$/.");
        }

        $this->container['color_link'] = $color_link;

        return $this;
    }

    /**
     * Gets date_of_birth_mandatory
     *
     * @return bool|null
     */
    public function getDateOfBirthMandatory()
    {
        return $this->container['date_of_birth_mandatory'];
    }

    /**
     * Sets date_of_birth_mandatory
     *
     * @param bool|null $date_of_birth_mandatory If true, the consumer cannot skip date of birth. Default: false
     *
     * @return self
     */
    public function setDateOfBirthMandatory($date_of_birth_mandatory)
    {
        $this->container['date_of_birth_mandatory'] = $date_of_birth_mandatory;

        return $this;
    }

    /**
     * Gets shipping_details
     *
     * @return string|null
     */
    public function getShippingDetails()
    {
        return $this->container['shipping_details'];
    }

    /**
     * Sets shipping_details
     *
     * @param string|null $shipping_details A message that will be presented on the confirmation page under the headline \"Delivery\" (max 255 characters).
     *
     * @return self
     */
    public function setShippingDetails($shipping_details)
    {
        $this->container['shipping_details'] = $shipping_details;

        return $this;
    }

    /**
     * Gets title_mandatory
     *
     * @return bool|null
     */
    public function getTitleMandatory()
    {
        return $this->container['title_mandatory'];
    }

    /**
     * Sets title_mandatory
     *
     * @param bool|null $title_mandatory If specified to false, title becomes optional. Only available for orders for country GB.
     *
     * @return self
     */
    public function setTitleMandatory($title_mandatory)
    {
        $this->container['title_mandatory'] = $title_mandatory;

        return $this;
    }

    /**
     * Gets additional_checkbox
     *
     * @return \FormsmedjanKlarnaCheckout\Model\Checkbox|null
     */
    public function getAdditionalCheckbox()
    {
        return $this->container['additional_checkbox'];
    }

    /**
     * Sets additional_checkbox
     *
     * @param \FormsmedjanKlarnaCheckout\Model\Checkbox|null $additional_checkbox additional_checkbox
     *
     * @return self
     */
    public function setAdditionalCheckbox($additional_checkbox)
    {
        $this->container['additional_checkbox'] = $additional_checkbox;

        return $this;
    }

    /**
     * Gets national_identification_number_mandatory
     *
     * @return bool|null
     */
    public function getNationalIdentificationNumberMandatory()
    {
        return $this->container['national_identification_number_mandatory'];
    }

    /**
     * Sets national_identification_number_mandatory
     *
     * @param bool|null $national_identification_number_mandatory If true, the user cannot skip national identification number in SE, NO, FI and DK. Default: false. In order to read the national identification number in the validation callback, please contact Klarna’s merchant support.
     *
     * @return self
     */
    public function setNationalIdentificationNumberMandatory($national_identification_number_mandatory)
    {
        $this->container['national_identification_number_mandatory'] = $national_identification_number_mandatory;

        return $this;
    }

    /**
     * Gets additional_merchant_terms
     *
     * @return string|null
     */
    public function getAdditionalMerchantTerms()
    {
        return $this->container['additional_merchant_terms'];
    }

    /**
     * Sets additional_merchant_terms
     *
     * @param string|null $additional_merchant_terms Additional merchant defined field. e.g. Extra terms and conditions to show.  Example: \"ADDITIONAL MERCHANT TERMS! \\[terms link\\](https://merchant.com/extra_terms)\"
     *
     * @return self
     */
    public function setAdditionalMerchantTerms($additional_merchant_terms)
    {
        $this->container['additional_merchant_terms'] = $additional_merchant_terms;

        return $this;
    }

    /**
     * Gets phone_mandatory
     *
     * @return bool|null
     */
    public function getPhoneMandatory()
    {
        return $this->container['phone_mandatory'];
    }

    /**
     * Sets phone_mandatory
     *
     * @param bool|null $phone_mandatory If false, the consumer can skip the phone. Only available for orders in DACH countries.
     *
     * @return self
     */
    public function setPhoneMandatory($phone_mandatory)
    {
        $this->container['phone_mandatory'] = $phone_mandatory;

        return $this;
    }

    /**
     * Gets radius_border
     *
     * @return string|null
     */
    public function getRadiusBorder()
    {
        return $this->container['radius_border'];
    }

    /**
     * Sets radius_border
     *
     * @param string|null $radius_border Radius for the border of elements within the iFrame.
     *
     * @return self
     */
    public function setRadiusBorder($radius_border)
    {
        $this->container['radius_border'] = $radius_border;

        return $this;
    }

    /**
     * Gets allowed_customer_types
     *
     * @return string[]|null
     */
    public function getAllowedCustomerTypes()
    {
        return $this->container['allowed_customer_types'];
    }

    /**
     * Sets allowed_customer_types
     *
     * @param string[]|null $allowed_customer_types A list of allowed customer types. Supported types: <b>person</b> & <b>organization</b>. Example: [\"person\",\"organization\"]
     *
     * @return self
     */
    public function setAllowedCustomerTypes($allowed_customer_types)
    {

        if (!is_null($allowed_customer_types) && (count($allowed_customer_types) > 2)) {
            throw new \InvalidArgumentException('invalid value for $allowed_customer_types when calling Options., number of items must be less than or equal to 2.');
        }
        if (!is_null($allowed_customer_types) && (count($allowed_customer_types) < 1)) {
            throw new \InvalidArgumentException('invalid length for $allowed_customer_types when calling Options., number of items must be greater than or equal to 1.');
        }
        $this->container['allowed_customer_types'] = $allowed_customer_types;

        return $this;
    }

    /**
     * Gets show_subtotal_detail
     *
     * @return bool|null
     */
    public function getShowSubtotalDetail()
    {
        return $this->container['show_subtotal_detail'];
    }

    /**
     * Sets show_subtotal_detail
     *
     * @param bool|null $show_subtotal_detail If true, the Order Detail subtotals view is expanded when the Klarna Checkout iFrame is loaded. Default: false
     *
     * @return self
     */
    public function setShowSubtotalDetail($show_subtotal_detail)
    {
        $this->container['show_subtotal_detail'] = $show_subtotal_detail;

        return $this;
    }

    /**
     * Gets additional_checkboxes
     *
     * @return \FormsmedjanKlarnaCheckout\Model\CheckboxV2[]|null
     */
    public function getAdditionalCheckboxes()
    {
        return $this->container['additional_checkboxes'];
    }

    /**
     * Sets additional_checkboxes
     *
     * @param \FormsmedjanKlarnaCheckout\Model\CheckboxV2[]|null $additional_checkboxes additional_checkboxes
     *
     * @return self
     */
    public function setAdditionalCheckboxes($additional_checkboxes)
    {
        $this->container['additional_checkboxes'] = $additional_checkboxes;

        return $this;
    }

    /**
     * Gets verify_national_identification_number
     *
     * @return bool|null
     */
    public function getVerifyNationalIdentificationNumber()
    {
        return $this->container['verify_national_identification_number'];
    }

    /**
     * Sets verify_national_identification_number
     *
     * @param bool|null $verify_national_identification_number Enable verification of National Identification Numbers in Sweden, Finland and Norway.This option also make the national identification number mandatory
     *
     * @return self
     */
    public function setVerifyNationalIdentificationNumber($verify_national_identification_number)
    {
        $this->container['verify_national_identification_number'] = $verify_national_identification_number;

        return $this;
    }

    /**
     * Gets show_vat_registration_number_field
     *
     * @return bool|null
     */
    public function getShowVatRegistrationNumberField()
    {
        return $this->container['show_vat_registration_number_field'];
    }

    /**
     * Sets show_vat_registration_number_field
     *
     * @param bool|null $show_vat_registration_number_field If true, a optional VAT registration number field will be shown in the address form. Only applies for b2b orders.
     *
     * @return self
     */
    public function setShowVatRegistrationNumberField($show_vat_registration_number_field)
    {
        $this->container['show_vat_registration_number_field'] = $show_vat_registration_number_field;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


