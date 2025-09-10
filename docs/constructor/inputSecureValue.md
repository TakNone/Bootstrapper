# inputSecureValue

**Description** : *Secure value, for more info see the passport docs &raquo;*

**Layer** : 214

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
		data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		data_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	front_side : $client->inputSecureFileUploaded(
		id : 2207057314879574480,
		parts : 80,
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
		file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	reverse_side : $client->inputSecureFileUploaded(
		id : 3604517806160890731,
		parts : 96,
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
		file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	selfie : $client->inputSecureFileUploaded(
		id : -5648738532974748168,
		parts : 14,
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
		file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	translation : array(
		$client->inputSecureFileUploaded(
			id : -7132078657421434608,
			parts : 56,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->inputSecureFile(
			id : 5304965321150850425,
			access_hash : -1534786505256276089,
		),
	),
	files : array(
		$client->inputSecureFileUploaded(
			id : -3264512488998047716,
			parts : 86,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->inputSecureFile(
			id : -5430998482944278525,
			access_hash : -8454020586752711455,
		),
	),
	plain_data : $client->securePlainPhone(
		phone : '+1234567890',
	),
);
```