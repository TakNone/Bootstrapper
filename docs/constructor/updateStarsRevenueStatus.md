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
		user_id : 5574723621935943975,
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : 5375224781990301651,
			nanos : 29,
		),
		available_balance : $client->starsAmount(
			amount : -3630441504187774577,
			nanos : 24,
		),
		overall_revenue : $client->starsAmount(
			amount : 7363831989875349580,
			nanos : 62,
		),
		next_withdrawal_at : 57,
	),
);
```