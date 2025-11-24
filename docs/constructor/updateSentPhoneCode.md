# updateSentPhoneCode

**Description** : *A paid login SMS code was successfully sent*

**Layer** : 218

```tl
updateSentPhoneCode#504aa18f sent_code:auth.SentCode = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sent_code</mark> | [`auth.SentCode`](type/auth.SentCode) | Info about the sent code |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateSentPhoneCode(
	sent_code : $client->auth->sentCode(
		type : $client->auth->sentCodeTypeApp(
			length : 35,
		),
		phone_code_hash : '+1234567890',
		next_type : $client->auth->codeTypeSms(),
		timeout : 40,
	),
);
```