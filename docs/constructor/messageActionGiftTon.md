# messageActionGiftTon

**Layer** : 214

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
	currency : 'b3EYFX0t8ULHrShR',
	amount : 4104573657653458682,
	crypto_currency : 'H6esMRyKSFX7dOz1',
	crypto_amount : -3520605601308698214,
	transaction_id : 'J3aXVgiQ0GqzYseI',
);
```