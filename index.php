<?php    
/*
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
    
   
    //set it to writable location, a place for temp generated PNG files
	$PNG_WEB_DIR = 'temp/ii/';
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.$PNG_WEB_DIR.DIRECTORY_SEPARATOR;
   // echo $PNG_TEMP_DIR;
    //html PNG location prefix
    

    include_once "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
    $errorCorrectionLevel = 'L';
    
    $matrixPointSize = 4;
    $data='123';
    if (isset($data)) { 
    
        //it's very important!
       
        // user data
        $filename = $PNG_TEMP_DIR.'test'.md5($data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2); 
        
    }
        
    //display generated file
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  
	
	
	$PNG_WEB_DIR = 'temp/tt/';
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.$PNG_WEB_DIR.DIRECTORY_SEPARATOR;
   // echo $PNG_TEMP_DIR;
    //html PNG location prefix
    

    include_once "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
    $errorCorrectionLevel = 'L';
    
    $matrixPointSize = 4;
    $data='123';
    if (isset($data)) { 
    
        //it's very important!
       
        // user data
        $filename = $PNG_TEMP_DIR.'test'.md5($data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);      
        
    }
        
    //display generated file
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>'; 
	
    
    