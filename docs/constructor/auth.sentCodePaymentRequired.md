# auth.sentCodePaymentRequired

**Layer** : 214

```tl
auth.sentCodePaymentRequired#d7a2fcf9 store_product:string phone_code_hash:string support_email_address:string support_email_subject:string = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>store_product</mark> | [`string`](type/string) | NOTHING |
| <mark>phone_code_hash</mark> | [`string`](type/string) | NOTHING |
| <mark>support_email_address</mark> | [`string`](type/string) | NOTHING |
| <mark>support_email_subject</mark> | [`string`](type/string) | NOTHING |

---

## Type

[auth.SentCode](type/auth.SentCode)

---

## Example

```php
$authSentCode = $client->auth->sentCodePaymentRequired(
	store_product : 'KzIq6yd1oYsl7x5O',
	phone_code_hash : '+1234567890',
	support_email_address : 'reply@liveproto.dev',
	support_email_subject : 'reply@liveproto.dev',
);
```