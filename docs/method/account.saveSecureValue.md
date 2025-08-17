# account.saveSecureValue

**Description** : *Securely save Telegram Passport document, for more info see the passport docs »*

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
			data : '?|?<TLiveProto????a',
			data_hash : '????LiveProto?K??u',
			secret : '????LiveProto?ca?',
		),
		front_side : $client->inputSecureFileUploaded(
			id : 6957680266741659058,
			parts : 98,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : 'u ??LiveProtos???',
			secret : 'A{5f?LiveProtox	?A',
		),
		reverse_side : $client->inputSecureFileUploaded(
			id : -1511664965140399293,
			parts : 7,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : '?P\'?LiveProto?E̫|',
			secret : '4:?$LiveProtol?' . "\0" . 'T\\',
		),
		selfie : $client->inputSecureFileUploaded(
			id : 5961738351657258317,
			parts : 27,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : ' ??LiveProtoٚ?9?',
			secret : 'kʈpLiveProtoP??',
		),
		translation : array(
			$client->inputSecureFileUploaded(
				id : 6413290551873201437,
				parts : 88,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : 'p^V?LiveProto.?',
				secret : 'H{2?LiveProto?C3',
			),
			$client->inputSecureFile(
				id : -5217993174345136875,
				access_hash : -1914550666879031347,
			),
		),
		files : array(
			$client->inputSecureFileUploaded(
				id : 8629400690247115294,
				parts : 20,
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
				file_hash : 'k`tLiveProto ????',
				secret : '@?z??LiveProto#???',
			),
			$client->inputSecureFile(
				id : 878327284421375735,
				access_hash : 3027644009867110237,
			),
		),
		plain_data : $client->securePlainPhone(
			phone : '+1234567890',
		),
	),
	secure_secret_id : 4476241883582378944,
);
```