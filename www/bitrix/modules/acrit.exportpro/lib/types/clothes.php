<?php
IncludeModuleLangFile( __FILE__ );

$profileTypes["ym_clothes"] = array(
    "CODE" => "ym_clothes",
    "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_NAME" ),
    "DESCRIPTION" => GetMessage( "ACRIT_EXPORTPRO_PODDERJIVAETSA_ANDEK" ),
    "REG" => "http://market.yandex.ru/",
    "HELP" => "http://help.yandex.ru/partnermarket/export/feed.xml",
    "FIELDS" => array(
        array(
            "CODE" => "ID",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_ID" ),
            "VALUE" => "ID",
            "REQUIRED" => "Y",
            "TYPE" => "field",
        ),
        array(
            "CODE" => "AVAILABLE",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_AVAILABLE" ),
            "VALUE" => "",
            "TYPE" => "const",
            "CONDITION" => array(
                "CLASS_ID" => "CondGroup",
                "DATA" => array(
                    "All" => "AND",
                    "True" => "True"
                ),
                "CHILDREN" => array(
                    array(
                        "CLASS_ID" => "CondCatQuantity",
                        "DATA" => array(
                                "logic" => "EqGr",
                                "value" => "1"
                        )
                    )
                )
            ),
            "USE_CONDITION" => "Y",
            "CONTVALUE_TRUE" => "true",
            "CONTVALUE_FALSE" => "false",
        ),
        array(
            "CODE" => "BID",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_BID" ),
        ),
        array(
            "CODE" => "URL",
            "NAME" => "URL ".GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_URL" ),
            "VALUE" => "DETAIL_PAGE_URL",
            "TYPE" => "field",
        ),
        array(
            "CODE" => "PRICE",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PRICE" ),
            "REQUIRED" => "Y",
            "TYPE" => "const",
            "CONTVALUE_TRUE" => "0",
        ),
        array(
            "CODE" => "OLDPRICE",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_OLDPRICE" ),
            "TYPE" => "const",
            "CONTVALUE_TRUE" => "0",
        ),
        array(
            "CODE" => "CURRENCYID",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_CURRENCY" ),
            "REQUIRED" => "Y",
            "TYPE" => "const",
            "CONTVALUE_TRUE" => "RUR",
        ),
        array(
            "CODE" => "CATEGORYID",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_CATEGORY" ),
            "VALUE" => "IBLOCK_SECTION_ID",
            "REQUIRED" => "Y",
            "TYPE" => "field",
        ),
        array(
            "CODE" => "PICTURE",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PICTURE" ),
        ),
        array(
            "CODE" => "STORE",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_STORE" ),
        ),
        array(
            "CODE" => "PICKUP",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PICKUP" ),
        ),
        array(
            "CODE" => "DELIVERY",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_DELIVERY" ),
        ),
        array(
            "CODE" => "LOCAL_DELIVERY_COST",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_LOCALDELIVERYCOST" ),
        ),
        array(
            "CODE" => "LOCAL_DELIVERY_DAYS",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_LOCALDELIVERYDAYS" ),
        ),
        // TODO : �������� � ���� ���� �������� ������������� ����
        array(
            "CODE" => "TYPEPREFIX",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_TYPEPREFIX" ),
        ),
        array(
            "CODE" => "VENDOR",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_VENDOR" ),
        ),
        array(
            "CODE" => "VENDORCODE",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_VENDORCODE" ),
        ),
        array(
            "CODE" => "MODEL",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_MODEL" ),
        ),
        array(
            "CODE" => "DESCRIPTION",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_DESCRIPTION" ),
        ),
        array(
            "CODE" => "SALES_NOTES",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_SALESNOTES" ),
        ),
        array(
            "CODE" => "MANUFACTURER_WARRANTY",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_MANUFACTURERWARRANTY" ),
        ),
        array(
            "CODE" => "COUNTRY_OF_ORIGIN",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_COUNTRYOFORIGIN" ),
        ),
        array(
            "CODE" => "DOWNLOADABLE",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_DOWNLOADABLE" ),
        ),
        array(
            "CODE" => "ADULT",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_ADULT" ),
        ),
        array(
            "CODE" => "AGE",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_AGE" ),
        ),
        array(
            "CODE" => "BARCODE",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_BARCODE" ),
        ),
        array(
            "CODE" => "CPA",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_CPA" ),
        ),
        array(
            "CODE" => "REC",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_REC" ),
        ),
        array(
            "CODE" => "EXPIRY",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_EXPIRY" ),
        ),
        array(
            "CODE" => "WEIGHT",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_WEIGHT" ),
        ),
        array(
            "CODE" => "DIMENSIONS",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_DIMENSIONS" ),
        ),
        array(
            "CODE" => "UTM_SOURCE",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_UTM_SOURCE" ),
            "REQUIRED" => 'Y',
            "TYPE" => "const",
            "CONTVALUE_TRUE" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_UTM_SOURCE_VALUE" )
        ),
        array(
            "CODE" => "UTM_MEDIUM",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_UTM_MEDIUM" ),
            "REQUIRED" => 'Y',
            "TYPE" => "const",
            "CONTVALUE_TRUE" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_UTM_MEDIUM_VALUE" )
        ),
        array(
            "CODE" => "UTM_TERM",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_UTM_TERM" ),
            "TYPE" => "field",
            "VALUE" => "ID",
        ),
        array(
            "CODE" => "UTM_CONTENT",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_UTM_CONTENT" ),
            "TYPE" => "field",
            "VALUE" => "ID",
        ),
        array(
            "CODE" => "UTM_CAMPAIGN",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_UTM_CAMPAIGN" ),
            "TYPE" => "field",
            "VALUE" => "IBLOCK_SECTION_ID",
        ),
        array(
            "CODE" => "PARAM1",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PARAM" ),
        ),
        array(
            "CODE" => "PARAM2",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PARAM" ),
        ),
        array(
            "CODE" => "PARAM3",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PARAM" ),
        ),
        array(
            "CODE" => "PARAM4",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PARAM" ),
        ),
        array(
            "CODE" => "PARAM5",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PARAM" ),
        ),
        array(
            "CODE" => "PARAM6",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PARAM" ),
        ),
        array(
            "CODE" => "PARAM7",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PARAM" ),
        ),
        array(
            "CODE" => "PARAM8",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PARAM" ),
        ),
        array(
            "CODE" => "PARAM9",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PARAM" ),
        ),
        array(
            "CODE" => "PARAM10",
            "NAME" => GetMessage( "ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PARAM" ),
        ),
    ),
    "FORMAT" => '<?xml version="1.0" encoding="#ENCODING#"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="#DATE#">
    <shop>
        <name>#SHOP_NAME#</name>
        <company>#COMPANY_NAME#</company>
        <url>#SITE_URL#</url>
        <currencies>#CURRENCY#</currencies>
        <categories>#CATEGORY#</categories>
        <offers>
            #ITEMS#
        </offers>
    </shop>
</yml_catalog>',
    
    "DATEFORMAT" => "Y-m-d_h:i",
);

$bCatalog = false;
if( CModule::IncludeModule( "catalog" ) ){
    $arBasePrice = CCatalogGroup::GetBaseGroup();
    $basePriceCode = "CATALOG-PRICE_".$arBasePrice["ID"];
    $basePriceCodeWithDiscount = "CATALOG-PRICE_".$arBasePrice["ID"]."_WD";
    $bCatalog = true;
    
    $profileTypes['ym_clothes']["FIELDS"][4] = array(
        "CODE" => "PRICE",
        "NAME" => GetMessage("ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_PRICE"),
        "REQUIRED" => "Y",
        "TYPE" => "field",
        "VALUE" => $basePriceCode,
    );
    
    $profileTypes['ym_clothes']["FIELDS"][5] = array(
        "CODE" => "OLDPRICE",
        "NAME" => GetMessage("ACRIT_EXPORTPRO_MARKET_CLOTHES_FIELD_OLDPRICE"),
        "TYPE" => "field",
        "VALUE" => $basePriceCodeWithDiscount,
    );
}

$profileTypes["ym_clothes"]["PORTAL_REQUIREMENTS"] = GetMessage( "ACRIT_EXPORTPRO_TYPE_MARKET_CLOTHES_PORTAL_REQUIREMENTS" );
$profileTypes["ym_clothes"]["EXAMPLE"] = GetMessage( "ACRIT_EXPORTPRO_TYPE_MARKET_CLOTHES_EXAMPLE" );

$profileTypes["ym_clothes"]["CURRENCIES"] =
    "<currency id='#CURRENCY#' rate='#RATE#' plus='#PLUS#'></currency>" . PHP_EOL;

$profileTypes["ym_clothes"]["SECTIONS"] =
    "<category id='#ID#'>#NAME#</category>" . PHP_EOL;

$profileTypes["ym_clothes"]["ITEMS_FORMAT"] = "
<offer id=\"#ID#\" type=\"vendor.model\" available=\"#AVAILABLE#\" bid=\"#BID#\">
    <url>#SITE_URL##URL#?utm_source=#UTM_SOURCE#&amp;utm_medium=#UTM_MEDIUM#&amp;utm_term=#UTM_TERM#&amp;utm_content=#UTM_CONTENT#&amp;utm_campaign=#UTM_CAMPAIGN#</url>
    <price>#PRICE#</price>
    <oldprice>#OLDPRICE#</oldprice>
    <currencyId>#CURRENCYID#</currencyId>
    <categoryId>#CATEGORYID#</categoryId>
    <market_category>#MARKET_CATEGORY#</market_category>
    <picture>#SITE_URL##PICTURE#</picture>
    <store>#STORE#</store>
    <pickup>#PICKUP#</pickup>
    <delivery>#DELIVERY#</delivery>
    <delivery-options> 
        <option cost=\"#LOCAL_DELIVERY_COST#\" days=\"#LOCAL_DELIVERY_DAYS#\"/> 
    </delivery-options>
    <typePrefix>#TYPEPREFIX#</typePrefix>
    <vendor>#VENDOR#</vendor>
    <vendorCode>#VENDORCODE#</vendorCode>
    <model>#MODEL#</model>
    <description>#DESCRIPTION#</description>
    <sales_notes>#SALES_NOTES#</sales_notes>
    <manufacturer_warranty>#MANUFACTURER_WARRANTY#</manufacturer_warranty>
    <country_of_origin>#COUNTRY_OF_ORIGIN#</country_of_origin>
    <downloadable>#DOWNLOADABLE#</downloadable>
    <adult>#ADULT#</adult>
    <age>#AGE#</age>
    <barcode>#BARCODE#</barcode>
    <cpa>#CPA#</cpa>
    <rec>#REC#</rec>
    <expiry>#EXPIRY#</expiry>
    <weight>#WEIGHT#</weight>
    <param name=\"\">#PARAM1#</param>
    <param name=\"\">#PARAM2#</param>
    <param name=\"\">#PARAM3#</param>
    <param name=\"\">#PARAM4#</param>
    <param name=\"\">#PARAM5#</param>
    <param name=\"\">#PARAM6#</param>
    <param name=\"\">#PARAM7#</param>
    <param name=\"\">#PARAM8#</param>
    <param name=\"\">#PARAM9#</param>
    <param name=\"\">#PARAM10#</param>
</offer>
";
    
$profileTypes["ym_clothes"]["LOCATION"] = array(
    "yandex" => array(
        "name" => GetMessage( "ACRIT_EXPORTPRO_ANDEKS" ),
        "sub" => array(
            "market" => array(
                "name" => GetMessage( "ACRIT_EXPORTPRO_VEBMASTER" ),
                "sub" => "",
            )
        )
    ),
);