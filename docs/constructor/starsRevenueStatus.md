# starsRevenueStatus

**Description** : *Describes Telegram Star revenue balances &raquo;*

**Layer** : 227

```tl
starsRevenueStatus#febe5491 flags:# withdrawal_enabled:flags.0?true current_balance:StarsAmount available_balance:StarsAmount overall_revenue:StarsAmount next_withdrawal_at:flags.1?int = StarsRevenueStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		amount : -9092880783842205845,
		nanos : 16,
	),
	available_balance : $client->starsAmount(
		amount : -7328822794513365048,
		nanos : 17,
	),
	overall_revenue : $client->starsAmount(
		amount : 5446918483841031081,
		nanos : 7,
	),
	next_withdrawal_at : 65,
);
```