# broadcastRevenueStats

**Layer** : 214

```tl
broadcastRevenueStats#5407e297 top_hours_graph:StatsGraph revenue_graph:StatsGraph balances:BroadcastRevenueBalances usd_rate:double = BroadcastRevenueStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>top_hours_graph</mark> | [`StatsGraph`](type/StatsGraph) | NOTHING |
| <mark>revenue_graph</mark> | [`StatsGraph`](type/StatsGraph) | NOTHING |
| <mark>balances</mark> | [`BroadcastRevenueBalances`](type/BroadcastRevenueBalances) | NOTHING |
| <mark>usd_rate</mark> | [`double`](type/double) | NOTHING |

---

## Type

[BroadcastRevenueStats](type/BroadcastRevenueStats)

---

## Example

```php
$broadcastRevenueStats = $client->broadcastRevenueStats(
	top_hours_graph : $client->statsGraphAsync(
		token : 'W24gCKNYpExMGwzh',
	),
	revenue_graph : $client->statsGraphAsync(
		token : '6b1eBYsHwJfpF8nt',
	),
	balances : $client->broadcastRevenueBalances(
		withdrawal_enabled : true,
		current_balance : -336116043999199587,
		available_balance : 3794819496854716739,
		overall_revenue : -4369384450010620753,
	),
	usd_rate : -1828332.689453125,
);
```