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
		token : '4CVkwuLaNHxr5vhR',
	),
	revenue_graph : $client->statsGraphAsync(
		token : 'JuKSlo0VnO1zZm4b',
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : -6972878405977294727,
			nanos : 18,
		),
		available_balance : $client->starsAmount(
			amount : -6022735957510013270,
			nanos : 59,
		),
		overall_revenue : $client->starsAmount(
			amount : -9110583259941337396,
			nanos : 94,
		),
		next_withdrawal_at : 14,
	),
	usd_rate : -1805714.1044921875,
);
```