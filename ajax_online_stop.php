<?
// ===================================================================
// Sim Roulette -> AJAX
// License: GPL v3 (http://www.gnu.org/licenses/gpl.html)
// Copyright (c) 2016-2020 Xzero Systems, http://sim-roulette.com
// Author: Nikita Zabelin
// ===================================================================

include("_func.php");
$s='';
mysqli_query($db, "DELETE FROM `modems` WHERE `device`=".(int)$_GET['device']);
file_put_contents('flags/stop_'.(int)$_GET['device'],'1');
unlink('flags/cron_'.(int)$_GET['device']);
echo 'Процесс остановлен!';
?>