# account.saveSecureValue

**Description** : *Securely save Telegram Passport document, for more info see the passport docs &raquo;*

**Layer** : 222

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
			id : 4794232598788821769,
			parts : 84,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		reverse_side : $client->inputSecureFileUploaded(
			id : 3048566085944906177,
			parts : 87,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		selfie : $client->inputSecureFileUploaded(
			id : 7300337784491888066,
			parts : 54,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		translation : array(
			$client->inputSecureFileUploaded(
				id : -1052876020562016012,
				parts : 53,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->inputSecureFile(
				id : 1405687072689611504,
				access_hash : -7492372433403119830,
			),
		),
		files : array(
			$client->inputSecureFileUploaded(
				id : -7852059541024057859,
				parts : 61,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->inputSecureFile(
				id : -3084529311545659568,
				access_hash : 2095240280940164053,
			),
		),
		plain_data : $client->securePlainPhone(
			phone : '+1234567890',
		),
	),
	secure_secret_id : -1037330315960400796,
);
```