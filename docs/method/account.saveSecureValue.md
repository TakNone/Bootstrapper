# account.saveSecureValue

**Description** : *Securely save Telegram Passport document, for more info see the passport docs &raquo;*

**Layer** : 218

```tl
account.saveSecureValue#899fe31d value:InputSecureValue secure_secret_id:long = SecureValue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>value</mark> | [`InputSecureValue`](type/InputSecureValue) | Secure value, for more info see the passport docs » |
| <mark>secure_secret_id</mark> | [`long`](type/long) | Passport secret hash, for more info see the passport docs » |

---

## Result

[SecureValue](type/SecureValue)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PASSWORD_REQUIRED** | `400` | A 2FA password must be configured to use Telegram Passport |
| **SECURE_SECRET_REQUIRED** | `400` | A secure secret is required |

---

## Example

```php
$secureValue = $client->account->saveSecureValue(
	value : $client->inputSecureValue(
		type : $client->secureValueTypePersonalDetails(),
		data : $client->secureData(
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			data_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		front_side : $client->inputSecureFileUploaded(
			id : 6211987172455122672,
			parts : 75,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		reverse_side : $client->inputSecureFileUploaded(
			id : 8887054552513241772,
			parts : 53,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		selfie : $client->inputSecureFileUploaded(
			id : 3734935058319540913,
			parts : 23,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		translation : array(
			$client->inputSecureFileUploaded(
				id : 1438049625117186340,
				parts : 10,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->inputSecureFile(
				id : -3315197584386516118,
				access_hash : 3872716639511418278,
			),
		),
		files : array(
			$client->inputSecureFileUploaded(
				id : -992210505204733631,
				parts : 59,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->inputSecureFile(
				id : 173248953352807533,
				access_hash : -6070501910038700651,
			),
		),
		plain_data : $client->securePlainPhone(
			phone : '+1234567890',
		),
	),
	secure_secret_id : 6832248532399476,
);
```