# inputSecureValue

**Description** : *Secure value, for more info see the passport docs &raquo;*

**Layer** : 211

```tl
inputSecureValue#db21d0a7 flags:# type:SecureValueType data:flags.0?SecureData front_side:flags.1?InputSecureFile reverse_side:flags.2?InputSecureFile selfie:flags.3?InputSecureFile translation:flags.6?Vector<InputSecureFile> files:flags.4?Vector<InputSecureFile> plain_data:flags.5?SecurePlainData = InputSecureValue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | Secure passport value type |
| **data** | [`flags.0?SecureData`](type/SecureData) | Encrypted Telegram Passport element data |
| **front_side** | [`flags.1?InputSecureFile`](type/InputSecureFile) | Encrypted passport file with the front side of the document |
| **reverse_side** | [`flags.2?InputSecureFile`](type/InputSecureFile) | Encrypted passport file with the reverse side of the document |
| **selfie** | [`flags.3?InputSecureFile`](type/InputSecureFile) | Encrypted passport file with a selfie of the user holding the document |
| **translation** | [`flags.6?Vector<InputSecureFile>`](type/InputSecureFile) | Array of encrypted passport files with translated versions of the provided documents |
| **files** | [`flags.4?Vector<InputSecureFile>`](type/InputSecureFile) | Array of encrypted passport files with photos the of the documents |
| **plain_data** | [`flags.5?SecurePlainData`](type/SecurePlainData) | Plaintext verified passport data |

---

## Type

[InputSecureValue](type/InputSecureValue)

---

## Example

```php
$inputSecureValue = $client->inputSecureValue(
	type : $client->secureValueTypePersonalDetails(),
	data : $client->secureData(
		data : '???j?LiveProto?i???',
		data_hash : '9?6nLiveProtokh??k',
		secret : '??՜LiveProto^?j',
	),
	front_side : $client->inputSecureFileUploaded(
		id : 3679770107296884515,
		parts : 21,
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
		file_hash : '4Z?LiveProto???P?',
		secret : '݄r??LiveProtoE??',
	),
	reverse_side : $client->inputSecureFileUploaded(
		id : 3480804008991875229,
		parts : 45,
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
		file_hash : '\'?.?QLiveProto???RB',
		secret : '??LiveProto?ܑ?',
	),
	selfie : $client->inputSecureFileUploaded(
		id : -3801354610363035396,
		parts : 14,
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
		file_hash : '?@??LiveProto???j',
		secret : '?#??LiveProto9?{?3',
	),
	translation : array(
		$client->inputSecureFileUploaded(
			id : -6445233328326594638,
			parts : 74,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : '?1???LiveProto??' . "\0" . '',
			secret : '???WLiveProto0?36t',
		),
		$client->inputSecureFile(
			id : -3893165589834604925,
			access_hash : 245676664479325254,
		),
	),
	files : array(
		$client->inputSecureFileUploaded(
			id : -8022439234208402408,
			parts : 25,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : '+.?LiveProto??Dէ',
			secret : '??G?MLiveProtoWc?',
		),
		$client->inputSecureFile(
			id : -6286857382418005312,
			access_hash : -545104832426505672,
		),
	),
	plain_data : $client->securePlainPhone(
		phone : '+1234567890',
	),
);
```