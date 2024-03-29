<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*
*	Module "Company"
*	Author: Grebenkin Anton 
*	Contact e-mail: 4freework@gmail.com
*
---------------------------------------------------------
*/

/**
 * Автоподстановка тегов компании
 */

set_include_path(get_include_path().PATH_SEPARATOR.dirname(dirname(dirname(__FILE__))));
$sDirRoot=dirname(dirname(dirname(dirname(dirname(__FILE__)))));
require_once($sDirRoot."/config/config.ajax.php");

header('Content-Type: text/html; charset=utf-8');


if (!$sTag=getRequest('value',null,'post')) {
	exit();
}

if ($sTag!='') {
	$aTags=$oEngine->PluginCompany_Company_GetCompanyTagsByLike($sTag,10);
	foreach ($aTags as $oTag) {
		echo('<li>'.$oTag->getText().'</li>');
	}
}
?>