# account.saveSecureValue

**Description** : *Securely save Telegram Passport document, for more info see the passport docs &raquo;*

**Layer** : 211

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
			data : '-?lSLiveProto?|߃',
			data_hash : '?y?g$LiveProto?nƪ',
			secret : '[a<?PLiveProto?oww',
		),
		front_side : $client->inputSecureFileUploaded(
			id : 8374006829579932108,
			parts : 55,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : '?L1LiveProtoY??',
			secret : 'G6?{?LiveProtoء?\'?',
		),
		reverse_side : $client->inputSecureFileUploaded(
			id : 7363571406099617564,
			parts : 77,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : '????eLiveProtoǅ)?P',
			secret : '(?4' . "\0" . 'LiveProto
@?',
		),
		selfie : $client->inputSecureFileUploaded(
			id : 4091956289245762343,
			parts : 41,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : '?
2s?LiveProto?6?&?',
			secret : '??<??LiveProtoc=,Lo',
		),
		translation : array(
			$client->inputSecureFileUploaded(
				id : 5601436146483660668,
				parts : 38,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : '?6KD?LiveProto??\'?',
				secret : '?????LiveProtocd??`',
			),
			$client->inputSecureFile(
				id : -4003558432214607447,
				access_hash : 4415266239679104107,
			),
		),
		files : array(
			$client->inputSecureFileUploaded(
				id : 1694531684693057455,
				parts : 16,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : 'Ͽ??LiveProto?f1?',
				secret : 'E??ZLiveProto=?a?',
			),
			$client->inputSecureFile(
				id : -2210470766219388736,
				access_hash : -1385983878335564573,
			),
		),
		plain_data : $client->securePlainPhone(
			phone : '+1234567890',
		),
	),
	secure_secret_id : -4326395588646342023,
);
```