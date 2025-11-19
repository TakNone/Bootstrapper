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
		user_id : -8934179849258442255,
	),
	status : $client->starsRevenueStatus(
		withdrawal_enabled : true,
		current_balance : $client->starsAmount(
			amount : -6625159334307807707,
			nanos : 58,
		),
		available_balance : $client->starsAmount(
			amount : 5344984730936858253,
			nanos : 6,
		),
		overall_revenue : $client->starsAmount(
			amount : 7713163984835440909,
			nanos : 79,
		),
		next_withdrawal_at : 37,
	),
);
```