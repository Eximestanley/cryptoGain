include('Crypt/RSA.php');
$plain_text = '1234567';
$api_key = 'Y0VORGMzQnJaRzFOTTFFOSBPREJZU21wTVgxOXBSa3BWUldaMGVsQjJhRUZNWnowOQ==
';
$api_key = base64_decode($api_key);
$rsa = new Crypt_RSA();
$rsa->setPublicKey($api_key, CRYPT_RSA_PUBLIC_FORMAT_PKCS1);
$rsa->loadKey($rsa->getPublicKey(), CRYPT_RSA_PUBLIC_FORMAT_PKCS1);
$rsa->setEncryptionMode(CRYPT_RSA_ENCRYPTION_NONE);
$encrypt_text = base64_decode($rsa->encrypt($plain_text));
$decrypt_text = rsa->decrypt(base64_decode($encrypt_text));