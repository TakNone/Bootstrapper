# inputSecureValue

**Description** : *Secure value, for more info see the passport docs »*

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
		data : '8??LiveProto?qn',
		data_hash : '	?gLiveProto?/?Ɋ',
		secret : '$U[	?LiveProto??0c',
	),
	front_side : $client->inputSecureFileUploaded(
		id : -8620034252212625888,
		parts : 23,
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
		file_hash : 'cBZ?WLiveProto?6aK]',
		secret : 'KU?LiveProtoοڴ',
	),
	reverse_side : $client->inputSecureFileUploaded(
		id : 1776733537259169846,
		parts : 47,
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
		file_hash : ';c??+LiveProtoH0??',
		secret : '}??&LiveProto?W???',
	),
	selfie : $client->inputSecureFileUploaded(
		id : 6277748590880010497,
		parts : 42,
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
		file_hash : '6?K??LiveProto???',
		secret : 'r??P?LiveProto??c',
	),
	translation : array(
		$client->inputSecureFileUploaded(
			id : 5686177676389550354,
			parts : 36,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : '+?a{?LiveProto?5?',
			secret : '' . "\0" . '@?LiveProtof?Y',
		),
		$client->inputSecureFile(
			id : 3326090133705092060,
			access_hash : -340301878668382560,
		),
	),
	files : array(
		$client->inputSecureFileUploaded(
			id : 5530045417853678261,
			parts : 69,
			md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			file_hash : 'p?i?NLiveProto߶\'',
			secret : 'XibFLiveProto@?>Z?',
		),
		$client->inputSecureFile(
			id : 8897914239396889240,
			access_hash : 8612505637182682685,
		),
	),
	plain_data : $client->securePlainPhone(
		phone : '+1234567890',
	),
);
```