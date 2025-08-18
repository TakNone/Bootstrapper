# payments.starsRevenueStats

**Description** : *Star revenue statistics, see here &raquo; for more info*

**Layer** : 211

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
		token : 'YWawkCPnFyZbOtE6',
	),
	revenue_graph : $client->statsGraphAsync(
		token : 'Bf495TDXFzCnodtE',
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : 7168855997098054685,
			nanos : 31,
		),
		available_balance : $client->starsAmount(
			amount : 6395275896768213581,
			nanos : 65,
		),
		overall_revenue : $client->starsAmount(
			amount : -3315974767522195112,
			nanos : 49,
		),
		next_withdrawal_at : 74,
	),
	usd_rate : -1093193.9208984375,
);
```