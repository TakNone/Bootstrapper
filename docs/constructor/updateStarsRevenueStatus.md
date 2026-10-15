# updateStarsRevenueStatus

**Description** : *The Telegram Star balance of a channel/bot we own has changed &raquo;*

**Layer** : 229

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
		user_id : 7806651833025852330,
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : -6202765422757479813,
			nanos : 86,
		),
		available_balance : $client->starsAmount(
			amount : 3700271924509421293,
			nanos : 99,
		),
		overall_revenue : $client->starsAmount(
			amount : -4218091680101868061,
			nanos : 76,
		),
		next_withdrawal_at : 3,
	),
);
```