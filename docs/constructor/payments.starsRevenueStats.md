# payments.starsRevenueStats

**Description** : *Star revenue statistics, see here » for more info*

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
		token : 'drQhWlnOGJ0C42iH',
	),
	revenue_graph : $client->statsGraphAsync(
		token : 'YMsk4GPtC03zulq7',
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : 5512208133828010908,
			nanos : 89,
		),
		available_balance : $client->starsAmount(
			amount : -3683678466458353584,
			nanos : 43,
		),
		overall_revenue : $client->starsAmount(
			amount : 7601597707616145751,
			nanos : 10,
		),
		next_withdrawal_at : 97,
	),
	usd_rate : -250199.267578125,
);
```