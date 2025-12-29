# updateStarsRevenueStatus

**Description** : *The Telegram Star balance of a channel/bot we own has changed &raquo;*

**Layer** : 218

```tl
updateStarsRevenueStatus#a584b019 peer:Peer status:StarsRevenueStatus = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Channel/bot |
| <mark>status</mark> | [`StarsRevenueStatus`](type/StarsRevenueStatus) | New Telegram Star balance |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStarsRevenueStatus(
	peer : $client->peerUser(
		user_id : -6011980955598538445,
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : -3255650211587864868,
			nanos : 34,
		),
		available_balance : $client->starsAmount(
			amount : -1930313787851222409,
			nanos : 45,
		),
		overall_revenue : $client->starsAmount(
			amount : -1483583294673460153,
			nanos : 100,
		),
		next_withdrawal_at : 54,
	),
);
```