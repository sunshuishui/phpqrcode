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
    
   function getEWM($data,$cityId){
   		if($cityId==1){
			$file_='exposh';
		}
    //set it to writable location, a place for temp generated PNG files
		$PNG_TEMP_DIR = '/home/admin/subdomains/wap/phpqrcode/temp/'.$file_.'/';
		//echo $PNG_TEMP_DIR;
	   // echo $PNG_TEMP_DIR;
		//html PNG location prefix
		//$PNG_WEB_DIR = 'http://wap.591wed.com/wx/zhuli/';
	
		include "qrlib.php";    
		
		//ofcourse we need rights to create temp dir
		if (!file_exists($PNG_TEMP_DIR))
			mkdir($PNG_TEMP_DIR);
		
		
		$filename = $PNG_TEMP_DIR.'test.png';
		
		//processing form input
		//remember to sanitize user input in real-life solution !!!
		$errorCorrectionLevel = 'L';
	   
		$matrixPointSize = 10;
	   
			
		if (isset($data)) { 
		
			//it's very important!
			if (trim($data) == '')
				die('data cannot be empty! <a href="?">back</a>');
				
			// user data
			$filename = $PNG_TEMP_DIR.'expo'.md5($data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
			QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
			
		}
			
    //display generated file
  
    }
	function getEWM_Temp($data,$cityId){
   		
    //set it to writable location, a place for temp generated PNG files
		$PNG_TEMP_DIR = '/home/admin/subdomains/wap/phpqrcode/temp/path/';
		//echo $PNG_TEMP_DIR;
	   // echo $PNG_TEMP_DIR;
		//html PNG location prefix
		//$PNG_WEB_DIR = 'http://wap.591wed.com/wx/zhuli/';
	
		include "qrlib.php";    
		
		//ofcourse we need rights to create temp dir
		if (!file_exists($PNG_TEMP_DIR))
			mkdir($PNG_TEMP_DIR);
		
		
		$filename = $PNG_TEMP_DIR.'test.png';
		
		//processing form input
		//remember to sanitize user input in real-life solution !!!
		$errorCorrectionLevel = 'L';
	   
		$matrixPointSize = 10;
	   
			
		if (isset($data)) { 
		
			//it's very important!
			if (trim($data) == '')
				die('data cannot be empty! <a href="?">back</a>');
				
			// user data
			
				//$src='407111111'.$data_[1].'';
				$data_='http://wap.591wed.com/m/list.html&src=407&item='.$data;
				//$data='http://wap.591wed.com/m/list.html&src=407111111324143';
			if($cityId==1){
				$f_='sh';
			}
			$filename = $PNG_TEMP_DIR.'expo'.md5($f_.$data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
			QRcode::png($data_, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
			
		}
			
    //display generated file
  
    }
    