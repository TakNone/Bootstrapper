# auth.sentCodePaymentRequired

**Layer** : 216

```tl
auth.sentCodePaymentRequired#e0955a3c store_product:string phone_code_hash:string support_email_address:string support_email_subject:string currency:string amount:long = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>store_product</mark> | [`string`](type/string) | NOTHING |
| <mark>phone_code_hash</mark> | [`string`](type/string) | NOTHING |
| <mark>support_email_address</mark> | [`string`](type/string) | NOTHING |
| <mark>support_email_subject</mark> | [`string`](type/string) | NOTHING |
| <mark>currency</mark> | [`string`](type/string) | NOTHING |
| <mark>amount</mark> | [`long`](type/long) | NOTHING |

---

## Type

[auth.SentCode](type/auth.SentCode)

---

## Example

```php
$authSentCode = $client->auth->sentCodePaymentRequired(
	store_product : 'LkQuInP35e4X6Gyv',
	phone_code_hash : '+1234567890',
	support_email_address : 'reply@liveproto.dev',
	support_email_subject : 'reply@liveproto.dev',
	currency : 'u9xMwZ4or2V6kiKd',
	amount : -4042362924431634670,
);
```