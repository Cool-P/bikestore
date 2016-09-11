<?php
/**
 * @package sketch
 * @author Willem Dumee
 * @version 0.1
 */

// hook up with a live demo shop
define ( 'SHOP_ID', '603488');
define ( 'INDEX_PAGE', 'http://chain-guide.shoplightspeed.com/us/' );
define ( 'COLLECTION_PAGE', INDEX_PAGE . 'collection/' );
define ( 'SHOP_PAGE', INDEX_PAGE . 'shop/' );
define ( 'CATALOG_PAGE', INDEX_PAGE . 'catalog/' );
define ( 'CART_PAGE', INDEX_PAGE . 'cart/' );
define ( 'SERVICE_PAGE', INDEX_PAGE . 'service/about/' );
define ( 'PRODUCT_PAGE', INDEX_PAGE . 'pista-zenzo.html' );
define ( 'BRANDS_PAGE', INDEX_PAGE . 'brands/' );
define ( 'TAGS_PAGE', INDEX_PAGE . 'tags/' );
define ( 'TEXTPAGE_PAGE', 'http://sketch.webshopapp.com/nl/service/mysketchpage/' );

// the base url from where your website is visible in the browser
define( 'BASE_URL', 'http://localhost:8888/seoshop-bikestore/' );

// you can leave the rest 'as is' when not changing the directory structure
define( 'ASSET_URL', BASE_URL . 'assets/' );
define( 'IMAGE_URL', ASSET_URL . 'images/' );
define( 'CSS_URL', ASSET_URL . 'css/' );//cunstom code by alexander
define( 'JS_URL', ASSET_URL . 'js/' );

define ( 'BASE_PATH', dirname( __FILE__ ) );
define ( 'TEMPLATE_PATH', BASE_PATH . '/templates' );
define ( 'ASSET_PATH', BASE_PATH . '/assets' );
