# inputStarsTransaction

**Description** : *Used to fetch info about a Telegram Star transaction &raquo;*

**Layer** : 216

```tl
inputStarsTransaction#206ae6d1 flags:# refund:flags.0?true id:string = InputStarsTransaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **refund** | [`flags.0?true`](type/true) | If set, fetches info about the refund transaction for this transaction |
| <mark>id</mark> | [`string`](type/string) | Transaction ID |

---

## Type

[InputStarsTransaction](type/InputStarsTransaction)

---

## Example

```php
$inputStarsTransaction = $client->inputStarsTransaction(
	refund : true,
	id : '5jNg0WnaUlru7MJZ',
);
```