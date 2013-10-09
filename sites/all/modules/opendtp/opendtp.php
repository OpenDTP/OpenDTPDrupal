<?php

/**
 * @file
 * Provides the OpenDTP PHP API.
 */

/**
 * The OpenDTP PHP API.
 *
 * @package    OpenDTP
 * @author     Gaetan Gueraud / Florian Roze
 * @version    0.1
 * @access     public
 * @license    GPL (http://www.opensource.org/licenses/gpl-2.0.php)
 */
class opendtp
{
  public $key = NULL;
  public $api_url = 'http://ironman.opendtp.net/index';
  /**
   * Creates a new interface to the API
   *
   * @param $key
   *   (optional) The API key to use.
   * @param $api_url
   *   (optional) The prefix URL to use when calling the OpenDTP API.
   */
   
  function __construct($key = NULL, $api_url = 'http://ironman.opendtp.net/index')
  {
    $this->key = $key;
    $this->api_url = $api_url;
  }

  /**
   * Call API functions via $opendtp->somecommand();
   */
  function __call($cmd, array $args = array())
  {
    return $this->call($cmd, $args);
  }
   function call($cmd, array $args = array()) {
    // Construct the arguments.
    if (!isset($args['key'])) {
      $args['key'] = $this->key;
    }
    if (!isset($arguments['cmd'])) {
      $args['cmd'] = $cmd;
    }
    $arguments = 'format=json';
    foreach ($args as $name => $value)
	{
      $arguments .= '&' . $name . '=' . urlencode($value);
    }

    $ch = curl_init($this->api_url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arguments);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $result = curl_exec($ch);
    if (!$result) {
			$error = curl_error($ch);
			$errno = curl_errno($ch);
			curl_close($ch);
			throw new Exception($error, $errno);
    }
		curl_close($ch);
    $data = json_decode($result);
	var_dump($result);
   /* if (!$data) {
      throw new Exception('Unserialization error on: '. $data);
    }
    if ($data['result'] === 'error') {
      throw new Exception($data['data']);
    }*/
   // return $data['data'];
  }
 } 
