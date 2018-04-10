<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"catalog", 
	array(
		"IBLOCK_TYPE" => "aspro_stroy_catalog",
		"IBLOCK_ID" => "#IBLOCK_CATALOG_ID#",
		"NEWS_COUNT" => "6",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "#SITE_DIR#catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "TYPE_BUILDINGS",
			1 => "FORM_QUESTION",
			2 => "FORM_ORDER",
			3 => "SHOW_ON_INDEX_PAGE",
			4 => "PRICE",
			5 => "PRICEOLD",
			6 => "FILTER_PRICE",
			7 => "ARTICLE",
			8 => "SIZE",
			9 => "TYPE",
			10 => "COLOR",
			11 => "SIZE_ZHILAYA",
			12 => "SIZE_KUXNI",
			13 => "LINK_PROJECTS",
			14 => "GARAGE",
			15 => "SLEEP_ROOM",
			16 => "APPOINTMENT",
			17 => "STIKERS",
			18 => "TIZERS",
			19 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"SORT_PROP" => array(
			0 => "FILTER_PRICE",
			1 => "SIZE",
		),
		"SORT_PROP_DEFAULT" => "FILTER_PRICE",
		"SORT_DIRECTION" => "asc",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "FORM_QUESTION",
			1 => "FORM_ORDER",
			2 => "PRICE",
			3 => "PRICEOLD",
			4 => "STATUS",
			5 => "ARTICLE",
			6 => "SIZE",
			7 => "TYPE",
			8 => "COLOR",
			9 => "SIZE_ZHILAYA",
			10 => "SIZE_KUXNI",
			11 => "LINK_PROJECTS",
			12 => "GARAGE",
			13 => "SLEEP_ROOM",
			14 => "APPOINTMENT",
			15 => "STIKERS",
			16 => "BRAND",
			17 => "DOCUMENTS",
			18 => "PLANIROVKA",
			19 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"VIEW_TYPE" => "table",
		"SHOW_IMAGE" => "Y",
		"SHOW_NAME" => "Y",
		"SHOW_DETAIL" => "Y",
		"IMAGE_POSITION" => "top",
		"COUNT_IN_LINE" => "3",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_REVIEW" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"USE_SHARE" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_PRODUCT" => "Заказать расчет стоимости",
		"T_GALLERY" => "",
		"T_DOCS" => "",
		"T_PROJECTS" => "",
		"T_CHARACTERISTICS" => "",
		"FILTER_URL_TEMPLATE" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		"COMPONENT_TEMPLATE" => "catalog",
		"SET_LAST_MODIFIED" => "N",
		"T_VIDEO" => "",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"FILTER_NAME" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "FILTER_PRICE",
			1 => "SIZE",
			2 => "COLOR",
			3 => "SIZE_ZHILAYA",
			4 => "SIZE_KUXNI",
			5 => "GARAGE",
			6 => "SLEEP_ROOM",
			7 => "APPOINTMENT",
			8 => "",
		),
		"PROP_1" => "SIZE",
		"PROP_2" => "FILTER_PRICE",
		"PROP_3" => "TYPE_BUILDINGS",
		"S_DETAIL_PRODUCT" => "Подробнее",
		"DETAIL_BRAND_USE" => "Y",
		"DETAIL_BRAND_PROP_CODE" => array(
			0 => "TIZERS",
			1 => "",
		),
		"T_PLANS" => "",
		"SHOW_SLIDE_PROP" => array(
			0 => "COLOR",
			1 => "SIZE_ZHILAYA",
			2 => "GARAGE",
			3 => "SLEEP_ROOM",
		),
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>