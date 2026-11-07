# wallet.getTransactions

**Layer** : 233

```tl
wallet.getTransactions#a8830a83 flags:# inbound:flags.0?true outbound:flags.1?true offset:string limit:int = wallet.Transactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **inbound** | [`flags.0?true`](type/true) | NOTHING |
| **outbound** | [`flags.1?true`](type/true) | NOTHING |
| <mark>offset</mark> | [`string`](type/string) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |

---

## Result

[wallet.Transactions](type/wallet.Transactions)

---

## Example

```php
$walletTransactions = $client->wallet->getTransactions(
	inbound : true,
	outbound : true,
	offset : 'qbXj09hrSiPHgYo1',
	limit : 15,
);
```