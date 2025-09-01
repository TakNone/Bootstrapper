# broadcastRevenueTransactions

**Layer** : 214

```tl
broadcastRevenueTransactions#87158466 count:int transactions:Vector<BroadcastRevenueTransaction> = BroadcastRevenueTransactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | NOTHING |
| <mark>transactions</mark> | [`Vector<BroadcastRevenueTransaction>`](type/BroadcastRevenueTransaction) | NOTHING |

---

## Type

[BroadcastRevenueTransactions](type/BroadcastRevenueTransactions)

---

## Example

```php
$broadcastRevenueTransactions = $client->broadcastRevenueTransactions(
	count : 38,
	transactions : array(
		$client->broadcastRevenueTransactionRefund(
			amount : -2256283874692905811,
			from_date : 84,
			provider : '0LXQWNKPaG67umtk',
		),
		$client->broadcastRevenueTransactionProceeds(
			amount : 4006555488087867866,
			from_date : 57,
			to_date : 71,
		),
		$client->broadcastRevenueTransactionWithdrawal(
			pending : true,
			failed : true,
			amount : 5465342570903537370,
			date : 23,
			provider : 'PZ5xVahGTDoYIKEF',
			transaction_date : 84,
			transaction_url : 'https://docs.liveproto.dev',
		),
	),
);
```