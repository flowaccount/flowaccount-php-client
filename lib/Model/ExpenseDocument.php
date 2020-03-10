<?php
/**
 * ExpenseDocument
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
 * FlowAccount.com โปรแกรมบัญชีออนไลน์ใช้งานง่าย สำหรับธุรกิจที่พึ่งเริ่มต้น   # Introduction **Servers Production**    site: https://www.flowaccount.com    api url: https://openapi.flowaccount.com/v1    **Beta test**   site: http://sandbox-new.flowaccount.com/    api url: https://openapi.flowaccount.com/test
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
 * ExpenseDocument Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExpenseDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document_serial' => 'string',
        'contact_code' => 'string',
        'contact_name' => 'string',
        'contact_address' => 'string',
        'contact_tax_id' => 'string',
        'contact_branch' => 'string',
        'contact_person' => 'string',
        'contact_email' => 'string',
        'contact_number' => 'string',
        'contact_zip_code' => 'string',
        'contact_group' => 'int',
        'published_on' => '\DateTime',
        'credit_type' => 'int',
        'credit_days' => 'int',
        'due_date' => '\DateTime',
        'sales_name' => 'string',
        'project_name' => 'string',
        'reference' => 'string',
        'is_vat_inclusive' => 'bool',
        'items' => '\OpenAPI\Client\Model\ExpenseSimpleProductItem[]',
        'sub_total' => 'float',
        'discount_percentage' => 'int',
        'discount_amount' => 'float',
        'total_after_discount' => 'float',
        'is_vat' => 'bool',
        'vat_amount' => 'float',
        'grand_total' => 'float',
        'remarks' => 'string',
        'internal_notes' => 'string',
        'show_signature_or_stamp' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'document_serial' => null,
        'contact_code' => null,
        'contact_name' => null,
        'contact_address' => null,
        'contact_tax_id' => null,
        'contact_branch' => null,
        'contact_person' => null,
        'contact_email' => null,
        'contact_number' => null,
        'contact_zip_code' => null,
        'contact_group' => null,
        'published_on' => 'date',
        'credit_type' => null,
        'credit_days' => null,
        'due_date' => 'date',
        'sales_name' => null,
        'project_name' => null,
        'reference' => null,
        'is_vat_inclusive' => null,
        'items' => null,
        'sub_total' => 'decimal',
        'discount_percentage' => null,
        'discount_amount' => 'decimal',
        'total_after_discount' => 'decimal',
        'is_vat' => null,
        'vat_amount' => 'decimal',
        'grand_total' => 'decimal',
        'remarks' => null,
        'internal_notes' => null,
        'show_signature_or_stamp' => null
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
        'document_serial' => 'documentSerial',
        'contact_code' => 'contactCode',
        'contact_name' => 'contactName',
        'contact_address' => 'contactAddress',
        'contact_tax_id' => 'contactTaxId',
        'contact_branch' => 'contactBranch',
        'contact_person' => 'contactPerson',
        'contact_email' => 'contactEmail',
        'contact_number' => 'contactNumber',
        'contact_zip_code' => 'contactZipCode',
        'contact_group' => 'contactGroup',
        'published_on' => 'publishedOn',
        'credit_type' => 'creditType',
        'credit_days' => 'creditDays',
        'due_date' => 'dueDate',
        'sales_name' => 'salesName',
        'project_name' => 'projectName',
        'reference' => 'reference',
        'is_vat_inclusive' => 'isVatInclusive',
        'items' => 'items',
        'sub_total' => 'subTotal',
        'discount_percentage' => 'discountPercentage',
        'discount_amount' => 'discountAmount',
        'total_after_discount' => 'totalAfterDiscount',
        'is_vat' => 'isVat',
        'vat_amount' => 'vatAmount',
        'grand_total' => 'grandTotal',
        'remarks' => 'remarks',
        'internal_notes' => 'internalNotes',
        'show_signature_or_stamp' => 'showSignatureOrStamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_serial' => 'setDocumentSerial',
        'contact_code' => 'setContactCode',
        'contact_name' => 'setContactName',
        'contact_address' => 'setContactAddress',
        'contact_tax_id' => 'setContactTaxId',
        'contact_branch' => 'setContactBranch',
        'contact_person' => 'setContactPerson',
        'contact_email' => 'setContactEmail',
        'contact_number' => 'setContactNumber',
        'contact_zip_code' => 'setContactZipCode',
        'contact_group' => 'setContactGroup',
        'published_on' => 'setPublishedOn',
        'credit_type' => 'setCreditType',
        'credit_days' => 'setCreditDays',
        'due_date' => 'setDueDate',
        'sales_name' => 'setSalesName',
        'project_name' => 'setProjectName',
        'reference' => 'setReference',
        'is_vat_inclusive' => 'setIsVatInclusive',
        'items' => 'setItems',
        'sub_total' => 'setSubTotal',
        'discount_percentage' => 'setDiscountPercentage',
        'discount_amount' => 'setDiscountAmount',
        'total_after_discount' => 'setTotalAfterDiscount',
        'is_vat' => 'setIsVat',
        'vat_amount' => 'setVatAmount',
        'grand_total' => 'setGrandTotal',
        'remarks' => 'setRemarks',
        'internal_notes' => 'setInternalNotes',
        'show_signature_or_stamp' => 'setShowSignatureOrStamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_serial' => 'getDocumentSerial',
        'contact_code' => 'getContactCode',
        'contact_name' => 'getContactName',
        'contact_address' => 'getContactAddress',
        'contact_tax_id' => 'getContactTaxId',
        'contact_branch' => 'getContactBranch',
        'contact_person' => 'getContactPerson',
        'contact_email' => 'getContactEmail',
        'contact_number' => 'getContactNumber',
        'contact_zip_code' => 'getContactZipCode',
        'contact_group' => 'getContactGroup',
        'published_on' => 'getPublishedOn',
        'credit_type' => 'getCreditType',
        'credit_days' => 'getCreditDays',
        'due_date' => 'getDueDate',
        'sales_name' => 'getSalesName',
        'project_name' => 'getProjectName',
        'reference' => 'getReference',
        'is_vat_inclusive' => 'getIsVatInclusive',
        'items' => 'getItems',
        'sub_total' => 'getSubTotal',
        'discount_percentage' => 'getDiscountPercentage',
        'discount_amount' => 'getDiscountAmount',
        'total_after_discount' => 'getTotalAfterDiscount',
        'is_vat' => 'getIsVat',
        'vat_amount' => 'getVatAmount',
        'grand_total' => 'getGrandTotal',
        'remarks' => 'getRemarks',
        'internal_notes' => 'getInternalNotes',
        'show_signature_or_stamp' => 'getShowSignatureOrStamp'
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
        $this->container['document_serial'] = isset($data['document_serial']) ? $data['document_serial'] : null;
        $this->container['contact_code'] = isset($data['contact_code']) ? $data['contact_code'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['contact_address'] = isset($data['contact_address']) ? $data['contact_address'] : null;
        $this->container['contact_tax_id'] = isset($data['contact_tax_id']) ? $data['contact_tax_id'] : null;
        $this->container['contact_branch'] = isset($data['contact_branch']) ? $data['contact_branch'] : null;
        $this->container['contact_person'] = isset($data['contact_person']) ? $data['contact_person'] : null;
        $this->container['contact_email'] = isset($data['contact_email']) ? $data['contact_email'] : null;
        $this->container['contact_number'] = isset($data['contact_number']) ? $data['contact_number'] : null;
        $this->container['contact_zip_code'] = isset($data['contact_zip_code']) ? $data['contact_zip_code'] : null;
        $this->container['contact_group'] = isset($data['contact_group']) ? $data['contact_group'] : 1;
        $this->container['published_on'] = isset($data['published_on']) ? $data['published_on'] : null;
        $this->container['credit_type'] = isset($data['credit_type']) ? $data['credit_type'] : 1;
        $this->container['credit_days'] = isset($data['credit_days']) ? $data['credit_days'] : 0;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['sales_name'] = isset($data['sales_name']) ? $data['sales_name'] : 'อีเมล หรือ ชื่อผู้สร้างเอกสาร';
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['is_vat_inclusive'] = isset($data['is_vat_inclusive']) ? $data['is_vat_inclusive'] : false;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['sub_total'] = isset($data['sub_total']) ? $data['sub_total'] : 0;
        $this->container['discount_percentage'] = isset($data['discount_percentage']) ? $data['discount_percentage'] : 0;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : 0;
        $this->container['total_after_discount'] = isset($data['total_after_discount']) ? $data['total_after_discount'] : null;
        $this->container['is_vat'] = isset($data['is_vat']) ? $data['is_vat'] : false;
        $this->container['vat_amount'] = isset($data['vat_amount']) ? $data['vat_amount'] : null;
        $this->container['grand_total'] = isset($data['grand_total']) ? $data['grand_total'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['internal_notes'] = isset($data['internal_notes']) ? $data['internal_notes'] : null;
        $this->container['show_signature_or_stamp'] = isset($data['show_signature_or_stamp']) ? $data['show_signature_or_stamp'] : true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contact_name'] === null) {
            $invalidProperties[] = "'contact_name' can't be null";
        }
        if ($this->container['published_on'] === null) {
            $invalidProperties[] = "'published_on' can't be null";
        }
        if ($this->container['sub_total'] === null) {
            $invalidProperties[] = "'sub_total' can't be null";
        }
        if ($this->container['total_after_discount'] === null) {
            $invalidProperties[] = "'total_after_discount' can't be null";
        }
        if ($this->container['grand_total'] === null) {
            $invalidProperties[] = "'grand_total' can't be null";
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
     * Gets document_serial
     *
     * @return string|null
     */
    public function getDocumentSerial()
    {
        return $this->container['document_serial'];
    }

    /**
     * Sets document_serial
     *
     * @param string|null $document_serial เลขที่เอกสาร
     *
     * @return $this
     */
    public function setDocumentSerial($document_serial)
    {
        $this->container['document_serial'] = $document_serial;

        return $this;
    }

    /**
     * Gets contact_code
     *
     * @return string|null
     */
    public function getContactCode()
    {
        return $this->container['contact_code'];
    }

    /**
     * Sets contact_code
     *
     * @param string|null $contact_code รหัส ผู้จำหน่าย หรือ ผู้จำหน่าย/ลูกค้า
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
     * @param string $contact_name ชื่อ ผู้จำหน่าย หรือ ผู้จำหน่าย/ลูกค้า
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
     * @param string|null $contact_address ที่อยู่ ผู้จำหน่าย หรือ ผู้จำหน่าย/ลูกค้า
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
     * @return string|null
     */
    public function getContactTaxId()
    {
        return $this->container['contact_tax_id'];
    }

    /**
     * Sets contact_tax_id
     *
     * @param string|null $contact_tax_id เลขประจำตัวผู้เสียภาษี ผู้จำหน่าย หรือ ผู้จำหน่าย/ลูกค้า <br> (ถ้ามีจำเป็นต้องครบ 13 หลัก) <br> <ex>Example: 1234567890123 </ex>
     *
     * @return $this
     */
    public function setContactTaxId($contact_tax_id)
    {
        $this->container['contact_tax_id'] = $contact_tax_id;

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
     * @param string|null $contact_branch สำนักงาน/สาขา
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
     * @param string|null $contact_email อีเมลผู้ติดต่อ <br> <ex>Example: supplier@email.com</ex>
     *
     * @return $this
     */
    public function setContactEmail($contact_email)
    {
        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets contact_number
     *
     * @return string|null
     */
    public function getContactNumber()
    {
        return $this->container['contact_number'];
    }

    /**
     * Sets contact_number
     *
     * @param string|null $contact_number เบอร์มือถือผู้ติดต่อ <br> <ex>Example: 099-999-9999</ex>
     *
     * @return $this
     */
    public function setContactNumber($contact_number)
    {
        $this->container['contact_number'] = $contact_number;

        return $this;
    }

    /**
     * Gets contact_zip_code
     *
     * @return string|null
     */
    public function getContactZipCode()
    {
        return $this->container['contact_zip_code'];
    }

    /**
     * Sets contact_zip_code
     *
     * @param string|null $contact_zip_code รหัสไปรษณีย์ติดต่อ
     *
     * @return $this
     */
    public function setContactZipCode($contact_zip_code)
    {
        $this->container['contact_zip_code'] = $contact_zip_code;

        return $this;
    }

    /**
     * Gets contact_group
     *
     * @return int|null
     */
    public function getContactGroup()
    {
        return $this->container['contact_group'];
    }

    /**
     * Sets contact_group
     *
     * @param int|null $contact_group ประผู้ติดต่อ <br> 1 = บุคคลธรรมดา <br> 3 = นิติบุคคล
     *
     * @return $this
     */
    public function setContactGroup($contact_group)
    {
        $this->container['contact_group'] = $contact_group;

        return $this;
    }

    /**
     * Gets published_on
     *
     * @return \DateTime
     */
    public function getPublishedOn()
    {
        return $this->container['published_on'];
    }

    /**
     * Sets published_on
     *
     * @param \DateTime $published_on วันที่เอกสาร รูปแบบ yyyy-MM-dd <br> <ex>Example: 2020-01-01</ex>
     *
     * @return $this
     */
    public function setPublishedOn($published_on)
    {
        $this->container['published_on'] = $published_on;

        return $this;
    }

    /**
     * Gets credit_type
     *
     * @return int|null
     */
    public function getCreditType()
    {
        return $this->container['credit_type'];
    }

    /**
     * Sets credit_type
     *
     * @param int|null $credit_type รูปแบบเครดิต <br> 1 = เครดิต (วัน) <br> 3 = เงินสด  <br> 5 = เครดิต (ไม่แสดงวันที่ครบกำหนด)
     *
     * @return $this
     */
    public function setCreditType($credit_type)
    {
        $this->container['credit_type'] = $credit_type;

        return $this;
    }

    /**
     * Gets credit_days
     *
     * @return int|null
     */
    public function getCreditDays()
    {
        return $this->container['credit_days'];
    }

    /**
     * Sets credit_days
     *
     * @param int|null $credit_days จำนวนวันที่ให้เครดิต <br> <ex>Example: 30</ex>
     *
     * @return $this
     */
    public function setCreditDays($credit_days)
    {
        $this->container['credit_days'] = $credit_days;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date วันครบกำหนดเอกสาร รูปแบบ yyyy-MM-dd <br> <ex>Example: 2020-01-01</ex>
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets sales_name
     *
     * @return string|null
     */
    public function getSalesName()
    {
        return $this->container['sales_name'];
    }

    /**
     * Sets sales_name
     *
     * @param string|null $sales_name ชื่อผู้สร้างเอกสาร หรือ ชื่อพนักงานขาย <br> <ex>Example: sale@email.com or Mr.Sale Shop</ex>
     *
     * @return $this
     */
    public function setSalesName($sales_name)
    {
        $this->container['sales_name'] = $sales_name;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return string|null
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string|null $project_name ชื่อโปรเจค
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference เลขที่อ้างอิง หรือ เลขที่เอกสารที่เกี่ยวข้อง <br> <ex>Example: INV2020010001</ex>
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets is_vat_inclusive
     *
     * @return bool|null
     */
    public function getIsVatInclusive()
    {
        return $this->container['is_vat_inclusive'];
    }

    /**
     * Sets is_vat_inclusive
     *
     * @param bool|null $is_vat_inclusive มูลค่าเอกสารรวมภาษีแล้วหรือไม่
     *
     * @return $this
     */
    public function setIsVatInclusive($is_vat_inclusive)
    {
        $this->container['is_vat_inclusive'] = $is_vat_inclusive;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\ExpenseSimpleProductItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\ExpenseSimpleProductItem[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets sub_total
     *
     * @return float
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param float $sub_total มูลค่ารวมเป็นเงิน
     *
     * @return $this
     */
    public function setSubTotal($sub_total)
    {
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return int|null
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param int|null $discount_percentage มูลค่าส่วนลดเป็นเปอร์เซ็นต์
     *
     * @return $this
     */
    public function setDiscountPercentage($discount_percentage)
    {
        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return float|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param float|null $discount_amount มูลค่าส่วนลดเป็นจำนวน (บาท)
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets total_after_discount
     *
     * @return float
     */
    public function getTotalAfterDiscount()
    {
        return $this->container['total_after_discount'];
    }

    /**
     * Sets total_after_discount
     *
     * @param float $total_after_discount มูลค่าหลังหักส่วนลด
     *
     * @return $this
     */
    public function setTotalAfterDiscount($total_after_discount)
    {
        $this->container['total_after_discount'] = $total_after_discount;

        return $this;
    }

    /**
     * Gets is_vat
     *
     * @return bool|null
     */
    public function getIsVat()
    {
        return $this->container['is_vat'];
    }

    /**
     * Sets is_vat
     *
     * @param bool|null $is_vat มูลค่าหลังหักส่วนลด มีีภาษีมูลค่าเพิ่ม 7%
     *
     * @return $this
     */
    public function setIsVat($is_vat)
    {
        $this->container['is_vat'] = $is_vat;

        return $this;
    }

    /**
     * Gets vat_amount
     *
     * @return float|null
     */
    public function getVatAmount()
    {
        return $this->container['vat_amount'];
    }

    /**
     * Sets vat_amount
     *
     * @param float|null $vat_amount ภาษีมูลค่าเพิ่ม
     *
     * @return $this
     */
    public function setVatAmount($vat_amount)
    {
        $this->container['vat_amount'] = $vat_amount;

        return $this;
    }

    /**
     * Gets grand_total
     *
     * @return float
     */
    public function getGrandTotal()
    {
        return $this->container['grand_total'];
    }

    /**
     * Sets grand_total
     *
     * @param float $grand_total จำนวนเงินรวมทั้งสิ้น (รวมภาษีมูลค่าเพิ่ม 7% แล้ว)
     *
     * @return $this
     */
    public function setGrandTotal($grand_total)
    {
        $this->container['grand_total'] = $grand_total;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string|null $remarks หมายเหตุเอกสาร
     *
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets internal_notes
     *
     * @return string|null
     */
    public function getInternalNotes()
    {
        return $this->container['internal_notes'];
    }

    /**
     * Sets internal_notes
     *
     * @param string|null $internal_notes โน๊ตภายในบริษัท
     *
     * @return $this
     */
    public function setInternalNotes($internal_notes)
    {
        $this->container['internal_notes'] = $internal_notes;

        return $this;
    }

    /**
     * Gets show_signature_or_stamp
     *
     * @return bool|null
     */
    public function getShowSignatureOrStamp()
    {
        return $this->container['show_signature_or_stamp'];
    }

    /**
     * Sets show_signature_or_stamp
     *
     * @param bool|null $show_signature_or_stamp ลายเซ็นอิเล็กทรอนิกส์และตรายาง
     *
     * @return $this
     */
    public function setShowSignatureOrStamp($show_signature_or_stamp)
    {
        $this->container['show_signature_or_stamp'] = $show_signature_or_stamp;

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


