<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */
define('__THEMEDIR__', ossn_route()->themes . 'facebook/');
ossn_new_css('ossn.default', 'themes/facebook/style/default');
ossn_new_css('ossn.admin.default', 'themes/facebook/style/administrator');

ossn_load_css('ossn.default');
ossn_load_css('ossn.admin.default', 'admin');
