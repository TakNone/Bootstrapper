# users.setSecureValueErrors

**Description** : *Notify the user that the sent passport data contains some errors The user will not be able to re-submit their Passport data to you until the errors are fixed (the contents of the field for which you returned the error must change)*

**Layer** : 211

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
| **USER_BOT_INVALID** | `403` | User accounts must provide the bot method parameter when calling this method. If there is no such method parameter, this method can only be invoked by bot accounts |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->users->setSecureValueErrors(
	id : $client->inputUserEmpty(),
	errors : array(
		$client->secureValueErrorData(
			type : $client->secureValueTypePersonalDetails(),
			data_hash : 'O???hLiveProto?L?	',
			field : '5mKTut2FDwxWEqdI',
			text : 'bYW2OEpLqQDeXG3d',
		),
		$client->secureValueErrorFrontSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '?Qq*LiveProto):??',
			text : 'D5lCyNt2Wgfq94wd',
		),
		$client->secureValueErrorReverseSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '?|???LiveProto???.?',
			text : 'aLVnCtfhjAJes2lD',
		),
		$client->secureValueErrorSelfie(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : 'KfBK.LiveProto?YA?',
			text : 'Ke3wt91NFypqci5f',
		),
		$client->secureValueErrorFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '???+)LiveProto??ƥ?',
			text : 'hl5k7JXOzbmqfIdC',
		),
		$client->secureValueErrorFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array('}?1??LiveProto=???:'),
			text : 'qBZ3aQswrIcgYAzK',
		),
		$client->secureValueError(
			type : $client->secureValueTypePersonalDetails(),
			hash : '?1??LiveProto5?\\?-',
			text : 'ON5w1kL4rGmj82xa',
		),
		$client->secureValueErrorTranslationFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '??=?LiveProtoL̤??',
			text : 'CevbfOHF1TLkBS9x',
		),
		$client->secureValueErrorTranslationFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array('/7??ALiveProto?V?%B'),
			text : '7hGWbaYVyLI5sHJM',
		),
	),
);
```