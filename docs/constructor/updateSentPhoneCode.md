# updateSentPhoneCode

**Layer** : 214

```tl
updateSentPhoneCode#504aa18f sent_code:auth.SentCode = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sent_code</mark> | [`auth.SentCode`](type/auth.SentCode) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateSentPhoneCode(
	sent_code : $client->auth->sentCode(
		type : $client->auth->sentCodeTypeApp(
			length : 11,
		),
		phone_code_hash : '+1234567890',
		next_type : $client->auth->codeTypeSms(),
		timeout : 62,
	),
);
```