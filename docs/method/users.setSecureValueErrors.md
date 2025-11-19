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
	id : $client->get_input_user(peer : '@TakNone'),
	errors : array(
		$client->secureValueErrorData(
			type : $client->secureValueTypePersonalDetails(),
			data_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			field : 'hGKy8MfP4jDLVx12',
			text : 'fwINtLg3izuHFlyV',
		),
		$client->secureValueErrorFrontSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'rJg7GAUfiLpmR4nc',
		),
		$client->secureValueErrorReverseSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'LpNZTqDfeYKSy0aX',
		),
		$client->secureValueErrorSelfie(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'YFSiQ9To8gznKHJ3',
		),
		$client->secureValueErrorFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'SHj57XwqA8BcPEeN',
		),
		$client->secureValueErrorFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : 'u4ps68UeH05rjqgL',
		),
		$client->secureValueError(
			type : $client->secureValueTypePersonalDetails(),
			hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'IxzCLEmKfcTAvHyh',
		),
		$client->secureValueErrorTranslationFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			text : 'Sbm1dX3htOniIwfD',
		),
		$client->secureValueErrorTranslationFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			text : 'DFJ7WYvRKZ82gULX',
		),
	),
);
```