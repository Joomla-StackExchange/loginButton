<?php
/**
 * loginbutton module
 *
 * @author      Johan Wagenheim
 * @version     1.0.0
 * @license     Licensed under the MIT license: http://www.opensource.org/licenses/mit-license.php
 */

defined('_JEXEC') or die;

$logintext  = htmlspecialchars($params->get('logintext', 'Log in'));
$logouttext = htmlspecialchars($params->get('logouttext', 'Log out'));
$linkclass  = htmlspecialchars($params->get('linkclass', ''));
$linkclass  = isset($linkclass) ? ' class="' . $linkclass . '"' : '';

$user = JFactory::getUser();
$userToken = JSession::getFormToken();

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_loginbutton', $params->get('layout', 'default'));
