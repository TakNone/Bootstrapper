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
			id : 7384438214329804088,
			parts : 26,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		reverse_side : $client->inputSecureFileUploaded(
			id : -8498551556921200752,
			parts : 22,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		selfie : $client->inputSecureFileUploaded(
			id : 3922836048223763323,
			parts : 83,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		translation : array(
			$client->inputSecureFileUploaded(
				id : -3736319211985510334,
				parts : 51,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->inputSecureFile(
				id : 4853219891885553182,
				access_hash : -4139761959389063651,
			),
		),
		files : array(
			$client->inputSecureFileUploaded(
				id : 6446458788971922930,
				parts : 58,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->inputSecureFile(
				id : -5525799625736090558,
				access_hash : 7464474265123634027,
			),
		),
		plain_data : $client->securePlainPhone(
			phone : '+1234567890',
		),
	),
	secure_secret_id : -30012071459269661,
);
```