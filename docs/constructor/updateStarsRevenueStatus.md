# updateStarsRevenueStatus

**Description** : *The Telegram Star balance of a channel/bot we own has changed &raquo;*

**Layer** : 216

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
		user_id : -1047772633258471826,
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : 1108948903261232247,
			nanos : 87,
		),
		available_balance : $client->starsAmount(
			amount : -7625574864482606639,
			nanos : 29,
		),
		overall_revenue : $client->starsAmount(
			amount : 1875843900178031705,
			nanos : 46,
		),
		next_withdrawal_at : 67,
	),
);
```