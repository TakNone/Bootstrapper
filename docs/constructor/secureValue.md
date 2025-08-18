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
		data : 'qU???LiveProto??o?',
		data_hash : 'w(?H?LiveProto?կ|?',
		secret : '?{?DLiveProtoB5y:?',
	),
	front_side : $client->secureFileEmpty(),
	reverse_side : $client->secureFileEmpty(),
	selfie : $client->secureFileEmpty(),
	translation : array(
		$client->secureFileEmpty(),
		$client->secureFile(
			id : -5364292579559702407,
			access_hash : 7396558606995076521,
			size : 252967680965552832,
			dc_id : 50,
			date : 79,
			file_hash : '??*JLiveProtoL?>?',
			secret : '?#??LiveProto?8?5',
		),
	),
	files : array(
		$client->secureFileEmpty(),
		$client->secureFile(
			id : -8724857185174331868,
			access_hash : 1055593144674208032,
			size : -175138369084645436,
			dc_id : 78,
			date : 19,
			file_hash : 'j?2>?LiveProto=D??',
			secret : '~?O\'?LiveProto??I?u',
		),
	),
	plain_data : $client->securePlainPhone(
		phone : '+1234567890',
	),
	hash : 'ʞ^bLiveProto<?\'??',
);
```