# messageActionGiftTon

**Layer** : 216

```tl
messageActionGiftTon#a8a3c699 flags:# currency:string amount:long crypto_currency:string crypto_amount:long transaction_id:flags.0?string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>currency</mark> | [`string`](type/string) | NOTHING |
| <mark>amount</mark> | [`long`](type/long) | NOTHING |
| <mark>crypto_currency</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_amount</mark> | [`long`](type/long) | NOTHING |
| **transaction_id** | [`flags.0?string`](type/string) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGiftTon(
	currency : 'TKmE7zkOCacHXxNS',
	amount : -7830910816599586916,
	crypto_currency : '1nIwGLN50c2Yi6Jp',
	crypto_amount : -5093107981463280769,
	transaction_id : 'mO0Ll48zFCcioADs',
);
```