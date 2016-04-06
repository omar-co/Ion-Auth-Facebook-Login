<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Settings.
| -------------------------------------------------------------------------
*/
$config['app_id'] 		= '198563330509274'; 		// Your app id
$config['app_secret'] 	= '5c605bb5acb90f8fc9a2f6e084a77aa1'; 		// Your app secret key
$config['scope'] 		= 'email'; 	// custom permissions check - http://developers.facebook.com/docs/reference/login/#permissions
$config['redirect_uri'] = base_url() . 'facebook'; 		// url to redirect back from facebook. If set to '', site_url('') will be used