# users.setSecureValueErrors

**Description** : *Notify the user that the sent passport data contains some errors The user will not be able to re\-submit their Passport data to you until the errors are fixed \(the contents of the field for which you returned the error must change\)*

**Layer** : 229

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
			field : 'lGke3ws8zjcqm1QK',
			text : 'JxhvB9CX7Fszd8R5',
		),
		$client->secureValueErrorFrontSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : '9IWnepGcEPd62uD3',
		),
		$client->secureValueErrorReverseSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : '5P17YIGHDhR4vQjr',
		),
		$client->secureValueErrorSelfie(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'lsLxd4eEBVbz1CgU',
		),
		$client->secureValueErrorFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'aTIn0p3DCoj1W9cf',
		),
		$client->secureValueErrorFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : 'dzbtJ3fvM9A4orsa',
		),
		$client->secureValueError(
			type : $client->secureValueTypePersonalDetails(),
			hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'P3BS5Z9JGi7AyKh2',
		),
		$client->secureValueErrorTranslationFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'eFsAqD2LXBC71dKy',
		),
		$client->secureValueErrorTranslationFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : 'HUQdSiDu7ABsNhMn',
		),
	),
);
```