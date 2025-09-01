# broadcastRevenueTransactionRefund

**Description** : *Describes a refund for failed withdrawal of ad earnings &raquo;*

**Layer** : 214

```tl
broadcastRevenueTransactionRefund#42d30d2e amount:long from_date:int provider:string = BroadcastRevenueTransaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>amount</mark> | [`long`](type/long) | Amount refunded |
| <mark>from_date</mark> | [`int`](type/int) | NOTHING |
| <mark>provider</mark> | [`string`](type/string) | Payment provider name |

---

## Type

[BroadcastRevenueTransaction](type/BroadcastRevenueTransaction)

---

## Example

```php
$broadcastRevenueTransaction = $client->broadcastRevenueTransactionRefund(
	amount : 2537903339456029287,
	from_date : 2,
	provider : 'A8IDGNczO9MjSXY0',
);
```