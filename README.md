# OpenAPIClient-php

FlowAccount.com โปรแกรมบัญชีออนไลน์ใช้งานง่าย สำหรับธุรกิจที่พึ่งเริ่มต้น   # Introduction **Servers Production**    site: https://www.flowaccount.com    api url: https://openapi.flowaccount.com/v1    **Beta test**   site: http://sandbox-new.flowaccount.com/    api url: https://openapi.flowaccount.com/test

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 2-oas3
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [http://wwww.flowaccount.com](http://wwww.flowaccount.com)

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/x-www-form-urlencoded'; // string | 
$grant_type = 'grant_type_example'; // string | 
$scope = 'scope_example'; // string | 
$client_id = 'client_id_example'; // string | 
$client_secret = 'client_secret_example'; // string | 

try {
    $result = $apiInstance->tokenPost($content_type, $grant_type, $scope, $client_id, $client_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->tokenPost: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://openapi.flowaccount.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**tokenPost**](docs/Api/AuthenticationApi.md#tokenpost) | **POST** /token | Generate Access Token
*BillingNotesApi* | [**billingNotesEmailDocumentPost**](docs/Api/BillingNotesApi.md#billingnotesemaildocumentpost) | **POST** /billing-notes/email-document | Send email billing notes document.
*BillingNotesApi* | [**billingNotesGet**](docs/Api/BillingNotesApi.md#billingnotesget) | **GET** /billing-notes | Get list all billing notes documents.
*BillingNotesApi* | [**billingNotesIdAttachmentPost**](docs/Api/BillingNotesApi.md#billingnotesidattachmentpost) | **POST** /billing-notes/{id}/attachment | Add Attachment to billing notes document.
*BillingNotesApi* | [**billingNotesIdDelete**](docs/Api/BillingNotesApi.md#billingnotesiddelete) | **DELETE** /billing-notes/{id} | Get billing notes document.
*BillingNotesApi* | [**billingNotesIdGet**](docs/Api/BillingNotesApi.md#billingnotesidget) | **GET** /billing-notes/{id} | Get billing notes document.
*BillingNotesApi* | [**billingNotesIdStatusKeyStatusIdPost**](docs/Api/BillingNotesApi.md#billingnotesidstatuskeystatusidpost) | **POST** /billing-notes/{id}/status-key/{statusId} | Change status of billing notes document.
*BillingNotesApi* | [**billingNotesInlinePost**](docs/Api/BillingNotesApi.md#billingnotesinlinepost) | **POST** /billing-notes/inline | Create billing notes document with discount and tax inline.
*BillingNotesApi* | [**billingNotesPost**](docs/Api/BillingNotesApi.md#billingnotespost) | **POST** /billing-notes | Create billing notes document.
*BillingNotesApi* | [**billingNotesSharedocumentPost**](docs/Api/BillingNotesApi.md#billingnotessharedocumentpost) | **POST** /billing-notes/sharedocument | Share link billing notes document.
*CashInvoiceApi* | [**cashInvoicesEmailDocumentPost**](docs/Api/CashInvoiceApi.md#cashinvoicesemaildocumentpost) | **POST** /cash-invoices/email-document | Send email cash invoices document.
*CashInvoiceApi* | [**cashInvoicesGet**](docs/Api/CashInvoiceApi.md#cashinvoicesget) | **GET** /cash-invoices | Get list all cash invoices documents
*CashInvoiceApi* | [**cashInvoicesIdAttachmentPost**](docs/Api/CashInvoiceApi.md#cashinvoicesidattachmentpost) | **POST** /cash-invoices/{id}/attachment | Add Attachment to cash invoices document.
*CashInvoiceApi* | [**cashInvoicesIdDelete**](docs/Api/CashInvoiceApi.md#cashinvoicesiddelete) | **DELETE** /cash-invoices/{id} | Get cash invoices document.
*CashInvoiceApi* | [**cashInvoicesIdGet**](docs/Api/CashInvoiceApi.md#cashinvoicesidget) | **GET** /cash-invoices/{id} | Get cash invoices document.
*CashInvoiceApi* | [**cashInvoicesIdPaymentPost**](docs/Api/CashInvoiceApi.md#cashinvoicesidpaymentpost) | **POST** /cash-invoices/{id}/payment | Change paid status of cash invoices document.
*CashInvoiceApi* | [**cashInvoicesIdStatusKeyStatusIdPost**](docs/Api/CashInvoiceApi.md#cashinvoicesidstatuskeystatusidpost) | **POST** /cash-invoices/{id}/status-key/{statusId} | Change status of cash invoices document.
*CashInvoiceApi* | [**cashInvoicesInlinePost**](docs/Api/CashInvoiceApi.md#cashinvoicesinlinepost) | **POST** /cash-invoices/inline | Create cash invoices document with discount and tax inline.
*CashInvoiceApi* | [**cashInvoicesPost**](docs/Api/CashInvoiceApi.md#cashinvoicespost) | **POST** /cash-invoices | Create cash invoices document.
*CashInvoiceApi* | [**cashInvoicesSharedocumentPost**](docs/Api/CashInvoiceApi.md#cashinvoicessharedocumentpost) | **POST** /cash-invoices/sharedocument | Share link cash invoices document.
*ContactsApi* | [**contactsGet**](docs/Api/ContactsApi.md#contactsget) | **GET** /contacts | Get list all contacts.
*ContactsApi* | [**contactsIdDelete**](docs/Api/ContactsApi.md#contactsiddelete) | **DELETE** /contacts/{id} | Delete contacts.
*ContactsApi* | [**contactsIdGet**](docs/Api/ContactsApi.md#contactsidget) | **GET** /contacts/{id} | Get contacts.
*ContactsApi* | [**contactsIdPut**](docs/Api/ContactsApi.md#contactsidput) | **PUT** /contacts/{id} | Update contacts.
*ContactsApi* | [**contactsPost**](docs/Api/ContactsApi.md#contactspost) | **POST** /contacts | Create contacts
*ExpensesApi* | [**expensesCategoriesAccountingGet**](docs/Api/ExpensesApi.md#expensescategoriesaccountingget) | **GET** /expenses/categories/accounting | Accounting categorys expenses document.
*ExpensesApi* | [**expensesCategoriesBusinessGet**](docs/Api/ExpensesApi.md#expensescategoriesbusinessget) | **GET** /expenses/categories/business | Business categorys expenses document.
*ExpensesApi* | [**expensesEmailDocumentPost**](docs/Api/ExpensesApi.md#expensesemaildocumentpost) | **POST** /expenses/email-document | Send email expenses document.
*ExpensesApi* | [**expensesGet**](docs/Api/ExpensesApi.md#expensesget) | **GET** /expenses | Get list all expenses documents.
*ExpensesApi* | [**expensesIdAttachmentPost**](docs/Api/ExpensesApi.md#expensesidattachmentpost) | **POST** /expenses/{id}/attachment | Add Attachment to expenses.
*ExpensesApi* | [**expensesIdDelete**](docs/Api/ExpensesApi.md#expensesiddelete) | **DELETE** /expenses/{id} | Get expenses document.
*ExpensesApi* | [**expensesIdGet**](docs/Api/ExpensesApi.md#expensesidget) | **GET** /expenses/{id} | Get expenses document.
*ExpensesApi* | [**expensesIdPaymentPost**](docs/Api/ExpensesApi.md#expensesidpaymentpost) | **POST** /expenses/{id}/payment | Change paid status of expenses document.
*ExpensesApi* | [**expensesIdStatusKeyStatusIdPost**](docs/Api/ExpensesApi.md#expensesidstatuskeystatusidpost) | **POST** /expenses/{id}/status-key/{statusId} | Change status of expenses document.
*ExpensesApi* | [**expensesInlinePost**](docs/Api/ExpensesApi.md#expensesinlinepost) | **POST** /expenses/inline | Create expenses document with discount and tax inline.
*ExpensesApi* | [**expensesPost**](docs/Api/ExpensesApi.md#expensespost) | **POST** /expenses | Create expenses document.
*ExpensesApi* | [**expensesSharedocumentPost**](docs/Api/ExpensesApi.md#expensessharedocumentpost) | **POST** /expenses/sharedocument | Share link expenses documents.
*ProductsApi* | [**productsGet**](docs/Api/ProductsApi.md#productsget) | **GET** /products | Get list all products.
*ProductsApi* | [**productsIdDelete**](docs/Api/ProductsApi.md#productsiddelete) | **DELETE** /products/{id} | Delete products.
*ProductsApi* | [**productsIdGet**](docs/Api/ProductsApi.md#productsidget) | **GET** /products/{id} | Get products.
*ProductsApi* | [**productsIdPut**](docs/Api/ProductsApi.md#productsidput) | **PUT** /products/{id} | Update products.
*ProductsApi* | [**productsPost**](docs/Api/ProductsApi.md#productspost) | **POST** /products | Create products.
*PurchaseOrderApi* | [**purchasesOrdersEmailDocumentPost**](docs/Api/PurchaseOrderApi.md#purchasesordersemaildocumentpost) | **POST** /purchases-orders/email-document | Send email purchase order document.
*PurchaseOrderApi* | [**purchasesOrdersGet**](docs/Api/PurchaseOrderApi.md#purchasesordersget) | **GET** /purchases-orders | Get list all purchase order documents.
*PurchaseOrderApi* | [**purchasesOrdersIdAttachmentPost**](docs/Api/PurchaseOrderApi.md#purchasesordersidattachmentpost) | **POST** /purchases-orders/{id}/attachment | Add Attachment to purchase order document.
*PurchaseOrderApi* | [**purchasesOrdersIdDelete**](docs/Api/PurchaseOrderApi.md#purchasesordersiddelete) | **DELETE** /purchases-orders/{id} | Get purchase order document.
*PurchaseOrderApi* | [**purchasesOrdersIdGet**](docs/Api/PurchaseOrderApi.md#purchasesordersidget) | **GET** /purchases-orders/{id} | Get purchase order document.
*PurchaseOrderApi* | [**purchasesOrdersIdStatusKeyStatusIdPost**](docs/Api/PurchaseOrderApi.md#purchasesordersidstatuskeystatusidpost) | **POST** /purchases-orders/{id}/status-key/{statusId} | Change status of purchase order document.
*PurchaseOrderApi* | [**purchasesOrdersInlinePost**](docs/Api/PurchaseOrderApi.md#purchasesordersinlinepost) | **POST** /purchases-orders/inline | Create purchase order document with discount and tax inline.
*PurchaseOrderApi* | [**purchasesOrdersPost**](docs/Api/PurchaseOrderApi.md#purchasesorderspost) | **POST** /purchases-orders | Create purchase order document.
*PurchaseOrderApi* | [**purchasesOrdersSharedocumentPost**](docs/Api/PurchaseOrderApi.md#purchasesorderssharedocumentpost) | **POST** /purchases-orders/sharedocument | Share link purchase order document.
*QuotationsApi* | [**quotationsEmailDocumentPost**](docs/Api/QuotationsApi.md#quotationsemaildocumentpost) | **POST** /quotations/email-document | Send email quotations document.
*QuotationsApi* | [**quotationsGet**](docs/Api/QuotationsApi.md#quotationsget) | **GET** /quotations | Get list all quotations documents.
*QuotationsApi* | [**quotationsIdAttachmentPost**](docs/Api/QuotationsApi.md#quotationsidattachmentpost) | **POST** /quotations/{id}/attachment | Add Attachment to quotations document.
*QuotationsApi* | [**quotationsIdDelete**](docs/Api/QuotationsApi.md#quotationsiddelete) | **DELETE** /quotations/{id} | Get quotations document.
*QuotationsApi* | [**quotationsIdGet**](docs/Api/QuotationsApi.md#quotationsidget) | **GET** /quotations/{id} | Get quotations document.
*QuotationsApi* | [**quotationsIdStatusKeyStatusIdPost**](docs/Api/QuotationsApi.md#quotationsidstatuskeystatusidpost) | **POST** /quotations/{id}/status-key/{statusId} | Change status of quotations document.
*QuotationsApi* | [**quotationsInlinePost**](docs/Api/QuotationsApi.md#quotationsinlinepost) | **POST** /quotations/inline | Create quotations document with discount and tax inline.
*QuotationsApi* | [**quotationsPost**](docs/Api/QuotationsApi.md#quotationspost) | **POST** /quotations | Create quotations document.
*QuotationsApi* | [**quotationsSharedocumentPost**](docs/Api/QuotationsApi.md#quotationssharedocumentpost) | **POST** /quotations/sharedocument | Share link quotations document.
*ReceiptApi* | [**receiptsEmailDocumentPost**](docs/Api/ReceiptApi.md#receiptsemaildocumentpost) | **POST** /receipts/email-document | Send email receipt document.
*ReceiptApi* | [**receiptsGet**](docs/Api/ReceiptApi.md#receiptsget) | **GET** /receipts | Get list all receipt documents
*ReceiptApi* | [**receiptsIdAttachmentPost**](docs/Api/ReceiptApi.md#receiptsidattachmentpost) | **POST** /receipts/{id}/attachment | Add Attachment to receipt document.
*ReceiptApi* | [**receiptsIdDelete**](docs/Api/ReceiptApi.md#receiptsiddelete) | **DELETE** /receipts/{id} | Get receipt document.
*ReceiptApi* | [**receiptsIdGet**](docs/Api/ReceiptApi.md#receiptsidget) | **GET** /receipts/{id} | Get receipt document.
*ReceiptApi* | [**receiptsIdPaymentPost**](docs/Api/ReceiptApi.md#receiptsidpaymentpost) | **POST** /receipts/{id}/payment | Change paid status of receipt document.
*ReceiptApi* | [**receiptsIdStatusKeyStatusIdPost**](docs/Api/ReceiptApi.md#receiptsidstatuskeystatusidpost) | **POST** /receipts/{id}/status-key/{statusId} | Change status of receipt document.
*ReceiptApi* | [**receiptsInlinePost**](docs/Api/ReceiptApi.md#receiptsinlinepost) | **POST** /receipts/inline | Create receipt document with discount and tax inline.
*ReceiptApi* | [**receiptsPost**](docs/Api/ReceiptApi.md#receiptspost) | **POST** /receipts | Create cash receipt document.
*ReceiptApi* | [**receiptsSharedocumentPost**](docs/Api/ReceiptApi.md#receiptssharedocumentpost) | **POST** /receipts/sharedocument | Share link receipt document.
*ReceivingInventoryApi* | [**purchasesEmailDocumentPost**](docs/Api/ReceivingInventoryApi.md#purchasesemaildocumentpost) | **POST** /purchases/email-document | Send email receiving inventory document.
*ReceivingInventoryApi* | [**purchasesGet**](docs/Api/ReceivingInventoryApi.md#purchasesget) | **GET** /purchases | Get list all receiving inventory documents.
*ReceivingInventoryApi* | [**purchasesIdAttachmentPost**](docs/Api/ReceivingInventoryApi.md#purchasesidattachmentpost) | **POST** /purchases/{id}/attachment | Add Attachment to receiving inventory document.
*ReceivingInventoryApi* | [**purchasesIdDelete**](docs/Api/ReceivingInventoryApi.md#purchasesiddelete) | **DELETE** /purchases/{id} | Get receiving inventory document.
*ReceivingInventoryApi* | [**purchasesIdGet**](docs/Api/ReceivingInventoryApi.md#purchasesidget) | **GET** /purchases/{id} | Get receiving inventory document.
*ReceivingInventoryApi* | [**purchasesIdStatusKeyStatusIdPost**](docs/Api/ReceivingInventoryApi.md#purchasesidstatuskeystatusidpost) | **POST** /purchases/{id}/status-key/{statusId} | Change status of receiving inventory document.
*ReceivingInventoryApi* | [**purchasesInlinePost**](docs/Api/ReceivingInventoryApi.md#purchasesinlinepost) | **POST** /purchases/inline | Create receiving inventory document with discount and tax inline.
*ReceivingInventoryApi* | [**purchasesPost**](docs/Api/ReceivingInventoryApi.md#purchasespost) | **POST** /purchases | Create receiving inventory document.
*ReceivingInventoryApi* | [**purchasesSharedocumentPost**](docs/Api/ReceivingInventoryApi.md#purchasessharedocumentpost) | **POST** /purchases/sharedocument | Share link receiving inventory document.
*TaxInvoiceApi* | [**taxInvoicesEmailDocumentPost**](docs/Api/TaxInvoiceApi.md#taxinvoicesemaildocumentpost) | **POST** /tax-invoices/email-document | Send Email tax invoice document
*TaxInvoiceApi* | [**taxInvoicesGet**](docs/Api/TaxInvoiceApi.md#taxinvoicesget) | **GET** /tax-invoices | Get list all tax invocie documents.
*TaxInvoiceApi* | [**taxInvoicesIdAttachmentPost**](docs/Api/TaxInvoiceApi.md#taxinvoicesidattachmentpost) | **POST** /tax-invoices/{id}/attachment | Add Attachment to tax Invoices document.
*TaxInvoiceApi* | [**taxInvoicesIdDelete**](docs/Api/TaxInvoiceApi.md#taxinvoicesiddelete) | **DELETE** /tax-invoices/{id} | Get tax invoices document.
*TaxInvoiceApi* | [**taxInvoicesIdGet**](docs/Api/TaxInvoiceApi.md#taxinvoicesidget) | **GET** /tax-invoices/{id} | Get tax invoices document.
*TaxInvoiceApi* | [**taxInvoicesIdPaymentPost**](docs/Api/TaxInvoiceApi.md#taxinvoicesidpaymentpost) | **POST** /tax-invoices/{id}/payment | Change paid status of tax-invoice document.
*TaxInvoiceApi* | [**taxInvoicesIdStatusKeyStatusIdPost**](docs/Api/TaxInvoiceApi.md#taxinvoicesidstatuskeystatusidpost) | **POST** /tax-invoices/{id}/status-key/{statusId} | Change status of tax invoices document.
*TaxInvoiceApi* | [**taxInvoicesInlinePost**](docs/Api/TaxInvoiceApi.md#taxinvoicesinlinepost) | **POST** /tax-invoices/inline | Create tax invocie document with discount and tax inline.
*TaxInvoiceApi* | [**taxInvoicesPost**](docs/Api/TaxInvoiceApi.md#taxinvoicespost) | **POST** /tax-invoices | Create tax invocie document.
*TaxInvoiceApi* | [**taxInvoicesSharedocumentPost**](docs/Api/TaxInvoiceApi.md#taxinvoicessharedocumentpost) | **POST** /tax-invoices/sharedocument | Share link tax invoice document.
*WithholdingTaxApi* | [**withholdingTaxesEmailDocumentPost**](docs/Api/WithholdingTaxApi.md#withholdingtaxesemaildocumentpost) | **POST** /withholding-taxes/email-document | Send email withholding tax document.
*WithholdingTaxApi* | [**withholdingTaxesGet**](docs/Api/WithholdingTaxApi.md#withholdingtaxesget) | **GET** /withholding-taxes | Get list all withholding tax documents.
*WithholdingTaxApi* | [**withholdingTaxesIdAttachmentPost**](docs/Api/WithholdingTaxApi.md#withholdingtaxesidattachmentpost) | **POST** /withholding-taxes/{id}/attachment | Add Attachment to expenses.
*WithholdingTaxApi* | [**withholdingTaxesIdDelete**](docs/Api/WithholdingTaxApi.md#withholdingtaxesiddelete) | **DELETE** /withholding-taxes/{id} | Get withholding tax document.
*WithholdingTaxApi* | [**withholdingTaxesIdGet**](docs/Api/WithholdingTaxApi.md#withholdingtaxesidget) | **GET** /withholding-taxes/{id} | Get withholding tax document.
*WithholdingTaxApi* | [**withholdingTaxesIdStatusKeyStatusIdPost**](docs/Api/WithholdingTaxApi.md#withholdingtaxesidstatuskeystatusidpost) | **POST** /withholding-taxes/{id}/status-key/{statusId} | Change status of withholding tax document.
*WithholdingTaxApi* | [**withholdingTaxesPost**](docs/Api/WithholdingTaxApi.md#withholdingtaxespost) | **POST** /withholding-taxes | Create withholding tax document.
*WithholdingTaxApi* | [**withholdingTaxesSharedocumentPost**](docs/Api/WithholdingTaxApi.md#withholdingtaxessharedocumentpost) | **POST** /withholding-taxes/sharedocument | Share link withholding tax documents.


## Documentation For Models

 - [AttachmentResponse](docs/Model/AttachmentResponse.md)
 - [AttachmentResponseData](docs/Model/AttachmentResponseData.md)
 - [AuthenResponse](docs/Model/AuthenResponse.md)
 - [BusinessCategory](docs/Model/BusinessCategory.md)
 - [Contact](docs/Model/Contact.md)
 - [ContactResponse](docs/Model/ContactResponse.md)
 - [ContactResponseAllOf](docs/Model/ContactResponseAllOf.md)
 - [DeleteResponse](docs/Model/DeleteResponse.md)
 - [DeleteResponseData](docs/Model/DeleteResponseData.md)
 - [Document](docs/Model/Document.md)
 - [DocumentResponse](docs/Model/DocumentResponse.md)
 - [ExpenseDocument](docs/Model/ExpenseDocument.md)
 - [ExpenseDocumentResponse](docs/Model/ExpenseDocumentResponse.md)
 - [ExpenseInlineDocument](docs/Model/ExpenseInlineDocument.md)
 - [ExpenseInlineDocumentResponse](docs/Model/ExpenseInlineDocumentResponse.md)
 - [ExpenseInlineProductItem](docs/Model/ExpenseInlineProductItem.md)
 - [ExpenseSimpleProductItem](docs/Model/ExpenseSimpleProductItem.md)
 - [InlineDocument](docs/Model/InlineDocument.md)
 - [InlineDocumentAllOf](docs/Model/InlineDocumentAllOf.md)
 - [InlineDocumentResponse](docs/Model/InlineDocumentResponse.md)
 - [InlineDocumentResponseAllOf](docs/Model/InlineDocumentResponseAllOf.md)
 - [InlineDocumentResponseAllOfData](docs/Model/InlineDocumentResponseAllOfData.md)
 - [InlineObject](docs/Model/InlineObject.md)
 - [InlineObject1](docs/Model/InlineObject1.md)
 - [InlineObject2](docs/Model/InlineObject2.md)
 - [InlineObject3](docs/Model/InlineObject3.md)
 - [InlineObject4](docs/Model/InlineObject4.md)
 - [InlineObject5](docs/Model/InlineObject5.md)
 - [InlineObject6](docs/Model/InlineObject6.md)
 - [InlineObject7](docs/Model/InlineObject7.md)
 - [InlineObject8](docs/Model/InlineObject8.md)
 - [InlineObject9](docs/Model/InlineObject9.md)
 - [InlineProductItem](docs/Model/InlineProductItem.md)
 - [InlineProductItemAllOf](docs/Model/InlineProductItemAllOf.md)
 - [PaymentDocument](docs/Model/PaymentDocument.md)
 - [PaymentDocumentResponse](docs/Model/PaymentDocumentResponse.md)
 - [Product](docs/Model/Product.md)
 - [ProductItem](docs/Model/ProductItem.md)
 - [ProductResponse](docs/Model/ProductResponse.md)
 - [ProductResponseData](docs/Model/ProductResponseData.md)
 - [ReferencedByMe](docs/Model/ReferencedByMe.md)
 - [ReferencedToMe](docs/Model/ReferencedToMe.md)
 - [SendEmail](docs/Model/SendEmail.md)
 - [SendEmailCoppies](docs/Model/SendEmailCoppies.md)
 - [SendEmailCoppiesAllOf](docs/Model/SendEmailCoppiesAllOf.md)
 - [SendEmailResponse](docs/Model/SendEmailResponse.md)
 - [SendEmailResponseData](docs/Model/SendEmailResponseData.md)
 - [SendEmailSimple](docs/Model/SendEmailSimple.md)
 - [ShareDocument](docs/Model/ShareDocument.md)
 - [ShareDocumentResponse](docs/Model/ShareDocumentResponse.md)
 - [ShareDocumentResponseData](docs/Model/ShareDocumentResponseData.md)
 - [SimpleDocument](docs/Model/SimpleDocument.md)
 - [SimpleDocumentAllOf](docs/Model/SimpleDocumentAllOf.md)
 - [SimpleDocumentResponse](docs/Model/SimpleDocumentResponse.md)
 - [SimpleDocumentResponseAllOf](docs/Model/SimpleDocumentResponseAllOf.md)
 - [SimpleDocumentResponseAllOfData](docs/Model/SimpleDocumentResponseAllOfData.md)
 - [SimpleProductItem](docs/Model/SimpleProductItem.md)
 - [StatusDocument](docs/Model/StatusDocument.md)
 - [UpgradeDocument](docs/Model/UpgradeDocument.md)
 - [WithholidingTaxDocument](docs/Model/WithholidingTaxDocument.md)
 - [WithholidingTaxDocumentResponse](docs/Model/WithholidingTaxDocumentResponse.md)
 - [WithholidingTaxDocumentResponseData](docs/Model/WithholidingTaxDocumentResponseData.md)
 - [WithholidingTaxItem](docs/Model/WithholidingTaxItem.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author

Email: developer@flowaccount.com
Tel: 02-026-8989
