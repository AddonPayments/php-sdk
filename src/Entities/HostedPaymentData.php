<?php

namespace AddonPayments\Api\Entities;

/**
 * Data collection to supplement a hosted payment page.
 */
class HostedPaymentData
{
    /**
     * Indicates to the issuer that the shipping and billing
     * addresses are expected to be the same. Used as a fraud
     * prevention mechanism.
     *
     * @var boolean
     */
    public $addressesMatch;

    /**
     * Determines the challenge request preference for 3DS 2.0.
     *
     * @var ChallengeRequestIndicator
     */
    public $challengeRequest;

    /**
     * The customer's email address.
     *
     * @var string
     */
    public $customerEmail;

    /**
     * Indicates if the customer is known and has an account.
     *
     * @var boolean
     */
    public $customerExists;

    /**
     * The identifier for the customer.
     *
     * @var string
     */
    public $customerKey;

    /**
     * The customer's number.
     *
     * @var string
     */
    public $customerNumber;

    /**
     * The customer's mobile phone number.
     *
     * @var string
     */
    public $customerPhoneMobile;

    /**
     * Indicates if the customer should be prompted to store their card.
     *
     * @var boolean
     */
    public $offerToSaveCard;

    /**
     * The identifier for the customer's desired payment method.
     *
     * @var string
     */
    public $paymentKey;

    /**
     * The product ID.
     *
     * @var string
     */
    public $productId;

    /**
     * Supplementary data that can be supplied at the descretion
     * of the merchant/application.
     *
     * @var array<string,string>
     */
    public $supplementaryData;



// Optional fields for 3DS2

     /**
     * The work phone number provided by the Cardholder. Should be In format: of 'CountryCallingCode|Number' for example, '1|123456789'.
     * 
     * European merchants: mandatory for SCA if captured by your application or website. Global Payments recommend you send at least one phone number (Mobile, Home or Work).
     *
     * @var string
     */
    public $customerWorkNumber;

    /**
     * The home phone number provided by the Cardholder. Should be In format: of 'CountryCallingCode|Number' for example, '1|123456789'.
     * 
     * European merchants: mandatory for SCA if captured by your application or website. Global Payments recommend you send at least one phone number (Mobile, Home or Work).
     *
     * @var string
     */
    public $customerHomeNumber;

     /**
     * Date the customer opened their account with the merchant.
     * 
     * European merchants: optional for SCA.
     *
     * @var string
     */
    public $accountAgeDate; 

    /**
     * Length of time the customer has had an account with the merchant. Allowed values:
     * NO_ACCOUNT
     * THIS_TRANSACTION
     * LESS_THAN_THIRTY_DAYS
     * THIRTY_TO_SIXTY_DAYS
     * MORE_THEN_SIXTY_DAYS
     * 
     * European merchants: optional for SCA.
     *
     * @var string
     */
    public $accountAgeIndicator;

    /**
     * Date the customer's account with the merchant was last changed. For example, if the billing or shipping details changed, new payment account or new users added.
     * 
     * European merchants: optional for SCA.
     * @var string
     */
    public $accountChangeDate;

    /**
     * Length of time since the account has changed. Allowed values:
     * THIS_TRANSACTION
     * LESS_THAN_THIRTY_DAYS
     * THIRTY_TO_SIXTY_DAYS
     * MORE_THEN_SIXTY_DAYS* 
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $accountChangeIndicator;

    /**
     * Date the customer's account with the merchant had a password change or account reset.
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $accountPassChangeDate;

    /**
     * Length of time since the customer's account with the merchant has had a password change or account reset. Allowed values:
     * NO_CHANGE
     * THIS_TRANSACTION
     * LESS_THAN_THIRTY_DAYS
     * THIRTY_TO_SIXTY_DAYS
     * MORE_THEN_SIXTY_DAYS
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $accountPassChangeIndicator;

    /**
     * European merchants: optional for SCA.
     * 
     * @var integer
     */
    public $accountPurchaseCount;

    /**
     * The type of transaction being authenticated. Allowed values:
     * GOODS_SERVICE_PURCHASE
     * CHECK_ACCEPTANCE
     * ACCOUNT_FUNDING
     * QUASI_CASH_TRANSACTION
     * PREPAID_ACTIVATION_AND_LOAD
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $transactionType;

    /**
     * Optional field to pass additional information about the customer
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $cardholderAccountIdentifier;

    /**
     * Indicates whether there has been suspicious activity on this customer's account, including fraudulent activity. (Note this is a boolean in the SDK). Allowed values:
     * SUSPICIOUS_ACTIVITY.
     * NO_SUSPICIOUS_ACTIVITY
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $suspiciousActivity;

    /**
     * Number of Add Card attempts in the last 24 hours.
     * 
     * European merchants: optional for SCA.
     * 
     * @var integer
     */
    public $provisionAttemptsDay;

    /**
     * Date the payment account was associated with the customer's account.
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $paymentAccountAge;
    
    /**
     * Length of time the customer has had an account with the merchant. Allowed values:
     * NO_ACCOUNT - The customer does not have an account, for example, guest checkout
     * THIS_TRANSACTION
     * LESS_THAN_THIRTY_DAYS
     * THIRTY_TO_SIXTY_DAYS.
     * MORE_THEN_SIXTY_DAYS
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $paymentAccountAgeIndicator;

    /**
     * The email address to which the merchandise was delivered. The field must be submitted in the form name@host.domain (for example, victor.cantera@example.com ).
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $deliveryEmail;

    /**
     * Indicates the delivery timeframe for the order. Allowed values:
     * ELECTRONIC_DELIVERY
     * SAME_DAY
     * OVERNIGHT
     * TWO_DAYS_OR_MORE
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $deliveryTimeframe;

    /**
     * Indicates shipping method chosen for the transaction. Must be speific to this transaction, not generally to the merchant. If one or more items are included in the sale, use the Shipping Indicator code for the physical goods. If all the goods are digital, use the Shipping Method code that describes the most expensive item. Allowed values:
     * BILLING_ADDRESS
     * ANOTHER_VERIFIED_ADDRESS
     * UNVERIFIED_ADDRESS
     * SHIP_TO_STORE
     * DIGITAL_GOODS
     * TRAVEL_AND_EVENT_TICKETS
     * OTHER
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $shipIndicator;

    /**
     * Date the shipping address was first used with the merchant.
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $shippingAddressUsage;

    /**
     * When the shipping address was first used with the merchant.Allowed values:
     * THIS_TRANSACTION
     * LESS_THAN_THIRTY_DAYS
     * THIRTY_TO_SIXTY_DAYS
     * MORE_THEN_SIXTY_DAYS
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $shippingAddressUsageIndicator;

    /**
     * Indicates whether the account customer name matches the shipping address name.
     * 
     * European merchants: optional for SCA.
     * 
     * @var Boolean
     */
    public $shippingNameIndicator;

    /**
     * In the case of a preorder; the expected date when the merchandise will be available.
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $preorderDate;

    /**
     * Indicates whether the customer is paying for merchandise that will be available at a future date.Allowed values:
     * MERCHANDISE_AVAILABLE
     * FUTURE_AVAILABILITY
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $preorderPurchaseIndicator;

    /**
     * Indicates whether the customer is reordering previous purchased items. Allowed values:
     * FIRST_TIME_ORDER
     * REORDER
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $reorderItemIndicator;

    /**
     * Number of transactions (successful and abandoned) for this customer account with the merchant in the previous 24 hours.
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $transactionActivityDay;
    
    /**
     * Number of transactions (successful and abandoned) for this customer account with the merchant in the previous year.
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $transactionActivityYear;
    
    /**
     * The total amount of prepaid or gift cards purchased. Format: major units, for example, USD 123.45 = 123.
     * 
     * European merchants: optional for SCA.
     * 
     * @var integer
     */
    public $giftCardAmount;
    
    /**
     * The total number of prepaid or gift cards purchased.
     * 
     * European merchants: optional for SCA.
     * 
     * @var integer
     */
    public $giftCardCount;
    
    /**
     * The currency code of prepaid or gift cards purchased. For example, Euro should be submitted as EUR.
     * ISO 4217
     * 
     * European merchants: optional for SCA.
     * 
     * @var integer
     */
    public $giftCardCurrency;

    /**
     * Indicates the maximum number of authorizations permitted for instalment payments.
     * 
     * European merchants: required for instalment transactions for SCA.
     * 
     * @var integer
     */
    public $recurringMaxInstallments;

    /**
     * Date after which no further recurring authorizations shall be performed.
     * 
     * European merchants: required for recurring transactions for SCA.
     * 
     * @var timestamp
     */
    public $recurringExpiry;

    /**
     * The minimum number of days between recurring authorizations.
     * 
     * European merchants: required for recurring transactions for SCA.
     * 
     * @var integer
     */
    public $recurringFrequency;

    /**
     * Method used by the customer previously to authenticate. Allowed values:
     * FRICTIONLESS_AUTHENTICATION
     * CHALLENGE_OCCURRED
     * AVS_VERIFIED
     * OTHER_ISSUER_METHOD
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $priorTransAuthMethod;
    
    /**
     * ACS Transaction ID for a prior 3DS authenticated transaction.
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $priorTransAuthIdentifier;

    /**
     * Date and time in UTC of the prior customer authentication. Minimum of 3 microseconds precision, can be up to 6. Must also include timezone.
     * 
     * Format: yyyy-MM-ddTHH:mm:ss.SSS(Z|±hh:mm)
     * 
     * European merchants: optional for SCA.
     * 
     * @var timestamp
     */
    public $priorTransAuthTimestamp;

    /**
     * Data that documents and supports a specific authentication process.
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $priorTransAuthData;

    /**
     * Method used by the customer previously to authenticate with the merchant. Allowed values:
     * NOT_AUTHENTICATED
     * MERCHANT_SYSTEM_AUTHENTICATION
     * FEDERATED_ID_AUTHENTICATION
     * ISSUER_CREDENTIAL_AUTHENTICATION
     * THIRD_PARTY_AUTHENTICATION
     * FIDO_AUTHENTICATION
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $cardLoginAuthType;

    /**
     * The timestamp of the authentication with the merchant. Minimum of 3 microseconds precision, can be up to 6. Must also include timezone.
     * 
     * Format: yyyy-MM-ddTHH:mm:ss.SSS(Z|±hh:mm)
     * 
     * European merchants: optional for SCA.
     * 
     * @var timestamp
     */
    public $cardLoginAuthTimestamp;

    /**
     * Not currently in use.
     * 
     * European merchants: optional for SCA.
     * 
     * @var string
     */
    public $cardLoginAuthData;

    /**
     * Allows you to communicate the status of trusted beneficiary/whitelist between the Issuer ACSt. Values accepted:
     * TRUE = Merchant is whitelisted by cardholder
     * FALSE = Merchant is not whitelisted by cardholder
     * 
     * European merchants: optional for SCA.
     * 
     * @var Boolean
     */
    public $whiteListStatus;

    /**
     * Instantiates a new `HostedPaymentData` object.
     *
     * @return
     */
    public function __construct()
    {
        $this->supplementaryData = [];
    }
}
