# inputStarsTransaction

**Description** : *Used to fetch info about a Telegram Star transaction &raquo;*

**Layer** : 218

```tl
inputStarsTransaction#206ae6d1 flags:# refund:flags.0?true id:string = InputStarsTransaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 'Tb8tsxMkJ0rNU7Z1',
);
```