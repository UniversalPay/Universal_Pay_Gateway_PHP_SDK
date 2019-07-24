<?php

namespace Payments;

class RequestTokenAuth extends RequestToken {

    protected $_params = array(
        "action" => array(
            "type" => "mandatory",
            "values" => array(Payments::ACTION_AUTH, Payments::ACTION_PURCHASE),
        ),
        "merchantId" => array("type" => "mandatory"),
        "password" => array("type" => "mandatory"),
        "timestamp" => array("type" => "mandatory"),
        "allowOriginUrl" => array("type" => "mandatory"),
        "channel" => array("type" => "mandatory"),
        "amount" => array("type" => "mandatory"),
        "currency" => array("type" => "mandatory"),
        "country" => array("type" => "mandatory"),
        "paymentSolutionId" => array("type" => "mandatory"),
        "merchantNotificationUrl" => array("type" => "mandatory"),
        "customerId" => array(
            "type" => "conditional",
            "mandatory" => array("paymentMethod" => "CreditCard"),
        ),
        "customerDocumentNumber" => array(
            "type" => "conditional",
            "mandatory" => array("customerDocumentType" => "isset"),
        ),
        "payerDocumentNumber" => array(
            "type" => "conditional",
            "mandatory" => array("payerDocumentType" => "isset"),
        ),
        "merchantTxId" => array("type" => "optional"),
        "brandId" => array("type" => "optional"),
        "userDevice" => array("type" => "optional"),
        "userAgent" => array("type" => "optional"),
        "taxAmount" => array("type" => "optional"),
        "shippingAmount" => array("type" => "optional"),
        "chargeAmount" => array("type" => "optional"),
        "discountAmount" => array("type" => "optional"),
        "language" => array("type" => "optional"),
        "s_text1" => array("type" => "optional"),
        "s_text2" => array("type" => "optional"),
        "s_text3" => array("type" => "optional"),
        "s_text4" => array("type" => "optional"),
        "s_text5" => array("type" => "optional"),
        "d_date1" => array("type" => "optional"),
        "d_date2" => array("type" => "optional"),
        "d_date3" => array("type" => "optional"),
        "d_date4" => array("type" => "optional"),
        "d_date5" => array("type" => "optional"),
        "b_bool1" => array("type" => "optional"),
        "b_bool2" => array("type" => "optional"),
        "b_bool3" => array("type" => "optional"),
        "b_bool4" => array("type" => "optional"),
        "b_bool5" => array("type" => "optional"),
        "n_num1" => array("type" => "optional"),
        "n_num2" => array("type" => "optional"),
        "n_num3" => array("type" => "optional"),
        "n_num4" => array("type" => "optional"),
        "n_num5" => array("type" => "optional"),
        "merchantLandingPageUrl" => array("type" => "optional"),
        "firstTimeTransaction" => array("type" => "optional"),
        "customerDocumentType" => array("type" => "optional"),
        "customerFirstName" => array("type" => "optional"),
        "customerLastName" => array("type" => "optional"),
        "customerSex" => array("type" => "optional"),
        "customerDateOfBirth" => array("type" => "optional"),
        "customerRegistrationDate" => array("type" => "optional"),
        "customerEmail" => array("type" => "optional"),
        "customerPhone" => array("type" => "optional"),
        "customerIPAddress" => array("type" => "optional"),
        "customerCountry" => array("type" => "optional"),
        "customerAddressHouseName" => array("type" => "optional"),
        "customerAddressHouseNumber" => array("type" => "optional"),
        "customerAddressFlat" => array("type" => "optional"),
        "customerAddressStreet" => array("type" => "optional"),
        "customerAddressCity" => array("type" => "optional"),
        "customerAddressDistrict" => array("type" => "optional"),
        "customerAddressPostalCode" => array("type" => "optional"),
        "customerAddressCountry" => array("type" => "optional"),
        "customerAddressState" => array("type" => "optional"),
        "customerAddressPhone" => array("type" => "optional"),
        "customerShippingAddressHouseName" => array("type" => "optional"),
        "customerShippingAddressHouseNumber" => array("type" => "optional"),
        "customerShippingAddressFlat" => array("type" => "optional"),
        "customerShippingAddressStreet" => array("type" => "optional"),
        "customerShippingAddressCity" => array("type" => "optional"),
        "customerShippingAddressDistrict" => array("type" => "optional"),
        "customerShippingAddressPostalCode" => array("type" => "optional"),
        "customerShippingAddressCountry" => array("type" => "optional"),
        "customerShippingAddressState" => array("type" => "optional"),
        "customerShippingAddressPhone" => array("type" => "optional"),
        "customerBillingAddressHouseName" => array("type" => "optional"),
        "customerBillingAddressHouseNumber" => array("type" => "optional"),
        "customerBillingAddressFlat" => array("type" => "optional"),
        "customerBillingAddressStreet" => array("type" => "optional"),
        "customerBillingAddressCity" => array("type" => "optional"),
        "customerBillingAddressDistrict" => array("type" => "optional"),
        "customerBillingAddressPostalCode" => array("type" => "optional"),
        "customerBillingAddressCountry" => array("type" => "optional"),
        "customerBillingAddressState" => array("type" => "optional"),
        "customerBillingAddressPhone" => array("type" => "optional"),
        "payerFirstName" => array("type" => "optional"),
        "payerLastName" => array("type" => "optional"),
        "payerEmail" => array("type" => "optional"),
        "payerDateOfBirth" => array("type" => "optional"),
        "payerPhone" => array("type" => "optional"),
        "payerDocumentType" => array("type" => "optional"),
        "payerCustomerId" => array("type" => "optional"),
        "forceSecurePayment" => array("type" => "optional"),
        "processUnknownSecurePayment" => array("type" => "optional"),
        "specinCreditCardToken" => array("type" => "optional"),
        "specinProcessWithoutCvv2" => array("type" => "optional"),
        "bankMid" => array("type" => "optional"),
    );

    public function __construct() {
        parent::__construct();
        $this->_data["action"] = Payments::ACTION_AUTH;
    }

}
