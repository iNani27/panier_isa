<?php
/* Mon panier V1 */
/* Valeurs par défaut si non remplies */

include_once('config.php');

/* Si une des variables est vide dans le config.php on applique les valeurs ci-dessous */
if (!$config['currencyCode']) $config['currencyCode']                     = 'USD';
if (!$config['text']['cartTitle']) $config['text']['cartTitle']           = 'Shopping Cart';
if (!$config['text']['singleItem']) $config['text']['singleItem']         = 'Item';
if (!$config['text']['multipleItems']) $config['text']['multipleItems']   = 'Items';
if (!$config['text']['subtotal']) $config['text']['subtotal']             = 'Subtotal';
if (!$config['text']['update']) $config['text']['update']                 = 'update';
if (!$config['text']['checkout']) $config['text']['checkout']             = 'checkout';
if (!$config['text']['checkoutPaypal']) $config['text']['checkoutPaypal'] = 'Checkout with PayPal';
if (!$config['text']['removeLink']) $config['text']['removeLink']         = 'remove';
if (!$config['text']['emptyButton']) $config['text']['emptyButton']       = 'empty';
if (!$config['text']['emptyMessage']) $config['text']['emptyMessage']     = 'Your cart is empty!';
if (!$config['text']['itemAdded']) $config['text']['itemAdded']           = 'Item added!';
if (!$config['text']['priceError']) $config['text']['priceError']         = 'Invalid price format!';
if (!$config['text']['quantityError']) $config['text']['quantityError']   = 'Item quantities must be whole numbers!';
if (!$config['text']['checkoutError']) $config['text']['checkoutError']   = 'Your order could not be processed!';

/* Correction : En plus de vérifier si la var (nommée : ajax) est vrai ::: il faut rajouter, si elle existe d'abord !*/
if (isset($_GET['ajax'])&& $_GET['ajax'] == 'true') {
	header('Content-type: application/json; charset=utf-8');
	echo json_encode($config);
}
?>