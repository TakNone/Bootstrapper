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
		token : 'L6ItsJ8HVRPej5p1',
	),
	revenue_graph : $client->statsGraphAsync(
		token : 'ljTKdZwpSEyhaBNt',
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : -668283317766081051,
			nanos : 83,
		),
		available_balance : $client->starsAmount(
			amount : 730776779783879203,
			nanos : 66,
		),
		overall_revenue : $client->starsAmount(
			amount : -1567750043787587121,
			nanos : 45,
		),
		next_withdrawal_at : 3,
	),
	usd_rate : 2718.583984375,
);
```