# payments.starsRevenueStats

**Description** : *Star revenue statistics, see here &raquo; for more info*

**Layer** : 218

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
		token : 'xTVj4tq0Ac3dv19E',
	),
	revenue_graph : $client->statsGraphAsync(
		token : 'cE7Bsd1hAqZQYeJi',
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : 5203449673797839418,
			nanos : 77,
		),
		available_balance : $client->starsAmount(
			amount : -486957005573540505,
			nanos : 83,
		),
		overall_revenue : $client->starsAmount(
			amount : 2478228841866361921,
			nanos : 46,
		),
		next_withdrawal_at : 15,
	),
	usd_rate : -586766.0634765625,
);
```