# payments.starsRevenueStats

**Description** : *Star revenue statistics, see here &raquo; for more info*

**Layer** : 216

```tl
payments.starsRevenueStats#6c207376 flags:# top_hours_graph:flags.0?StatsGraph revenue_graph:StatsGraph status:StarsRevenueStatus usd_rate:double = payments.StarsRevenueStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **top_hours_graph** | [`flags.0?StatsGraph`](type/StatsGraph) | For ad revenue statistics, ad impressions graph |
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
		token : '1gdeDlfmsJrZHcC6',
	),
	revenue_graph : $client->statsGraphAsync(
		token : '5mKUxS4vyCfkEWhB',
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : -1508870972930109136,
			nanos : 54,
		),
		available_balance : $client->starsAmount(
			amount : 1310094073643847611,
			nanos : 84,
		),
		overall_revenue : $client->starsAmount(
			amount : -7179556473397899498,
			nanos : 20,
		),
		next_withdrawal_at : 55,
	),
	usd_rate : 770265.712890625,
);
```