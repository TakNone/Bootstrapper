# users.setSecureValueErrors

**Description** : *Notify the user that the sent passport data contains some errors The user will not be able to re\-submit their Passport data to you until the errors are fixed \(the contents of the field for which you returned the error must change\)*

**Layer** : 218

```tl
users.setSecureValueErrors#90c894b5 id:InputUser errors:Vector<SecureValueError> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | The user |
| <mark>errors</mark> | [`Vector<SecureValueError>`](type/SecureValueError) | Errors |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **DATA_HASH_SIZE_INVALID** | `400` | The size of the specified secureValueErrorData.data_hash is invalid |
| **HASH_SIZE_INVALID** | `400` | The size of the specified secureValueError.hash is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->users->setSecureValueErrors(
	id : $client->get_input_user(user : '@TakNone'),
	errors : array(
		$client->secureValueErrorData(
			type : $client->secureValueTypePersonalDetails(),
			data_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			field : 'GZUQRLwf9S4bgeN3',
			text : 'lVs5bUZ6wkiGtQz9',
		),
		$client->secureValueErrorFrontSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'urEMbFyqnePvHJsp',
		),
		$client->secureValueErrorReverseSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'Pcpjt8hX26SdGCDo',
		),
		$client->secureValueErrorSelfie(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'vJGQayhcTFL1MC3d',
		),
		$client->secureValueErrorFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : '1hD2S7ATr0izE8mc',
		),
		$client->secureValueErrorFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : '7l5F0OWsyuIHGYwh',
		),
		$client->secureValueError(
			type : $client->secureValueTypePersonalDetails(),
			hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'UAbW1Zp9OxlNw6Th',
		),
		$client->secureValueErrorTranslationFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : '8zo4lOtc7ZjsdUEX',
		),
		$client->secureValueErrorTranslationFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : 'bsz2f6h0jNcrWyBV',
		),
	),
);
```