<?php
require_once 'google.php'; // Include Class File
session_start(); //Start the session
$google = new GoogleClient(); //Create GoogleClient Object

$google->initDriveService();
/**
 *  Get the list of files or folders or both from given folder or root
 *  @param string $search complete or partial name of file or folder to search
 *  @param string $parentId parent folder id or root from which the list of files or folders or both will be generated
 *  @param string $type='all' file or folder (files,folders or all)
 *  @return array list of files or folders or both from given parent directory
 */

$search = '';
$parentId = '1znA_9QuxYdVMD1FVPp-xPfirbBJRW-Dm';
$list = listFilesFolders($search,$parentId,$type='all');

var_dump($list);

?>
