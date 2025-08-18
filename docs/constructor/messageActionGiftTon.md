# messageActionGiftTon

**Layer** : 211

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
	currency : 'btu0BpM59HqPzQG7',
	amount : 2707861512411639893,
	crypto_currency : 'wkXu8roKPZ1LqDRI',
	crypto_amount : 3184204891040771458,
	transaction_id : '2GV1IdXDbR39CrJF',
);
```