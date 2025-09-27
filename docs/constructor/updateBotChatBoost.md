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
		user_id : 2898466686992138830,
	),
	boost : $client->boost(
		gift : true,
		giveaway : true,
		unclaimed : true,
		id : 'lkdQJmSOWE52bsCN',
		user_id : 7482214497560540510,
		giveaway_msg_id : 80,
		date : 59,
		expires : 5,
		used_gift_slug : 'ftyoZQMIxXu7ObsB',
		multiplier : 91,
		stars : -5210699777338331136,
	),
	qts : 5,
);
```