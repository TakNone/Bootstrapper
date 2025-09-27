# payments.starsRevenueStats

**Description** : *Star revenue statistics, see here &raquo; for more info*

**Layer** : 214

```tl
payments.starsRevenueStats#6c207376 flags:# top_hours_graph:flags.0?StatsGraph revenue_graph:StatsGraph status:StarsRevenueStatus usd_rate:double = payments.StarsRevenueStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **top_hours_graph** | [`flags.0?StatsGraph`](type/StatsGraph) | NOTHING |
| <mark>revenue_graph</mark> | [`StatsGraph`](type/StatsGraph) | Star revenue graph (number of earned stars) |
| <mark>status</mark> | [`StarsRevenueStatus`](type/StarsRevenueStatus) | Current balance, current withdrawable balance and overall earned Telegram Stars |
| <mark>usd_rate</mark> | [`double`](type/double) | Current conversion rate of Telegram Stars to USD |

---

## Type

[payments.StarsRevenueStats](type/payments.StarsRevenueStats)

---

## Example

```php
$paymentsStarsRevenueStats = $client->payments->starsRevenueStats(
	top_hours_graph : $client->statsGraphAsync(
		token : 'tNDGv8FVmrepZWfX',
	),
	revenue_graph : $client->statsGraphAsync(
		token : 'N2S6JZovCVfpbr8c',
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : -7107129209534936735,
			nanos : 95,
		),
		available_balance : $client->starsAmount(
			amount : 993408154921748533,
			nanos : 41,
		),
		overall_revenue : $client->starsAmount(
			amount : 6127029319656252372,
			nanos : 24,
		),
		next_withdrawal_at : 16,
	),
	usd_rate : -1049444.8974609375,
);
```