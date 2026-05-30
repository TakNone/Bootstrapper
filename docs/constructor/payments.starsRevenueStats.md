# payments.starsRevenueStats

**Description** : *Star revenue statistics, see here &raquo; for more info*

**Layer** : 222

```tl
payments.starsRevenueStats#6c207376 flags:# top_hours_graph:flags.0?StatsGraph revenue_graph:StatsGraph status:StarsRevenueStatus usd_rate:double = payments.StarsRevenueStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		token : 'u2pJz4chjI8EX3lk',
	),
	revenue_graph : $client->statsGraphAsync(
		token : 'LosfEgcutMzSpUka',
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : 2761951192740435891,
			nanos : 12,
		),
		available_balance : $client->starsAmount(
			amount : 2337983968334430438,
			nanos : 5,
		),
		overall_revenue : $client->starsAmount(
			amount : -1374213878434565772,
			nanos : 26,
		),
		next_withdrawal_at : 11,
	),
	usd_rate : -1654021.830078125,
);
```