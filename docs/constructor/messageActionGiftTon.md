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
	currency : 'HvfBbU51goQ2D0nr',
	amount : -3160013720694826954,
	crypto_currency : '6CxvHOGgNZBbkjQi',
	crypto_amount : -169589266971879155,
	transaction_id : 'F16mwJbjYkWGE8Ki',
);
```