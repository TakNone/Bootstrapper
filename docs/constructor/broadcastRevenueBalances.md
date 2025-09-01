# broadcastRevenueBalances

**Description** : *Describes channel ad revenue balances &raquo;*

**Layer** : 214

```tl
broadcastRevenueBalances#c3ff71e7 flags:# withdrawal_enabled:flags.0?true current_balance:long available_balance:long overall_revenue:long = BroadcastRevenueBalances;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **withdrawal_enabled** | [`flags.0?true`](type/true) | If set, the available balance can be withdrawn » |
| <mark>current_balance</mark> | [`long`](type/long) | Amount of not-yet-withdrawn cryptocurrency |
| <mark>available_balance</mark> | [`long`](type/long) | Amount of withdrawable cryptocurrency, out of the currently available balance (available_balance <= current_balance) |
| <mark>overall_revenue</mark> | [`long`](type/long) | Total amount of earned cryptocurrency |

---

## Type

[BroadcastRevenueBalances](type/BroadcastRevenueBalances)

---

## Example

```php
$broadcastRevenueBalances = $client->broadcastRevenueBalances(
	withdrawal_enabled : true,
	current_balance : -1057161708282025951,
	available_balance : -1338273062023677807,
	overall_revenue : 4012064556793494837,
);
```