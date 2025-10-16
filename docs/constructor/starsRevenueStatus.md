# starsRevenueStatus

**Description** : *Describes Telegram Star revenue balances &raquo;*

**Layer** : 216

```tl
starsRevenueStatus#febe5491 flags:# withdrawal_enabled:flags.0?true current_balance:StarsAmount available_balance:StarsAmount overall_revenue:StarsAmount next_withdrawal_at:flags.1?int = StarsRevenueStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **withdrawal_enabled** | [`flags.0?true`](type/true) | If set, the user may withdraw up to available_balance stars |
| <mark>current_balance</mark> | [`StarsAmount`](type/StarsAmount) | Amount of not-yet-withdrawn Telegram Stars |
| <mark>available_balance</mark> | [`StarsAmount`](type/StarsAmount) | Amount of withdrawable Telegram Stars |
| <mark>overall_revenue</mark> | [`StarsAmount`](type/StarsAmount) | Total amount of earned Telegram Stars |
| **next_withdrawal_at** | [`flags.1?int`](type/int) | Unixtime indicating when will withdrawal be available to the user. If not set, withdrawal can be started now |

---

## Type

[StarsRevenueStatus](type/StarsRevenueStatus)

---

## Example

```php
$starsRevenueStatus = $client->starsRevenueStatus(
	withdrawal_enabled : true,
	current_balance : $client->starsAmount(
		amount : 7468713233917749791,
		nanos : 67,
	),
	available_balance : $client->starsAmount(
		amount : 4034705357832485855,
		nanos : 61,
	),
	overall_revenue : $client->starsAmount(
		amount : 8258970027965931127,
		nanos : 53,
	),
	next_withdrawal_at : 67,
);
```