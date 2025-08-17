# auth.sentCodePaymentRequired

**Layer** : 211

```tl
auth.sentCodePaymentRequired#d7cef980 store_product:string phone_code_hash:string = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>store_product</mark> | [`string`](type/string) | NOTHING |
| <mark>phone_code_hash</mark> | [`string`](type/string) | NOTHING |

---

## Type

[auth.SentCode](type/auth.SentCode)

---

## Example

```php
$authSentCode = $client->auth->sentCodePaymentRequired(
	store_product : 'nwhQJCymPWgVipX4',
	phone_code_hash : '+1234567890',
);
```