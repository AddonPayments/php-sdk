<?php

namespace AddonPayments\Api\Entities\Enums;

use AddonPayments\Api\Entities\Enum;

class ServiceEndpoints extends Enum
{
    const GLOBAL_ECOM_PRODUCTION = "https://api.realexpayments.com/epage-remote.cgi";
    const GLOBAL_ECOM_TEST = "https://api.sandbox.realexpayments.com/epage-remote.cgi";
    const PORTICO_PRODUCTION = "https://api2.heartlandportico.com";
    const PORTICO_TEST = "https://cert.api2.heartlandportico.com";
    const THREE_DS_AUTH_PRODUCTION = "https://authentications.realexpayments.com/3ds/";
    const THREE_DS_AUTH_TEST = "https://authentications.sandbox.realexpayments.com/3ds/";
    const PAYROLL_PRODUCTION = "https://taapi.heartlandpayrollonlinetest.com/PosWebUI";
    const PAYROLL_TEST = "https://taapi.heartlandpayrollonlinetest.com/PosWebUI/Test/Test";
    const TABLE_SERVICE_PRODUCTION = "https://www.freshtxt.com/api31/";
    const TABLE_SERVICE_TEST = "https://www.freshtxt.com/api31/";
}
