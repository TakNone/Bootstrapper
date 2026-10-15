# account.saveSecureValue

**Description** : *Securely save Telegram Passport document, for more info see the passport docs &raquo;*

**Layer** : 229

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
			id : -8700384050225763243,
			parts : 15,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		reverse_side : $client->inputSecureFileUploaded(
			id : 7206633608348550387,
			parts : 38,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		selfie : $client->inputSecureFileUploaded(
			id : -4365086025223824137,
			parts : 63,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		translation : array(
			$client->inputSecureFileUploaded(
				id : 3965920886715135678,
				parts : 99,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->inputSecureFile(
				id : 627868337537087253,
				access_hash : -5118372740040277451,
			),
		),
		files : array(
			$client->inputSecureFileUploaded(
				id : 8645357087680039977,
				parts : 85,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->inputSecureFile(
				id : -5222242052508143224,
				access_hash : 4113973699611833756,
			),
		),
		plain_data : $client->securePlainPhone(
			phone : '+1234567890',
		),
	),
	secure_secret_id : 1589297382573286137,
);
```