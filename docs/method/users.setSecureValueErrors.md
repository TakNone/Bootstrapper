# users.setSecureValueErrors

**Description** : *Notify the user that the sent passport data contains some errors The user will not be able to re\-submit their Passport data to you until the errors are fixed \(the contents of the field for which you returned the error must change\)*

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
			data_hash : '??,CLiveProto?`???',
			field : 'Q3korePAwWSBMqF1',
			text : 'mJbqga1VwpWNt2D9',
		),
		$client->secureValueErrorFrontSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : 'p?B?LiveProtoV?$?',
			text : 'ebUyTF82cphWsoj4',
		),
		$client->secureValueErrorReverseSide(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : 'aXN?oLiveProto?PԻy',
			text : 'iYkXrzT1wfca820D',
		),
		$client->secureValueErrorSelfie(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '???2`LiveProto?6?',
			text : '3q5u4sU7XQpjw0EV',
		),
		$client->secureValueErrorFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '????LiveProto!>?',
			text : 'hcTCY8Kmwoy5XrDI',
		),
		$client->secureValueErrorFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array('????LiveProto??M?L'),
			text : 'SYGZRjonHJbs79lc',
		),
		$client->secureValueError(
			type : $client->secureValueTypePersonalDetails(),
			hash : 'N' . "\0" . '3??LiveProto?\'???',
			text : 'rSBe2Gyuq1CMazc5',
		),
		$client->secureValueErrorTranslationFile(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : '?*?jrLiveProto?4oZ8',
			text : 'bzfpQvMxnwE6ZeG3',
		),
		$client->secureValueErrorTranslationFiles(
			type : $client->secureValueTypePersonalDetails(),
			file_hash : array('J???LiveProto?UiE'),
			text : 'A7RK1L6Q2GIUMT0Z',
		),
	),
);
```