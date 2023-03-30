<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CleanExcel extends CI_Model {
	public function cleanCasing($region)
	{   $region_withoutspaces = preg_replace('/\s+/', '', $region); 
        $stringlength = strlen($region_withoutspaces);
        $firstletter = substr($region_withoutspaces,-$stringlength,-($stringlength-1));
        $firstletter_in_caps = strtoupper($firstletter);
        $trailingletters = substr($region_withoutspaces,-($stringlength-1));
        $trailingletters_in_low = strtolower($trailingletters);
        $cleanedvalue = "$firstletter_in_caps" . "$trailingletters_in_low";
        return $cleanedvalue;
    }
}