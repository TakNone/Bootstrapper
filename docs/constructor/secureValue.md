# secureValue

**Description** : *Secure value*

**Layer** : 211

```tl
secureValue#187fa0ca flags:# type:SecureValueType data:flags.0?SecureData front_side:flags.1?SecureFile reverse_side:flags.2?SecureFile selfie:flags.3?SecureFile translation:flags.6?Vector<SecureFile> files:flags.4?Vector<SecureFile> plain_data:flags.5?SecurePlainData hash:bytes = SecureValue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | Secure passport value type |
| **data** | [`flags.0?SecureData`](type/SecureData) | Encrypted Telegram Passport element data |
| **front_side** | [`flags.1?SecureFile`](type/SecureFile) | Encrypted passport file with the front side of the document |
| **reverse_side** | [`flags.2?SecureFile`](type/SecureFile) | Encrypted passport file with the reverse side of the document |
| **selfie** | [`flags.3?SecureFile`](type/SecureFile) | Encrypted passport file with a selfie of the user holding the document |
| **translation** | [`flags.6?Vector<SecureFile>`](type/SecureFile) | Array of encrypted passport files with translated versions of the provided documents |
| **files** | [`flags.4?Vector<SecureFile>`](type/SecureFile) | Array of encrypted passport files with photos the of the documents |
| **plain_data** | [`flags.5?SecurePlainData`](type/SecurePlainData) | Plaintext verified passport data |
| <mark>hash</mark> | [`bytes`](type/bytes) | Data hash |

---

## Type

[SecureValue](type/SecureValue)

---

## Example

```php
$secureValue = $client->secureValue(
	type : $client->secureValueTypePersonalDetails(),
	data : $client->secureData(
		data : '?Hf?LiveProto1??',
		data_hash : '?j??LiveProto??' . "\0" . '$',
		secret : 'י?LiveProto????',
	),
	front_side : $client->secureFileEmpty(),
	reverse_side : $client->secureFileEmpty(),
	selfie : $client->secureFileEmpty(),
	translation : array(
		$client->secureFileEmpty(),
		$client->secureFile(
			id : -6226320567385297680,
			access_hash : -9169230653855627808,
			size : -7234764473329415737,
			dc_id : 98,
			date : 11,
			file_hash : '??I?lLiveProto??r?',
			secret : '/????LiveProtoDF{c?',
		),
	),
	files : array(
		$client->secureFileEmpty(),
		$client->secureFile(
			id : -2754633371281672963,
			access_hash : -7068039022100541744,
			size : 8938002812813859773,
			dc_id : 34,
			date : 40,
			file_hash : '
̱??LiveProto:?C??',
			secret : '~???rLiveProto;i_*{',
		),
	),
	plain_data : $client->securePlainPhone(
		phone : '+1234567890',
	),
	hash : '??|bLiveProto?zl^?',
);
```