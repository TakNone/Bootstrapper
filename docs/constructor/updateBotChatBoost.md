# updateBotChatBoost

**Description** : *A channel/supergroup boost has changed \(bots only\)*

**Layer** : 214

```tl
updateBotChatBoost#904dd49c peer:Peer boost:Boost qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Channel |
| <mark>boost</mark> | [`Boost`](type/Boost) | New boost information |
| <mark>qts</mark> | [`int`](type/int) | QTS event sequence identifier |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotChatBoost(
	peer : $client->peerUser(
		user_id : 3779722076305933709,
	),
	boost : $client->boost(
		gift : true,
		giveaway : true,
		unclaimed : true,
		id : '9ZHgnhkb0AqsBYU4',
		user_id : 8761654386371750344,
		giveaway_msg_id : 15,
		date : 84,
		expires : 52,
		used_gift_slug : 'zZTVtHaoxBqKgvRi',
		multiplier : 37,
		stars : -211829429550219212,
	),
	qts : 78,
);
```