<?php
  // !!! Remember to use hex2bin() function for Secret Key and Secret Key must be 32 bytes long exactly !!!
  function encryptData($data, $secretKey) {
    $key = hex2bin($secretKey);
    $iv = random_bytes(16);

    $encryptedData = openssl_encrypt(
      $data,
      'AES-256-CBC',
      $key,
      OPENSSL_RAW_DATA,
      $iv
    );

    return rtrim(strtr(base64_encode($iv . $encryptedData), '+/', '-_'), '=');
  }

  function decryptData($encryptedData, $secretKey) {
    $cipher = "AES-256-CBC";
    $urlSafeData = strtr($encryptedData, '-_', '+/'); 

    $padding = strlen($urlSafeData) % 4;
    if ($padding) {
      $urlSafeData .= str_repeat('=', 4 - $padding);
    }

    $decodedData = base64_decode($urlSafeData);

    if ($decodedData === false || strlen($decodedData) < 17) {
      return false;
    }

    $iv = substr($decodedData, 0, 16);
    $cipherText = substr($decodedData, 16);

    $decryptedData = openssl_decrypt($cipherText, $cipher, $secretKey, OPENSSL_RAW_DATA, $iv);

    return $decryptedData;
  }
?>
