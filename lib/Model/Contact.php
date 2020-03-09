<?php
/**
 * Contact
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FlowAccount Open API
 *
 * FlowAccount.com โปรแกรมบัญชีออนไลน์ใช้งานง่าย สำหรับธุรกิจที่พึ่งเริ่มต้น
 *
 * The version of the OpenAPI document: 2-oas3
 * Contact: developer@flowaccount.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Contact Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Contact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_group' => 'int',
        'contact_type' => 'int',
        'contact_code' => 'string',
        'contact_name' => 'string',
        'contact_address' => 'string',
        'contact_tax_id' => 'int',
        'contact_branch_code' => 'string',
        'contact_branch' => 'string',
        'contact_person' => 'string',
        'contact_email' => 'string',
        'contact_mobile' => 'string',
        'contact_bank_id' => 'int',
        'contact_bank_account_number' => 'int',
        'contact_bank_branch' => 'string',
        'contact_bank_account_type' => 'int',
        'contact_credit_days' => 'int',
        'contact_office' => 'string',
        'contact_fax' => 'string',
        'contact_website' => 'string',
        'conatact_shipping_address' => 'string',
        'contact_note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contact_group' => 'int64',
        'contact_type' => 'int64',
        'contact_code' => null,
        'contact_name' => null,
        'contact_address' => null,
        'contact_tax_id' => 'int64',
        'contact_branch_code' => null,
        'contact_branch' => null,
        'contact_person' => null,
        'contact_email' => null,
        'contact_mobile' => null,
        'contact_bank_id' => 'int64',
        'contact_bank_account_number' => 'int64',
        'contact_bank_branch' => null,
        'contact_bank_account_type' => 'int64',
        'contact_credit_days' => 'int64',
        'contact_office' => null,
        'contact_fax' => null,
        'contact_website' => null,
        'conatact_shipping_address' => null,
        'contact_note' => null
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
        'contact_group' => 'contactGroup',
        'contact_type' => 'contactType',
        'contact_code' => 'contactCode',
        'contact_name' => 'contactName',
        'contact_address' => 'contactAddress',
        'contact_tax_id' => 'contactTaxId',
        'contact_branch_code' => 'contactBranchCode',
        'contact_branch' => 'contactBranch',
        'contact_person' => 'contactPerson',
        'contact_email' => 'contactEmail',
        'contact_mobile' => 'contactMobile',
        'contact_bank_id' => 'contactBankId',
        'contact_bank_account_number' => 'contactBankAccountNumber',
        'contact_bank_branch' => 'contactBankBranch',
        'contact_bank_account_type' => 'contactBankAccountType',
        'contact_credit_days' => 'contactCreditDays',
        'contact_office' => 'contactOffice',
        'contact_fax' => 'contactFax',
        'contact_website' => 'contactWebsite',
        'conatact_shipping_address' => 'conatactShippingAddress',
        'contact_note' => 'contactNote'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_group' => 'setContactGroup',
        'contact_type' => 'setContactType',
        'contact_code' => 'setContactCode',
        'contact_name' => 'setContactName',
        'contact_address' => 'setContactAddress',
        'contact_tax_id' => 'setContactTaxId',
        'contact_branch_code' => 'setContactBranchCode',
        'contact_branch' => 'setContactBranch',
        'contact_person' => 'setContactPerson',
        'contact_email' => 'setContactEmail',
        'contact_mobile' => 'setContactMobile',
        'contact_bank_id' => 'setContactBankId',
        'contact_bank_account_number' => 'setContactBankAccountNumber',
        'contact_bank_branch' => 'setContactBankBranch',
        'contact_bank_account_type' => 'setContactBankAccountType',
        'contact_credit_days' => 'setContactCreditDays',
        'contact_office' => 'setContactOffice',
        'contact_fax' => 'setContactFax',
        'contact_website' => 'setContactWebsite',
        'conatact_shipping_address' => 'setConatactShippingAddress',
        'contact_note' => 'setContactNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_group' => 'getContactGroup',
        'contact_type' => 'getContactType',
        'contact_code' => 'getContactCode',
        'contact_name' => 'getContactName',
        'contact_address' => 'getContactAddress',
        'contact_tax_id' => 'getContactTaxId',
        'contact_branch_code' => 'getContactBranchCode',
        'contact_branch' => 'getContactBranch',
        'contact_person' => 'getContactPerson',
        'contact_email' => 'getContactEmail',
        'contact_mobile' => 'getContactMobile',
        'contact_bank_id' => 'getContactBankId',
        'contact_bank_account_number' => 'getContactBankAccountNumber',
        'contact_bank_branch' => 'getContactBankBranch',
        'contact_bank_account_type' => 'getContactBankAccountType',
        'contact_credit_days' => 'getContactCreditDays',
        'contact_office' => 'getContactOffice',
        'contact_fax' => 'getContactFax',
        'contact_website' => 'getContactWebsite',
        'conatact_shipping_address' => 'getConatactShippingAddress',
        'contact_note' => 'getContactNote'
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
        $this->container['contact_group'] = isset($data['contact_group']) ? $data['contact_group'] : 3;
        $this->container['contact_type'] = isset($data['contact_type']) ? $data['contact_type'] : 3;
        $this->container['contact_code'] = isset($data['contact_code']) ? $data['contact_code'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['contact_address'] = isset($data['contact_address']) ? $data['contact_address'] : null;
        $this->container['contact_tax_id'] = isset($data['contact_tax_id']) ? $data['contact_tax_id'] : null;
        $this->container['contact_branch_code'] = isset($data['contact_branch_code']) ? $data['contact_branch_code'] : null;
        $this->container['contact_branch'] = isset($data['contact_branch']) ? $data['contact_branch'] : 'สำนักงานใหญ่';
        $this->container['contact_person'] = isset($data['contact_person']) ? $data['contact_person'] : null;
        $this->container['contact_email'] = isset($data['contact_email']) ? $data['contact_email'] : null;
        $this->container['contact_mobile'] = isset($data['contact_mobile']) ? $data['contact_mobile'] : null;
        $this->container['contact_bank_id'] = isset($data['contact_bank_id']) ? $data['contact_bank_id'] : 0;
        $this->container['contact_bank_account_number'] = isset($data['contact_bank_account_number']) ? $data['contact_bank_account_number'] : null;
        $this->container['contact_bank_branch'] = isset($data['contact_bank_branch']) ? $data['contact_bank_branch'] : null;
        $this->container['contact_bank_account_type'] = isset($data['contact_bank_account_type']) ? $data['contact_bank_account_type'] : 1;
        $this->container['contact_credit_days'] = isset($data['contact_credit_days']) ? $data['contact_credit_days'] : 0;
        $this->container['contact_office'] = isset($data['contact_office']) ? $data['contact_office'] : null;
        $this->container['contact_fax'] = isset($data['contact_fax']) ? $data['contact_fax'] : null;
        $this->container['contact_website'] = isset($data['contact_website']) ? $data['contact_website'] : null;
        $this->container['conatact_shipping_address'] = isset($data['conatact_shipping_address']) ? $data['conatact_shipping_address'] : null;
        $this->container['contact_note'] = isset($data['contact_note']) ? $data['contact_note'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contact_group'] === null) {
            $invalidProperties[] = "'contact_group' can't be null";
        }
        if ($this->container['contact_type'] === null) {
            $invalidProperties[] = "'contact_type' can't be null";
        }
        if ($this->container['contact_code'] === null) {
            $invalidProperties[] = "'contact_code' can't be null";
        }
        if ($this->container['contact_name'] === null) {
            $invalidProperties[] = "'contact_name' can't be null";
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
     * Gets contact_group
     *
     * @return int
     */
    public function getContactGroup()
    {
        return $this->container['contact_group'];
    }

    /**
     * Sets contact_group
     *
     * @param int $contact_group ประเภทผู้ติดต่อ: 1 = บุคคลธรรมดา / 3 = นิติบุคคล
     *
     * @return $this
     */
    public function setContactGroup($contact_group)
    {
        $this->container['contact_group'] = $contact_group;

        return $this;
    }

    /**
     * Gets contact_type
     *
     * @return int
     */
    public function getContactType()
    {
        return $this->container['contact_type'];
    }

    /**
     * Sets contact_type
     *
     * @param int $contact_type ประเภท: 3 = ลูกค้า / 5 = ผู้จำหน่าย / 7 = ผู้จำหน่ายและลูกค้า
     *
     * @return $this
     */
    public function setContactType($contact_type)
    {
        $this->container['contact_type'] = $contact_type;

        return $this;
    }

    /**
     * Gets contact_code
     *
     * @return string
     */
    public function getContactCode()
    {
        return $this->container['contact_code'];
    }

    /**
     * Sets contact_code
     *
     * @param string $contact_code รหัสผู้ติดต่อ
     *
     * @return $this
     */
    public function setContactCode($contact_code)
    {
        $this->container['contact_code'] = $contact_code;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name ชื่อผู้ธุรกิจ หรือ ชื่อลูกค้า หรือ ชื่อผู้จำหน่าย
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets contact_address
     *
     * @return string|null
     */
    public function getContactAddress()
    {
        return $this->container['contact_address'];
    }

    /**
     * Sets contact_address
     *
     * @param string|null $contact_address ที่อยู่ผู้ติดต่อ
     *
     * @return $this
     */
    public function setContactAddress($contact_address)
    {
        $this->container['contact_address'] = $contact_address;

        return $this;
    }

    /**
     * Gets contact_tax_id
     *
     * @return int|null
     */
    public function getContactTaxId()
    {
        return $this->container['contact_tax_id'];
    }

    /**
     * Sets contact_tax_id
     *
     * @param int|null $contact_tax_id เลขประจำตัวผู้เสียภาษี 13 หลัก ​<br><ex>Example: 1234567890123</ex>
     *
     * @return $this
     */
    public function setContactTaxId($contact_tax_id)
    {
        $this->container['contact_tax_id'] = $contact_tax_id;

        return $this;
    }

    /**
     * Gets contact_branch_code
     *
     * @return string|null
     */
    public function getContactBranchCode()
    {
        return $this->container['contact_branch_code'];
    }

    /**
     * Sets contact_branch_code
     *
     * @param string|null $contact_branch_code รหัสสาขา
     *
     * @return $this
     */
    public function setContactBranchCode($contact_branch_code)
    {
        $this->container['contact_branch_code'] = $contact_branch_code;

        return $this;
    }

    /**
     * Gets contact_branch
     *
     * @return string|null
     */
    public function getContactBranch()
    {
        return $this->container['contact_branch'];
    }

    /**
     * Sets contact_branch
     *
     * @param string|null $contact_branch ชื่อสาขา
     *
     * @return $this
     */
    public function setContactBranch($contact_branch)
    {
        $this->container['contact_branch'] = $contact_branch;

        return $this;
    }

    /**
     * Gets contact_person
     *
     * @return string|null
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     *
     * @param string|null $contact_person ชื่อผู้ติดต่อ
     *
     * @return $this
     */
    public function setContactPerson($contact_person)
    {
        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets contact_email
     *
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string|null $contact_email อีเมลผู้ติดต่อ <br> <ex>Example: contact@email.com</ex>
     *
     * @return $this
     */
    public function setContactEmail($contact_email)
    {
        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets contact_mobile
     *
     * @return string|null
     */
    public function getContactMobile()
    {
        return $this->container['contact_mobile'];
    }

    /**
     * Sets contact_mobile
     *
     * @param string|null $contact_mobile เบอร์มือถือผู้ติดต่อ <br> <ex>Example: 099-999-9999</ex>
     *
     * @return $this
     */
    public function setContactMobile($contact_mobile)
    {
        $this->container['contact_mobile'] = $contact_mobile;

        return $this;
    }

    /**
     * Gets contact_bank_id
     *
     * @return int|null
     */
    public function getContactBankId()
    {
        return $this->container['contact_bank_id'];
    }

    /**
     * Sets contact_bank_id
     *
     * @param int|null $contact_bank_id รหัสธนาคาร <br> 1 = ธนาคารกรุงเทพ <br> 2 = ธนาคารกสิกรไทย <br> 3 = ธนาคารกรุงไทย <br> 4 = ธนาคารทหารไทย <br> 5 = ธนาคารไทยพาณิชย์ <br> 6 = ธนาคารสแตนดาร์ดชาร์เตอร์ด <br> 7 = ธนาคารซีไอเอ็มบี ไทย <br> 8 = ธนาคารยูโอบี <br> 10 = ธนาคารกรุงศรีอยุธยา <br> 11 = ธนาคารออมสิน <br> 12 = ธนาคารธนชาต <br> 13 = ธนาคารแลนด์ แอนด์ เฮ้าส์ <br> 14 = ธนาคารเกียรตินาคิน <br> 15 = ธนาคารซิตี้แบงก์ <br> 16 = ธนาคารทิสโก้ <br> 53 = ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร <br> 54 = ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย <br> 55 = ธนาคารอาคารสงเคราะห์ <br> 56 = ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย <br> 57 = ธนาคารอิสลามแห่งประเทศไทย <br> 58 = ธนาคารแห่งประเทศจีน (ไทย) <br> 59 = ธนาคารไอซีบีซี (ไทย) <br> 60 = ธนาคารเมกะ สากลพาณิชย์ <br> 61 = ธนาคารซูมิโตโม มิตซุย แบงกิ้ง คอร์ปอเรชั่น <br> 62 = ธนาคารมิซูโฮ จำกัด (กรุงเทพฯ) <br> 63 = ธนาคารฮ่องกงและเซี่ยงไฮ้แบงกิ้งคอร์ปอเรชั่น <br> 64 = ธนาคารไทยเครดิต เพื่อรายย่อย
     *
     * @return $this
     */
    public function setContactBankId($contact_bank_id)
    {
        $this->container['contact_bank_id'] = $contact_bank_id;

        return $this;
    }

    /**
     * Gets contact_bank_account_number
     *
     * @return int|null
     */
    public function getContactBankAccountNumber()
    {
        return $this->container['contact_bank_account_number'];
    }

    /**
     * Sets contact_bank_account_number
     *
     * @param int|null $contact_bank_account_number เลขที่บัญชีธนาคาร <br> <ex>Example: 1111111111</ex>
     *
     * @return $this
     */
    public function setContactBankAccountNumber($contact_bank_account_number)
    {
        $this->container['contact_bank_account_number'] = $contact_bank_account_number;

        return $this;
    }

    /**
     * Gets contact_bank_branch
     *
     * @return string|null
     */
    public function getContactBankBranch()
    {
        return $this->container['contact_bank_branch'];
    }

    /**
     * Sets contact_bank_branch
     *
     * @param string|null $contact_bank_branch สาขาธนาคาร <br> <ex>Example: บางรัก</ex>
     *
     * @return $this
     */
    public function setContactBankBranch($contact_bank_branch)
    {
        $this->container['contact_bank_branch'] = $contact_bank_branch;

        return $this;
    }

    /**
     * Gets contact_bank_account_type
     *
     * @return int|null
     */
    public function getContactBankAccountType()
    {
        return $this->container['contact_bank_account_type'];
    }

    /**
     * Sets contact_bank_account_type
     *
     * @param int|null $contact_bank_account_type ประเภทบัญชีธนาคาร: <br> 1 = บัญชีออมทรัพย์ <br> 3 = บัญชีกระแสรายวัน
     *
     * @return $this
     */
    public function setContactBankAccountType($contact_bank_account_type)
    {
        $this->container['contact_bank_account_type'] = $contact_bank_account_type;

        return $this;
    }

    /**
     * Gets contact_credit_days
     *
     * @return int|null
     */
    public function getContactCreditDays()
    {
        return $this->container['contact_credit_days'];
    }

    /**
     * Sets contact_credit_days
     *
     * @param int|null $contact_credit_days เครดิต (วัน) <br> <ex>Example: 30</ex>
     *
     * @return $this
     */
    public function setContactCreditDays($contact_credit_days)
    {
        $this->container['contact_credit_days'] = $contact_credit_days;

        return $this;
    }

    /**
     * Gets contact_office
     *
     * @return string|null
     */
    public function getContactOffice()
    {
        return $this->container['contact_office'];
    }

    /**
     * Sets contact_office
     *
     * @param string|null $contact_office เบอร์โทรศัพท์สำนักงาน <br> <ex>Example: 02-999-9999</ex>
     *
     * @return $this
     */
    public function setContactOffice($contact_office)
    {
        $this->container['contact_office'] = $contact_office;

        return $this;
    }

    /**
     * Gets contact_fax
     *
     * @return string|null
     */
    public function getContactFax()
    {
        return $this->container['contact_fax'];
    }

    /**
     * Sets contact_fax
     *
     * @param string|null $contact_fax เบอร์โทรสาร <br> <ex>Example: 02-888-8888</ex>
     *
     * @return $this
     */
    public function setContactFax($contact_fax)
    {
        $this->container['contact_fax'] = $contact_fax;

        return $this;
    }

    /**
     * Gets contact_website
     *
     * @return string|null
     */
    public function getContactWebsite()
    {
        return $this->container['contact_website'];
    }

    /**
     * Sets contact_website
     *
     * @param string|null $contact_website เว็บไซต์ ผู้ติดต่อ <br> <ex>Eample: www.flowaccount.com</ex>
     *
     * @return $this
     */
    public function setContactWebsite($contact_website)
    {
        $this->container['contact_website'] = $contact_website;

        return $this;
    }

    /**
     * Gets conatact_shipping_address
     *
     * @return string|null
     */
    public function getConatactShippingAddress()
    {
        return $this->container['conatact_shipping_address'];
    }

    /**
     * Sets conatact_shipping_address
     *
     * @param string|null $conatact_shipping_address ที่อยู่สำหรับจัดส่ง
     *
     * @return $this
     */
    public function setConatactShippingAddress($conatact_shipping_address)
    {
        $this->container['conatact_shipping_address'] = $conatact_shipping_address;

        return $this;
    }

    /**
     * Gets contact_note
     *
     * @return string|null
     */
    public function getContactNote()
    {
        return $this->container['contact_note'];
    }

    /**
     * Sets contact_note
     *
     * @param string|null $contact_note โน๊ต
     *
     * @return $this
     */
    public function setContactNote($contact_note)
    {
        $this->container['contact_note'] = $contact_note;

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
     * @return mixed
     */
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


