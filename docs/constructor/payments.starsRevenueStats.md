# payments.starsRevenueStats

**Description** : *Star revenue statistics, see here &raquo; for more info*

**Layer** : 227

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
		token : 'pl4Q17GtcLi5ajnH',
	),
	revenue_graph : $client->statsGraphAsync(
		token : '6cieIrsMvdCRaS93',
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : 5086924786469879875,
			nanos : 64,
		),
		available_balance : $client->starsAmount(
			amount : 2170415056010949366,
			nanos : 3,
		),
		overall_revenue : $client->starsAmount(
			amount : 2817258673907703856,
			nanos : 46,
		),
		next_withdrawal_at : 63,
	),
	usd_rate : -628178.7607421875,
);
```