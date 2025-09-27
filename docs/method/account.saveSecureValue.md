# account.saveSecureValue

**Description** : *Securely save Telegram Passport document, for more info see the passport docs &raquo;*

**Layer** : 214

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
			id : 1913512887543927075,
			parts : 47,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		reverse_side : $client->inputSecureFileUploaded(
			id : -6806684544970365262,
			parts : 35,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		selfie : $client->inputSecureFileUploaded(
			id : -4408589350907124714,
			parts : 54,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		translation : array(
			$client->inputSecureFileUploaded(
				id : -2582564715877301151,
				parts : 54,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->inputSecureFile(
				id : -8743877771948594063,
				access_hash : -2198014956032520264,
			),
		),
		files : array(
			$client->inputSecureFileUploaded(
				id : 8362586754710334462,
				parts : 77,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->inputSecureFile(
				id : -272812487531079407,
				access_hash : 7536110903200300339,
			),
		),
		plain_data : $client->securePlainPhone(
			phone : '+1234567890',
		),
	),
	secure_secret_id : -3883202583494824989,
);
```