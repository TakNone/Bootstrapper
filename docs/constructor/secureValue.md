# secureValue

**Description** : *Secure value*

**Layer** : 227

```tl
secureValue#187fa0ca flags:# type:SecureValueType data:flags.0?SecureData front_side:flags.1?SecureFile reverse_side:flags.2?SecureFile selfie:flags.3?SecureFile translation:flags.6?Vector<SecureFile> files:flags.4?Vector<SecureFile> plain_data:flags.5?SecurePlainData hash:bytes = SecureValue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		data_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	front_side : $client->secureFileEmpty(),
	reverse_side : $client->secureFileEmpty(),
	selfie : $client->secureFileEmpty(),
	translation : array(
		$client->secureFileEmpty(),
		$client->secureFile(
			id : -768083809089154954,
			access_hash : 1548261238648601253,
			size : -5232820563790387788,
			dc_id : 76,
			date : 90,
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	files : array(
		$client->secureFileEmpty(),
		$client->secureFile(
			id : 8386894780921402092,
			access_hash : 4511637107946723541,
			size : 7577354665305977302,
			dc_id : 46,
			date : 3,
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	plain_data : $client->securePlainPhone(
		phone : '+1234567890',
	),
	hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```