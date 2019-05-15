<?php
/***************************************************************************************
								Using Class DetectBasicInfoComputerWin
***************************************************************************************/
ini_set("xdebug.overload_var_dump",1); // to hide path of script with var_dump
require('detectBasicInfoComputerWin.php');

$bInfoComptWin = new DetectBasicInfoComputerWin();

echo '<center><h1>View basic information about your computer OS Windows With PHP</h1></center>';


echo '<b>Information About Operating System</b><hr>';
  var_dump(trim($bInfoComptWin->osystem()));
  
echo '<b>Information About CPU</b><hr>';
  var_dump(trim($bInfoComptWin->getCpuInfo()));
  
echo '<b>Information About RAM  Max Capacity</b><hr>';
  var_dump(trim($bInfoComptWin->getRamMaxCap()));
  
echo '<b>Information About Physical Drives</b><hr>';
  var_dump(trim($bInfoComptWin->getPhysDriv()));
  
echo '<b>Information About graphics card</b><hr>';
  var_dump(trim($bInfoComptWin->getCard()));
  
echo '<b>Information About BIOS</b><hr>';
  var_dump(trim($bInfoComptWin->getBios()));
  
echo '<b>Information About Printer list status</b><hr>';
  var_dump(trim($bInfoComptWin->getPrinterList()));
  
echo '<b>Information About the Network card</b><hr>';
  var_dump(trim($bInfoComptWin->getNetworkCard()));