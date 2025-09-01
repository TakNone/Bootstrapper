# account.sendConfirmPhoneCode

**Description** : *Send confirmation code to cancel account deletion, for more info click here &raquo;*

**Layer** : 214

```tl
account.sendConfirmPhoneCode#1b3faa88 hash:string settings:CodeSettings = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`string`](type/string) | The hash from the service notification, for more info click here » |
| <mark>settings</mark> | [`CodeSettings`](type/CodeSettings) | Phone code settings |

---

## Result

[auth.SentCode](type/auth.SentCode)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **HASH_INVALID** | `400` | The provided hash is invalid |

---

## Example

```php
$authSentCode = $client->account->sendConfirmPhoneCode(
	hash : 'f1ECm2GNMXucjs7l',
	settings : $client->codeSettings(
		allow_flashcall : true,
		current_number : true,
		allow_app_hash : true,
		allow_missed_call : true,
		allow_firebase : true,
		unknown_number : true,
		logout_tokens : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
		token : 'TVXFhvwnRxrLamjJ',
		app_sandbox : true,
	),
);
```