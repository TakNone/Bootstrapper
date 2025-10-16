# messages.checkPaidAuth

**Layer** : 216

```tl
messages.checkPaidAuth#56e59f9c phone_number:string phone_code_hash:string form_id:long = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | NOTHING |
| <mark>phone_code_hash</mark> | [`string`](type/string) | NOTHING |
| <mark>form_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[auth.SentCode](type/auth.SentCode)

---

## Example

```php
$authSentCode = $client->messages->checkPaidAuth(
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
	form_id : -4004883254985316341,
);
```