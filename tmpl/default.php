<?php
/**
 * loginbutton module
 *
 * @author      Johan Wagenheim
 * @version     1.0.0
 * @license     Licensed under the MIT license: http://www.opensource.org/licenses/mit-license.php
 */

defined('_JEXEC') or die;
?>

<?php if ($user->guest) : ?>
        <a href="index.php?option=com_users&view=login"<?php echo $linkclass ?>><?php echo $logintext; ?></a>
<?php else: ?>
        <a href="index.php?option=com_users&task=user.logout&<?php echo $userToken; ?>=1"<?php echo $linkclass ?>><?php echo $logouttext; ?></a>
<?php endif; ?>
