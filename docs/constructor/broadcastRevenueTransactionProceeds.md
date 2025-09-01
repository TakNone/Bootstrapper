# broadcastRevenueTransactionProceeds

**Description** : *Describes earnings from sponsored messages in a channel in some time frame, see here &raquo; for more info*

**Layer** : 214

```tl
broadcastRevenueTransactionProceeds#557e2cc4 amount:long from_date:int to_date:int = BroadcastRevenueTransaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>amount</mark> | [`long`](type/long) | Amount in the smallest unit of the cryptocurrency |
| <mark>from_date</mark> | [`int`](type/int) | Start unixtime for the timeframe |
| <mark>to_date</mark> | [`int`](type/int) | End unixtime for the timeframe |

---

## Type

[BroadcastRevenueTransaction](type/BroadcastRevenueTransaction)

---

## Example

```php
$broadcastRevenueTransaction = $client->broadcastRevenueTransactionProceeds(
	amount : -6748602197633221401,
	from_date : 91,
	to_date : 61,
);
```