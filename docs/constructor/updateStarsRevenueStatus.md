# updateStarsRevenueStatus

**Description** : *The Telegram Star balance of a channel/bot we own has changed »*

**Layer** : 211

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
		user_id : -552911382419118358,
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : -6706926240029096704,
			nanos : 79,
		),
		available_balance : $client->starsAmount(
			amount : -4097998217062719575,
			nanos : 7,
		),
		overall_revenue : $client->starsAmount(
			amount : 5834353757348133021,
			nanos : 99,
		),
		next_withdrawal_at : 71,
	),
);
```