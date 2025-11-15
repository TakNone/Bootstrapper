# updateBotChatBoost

**Description** : *A channel/supergroup boost has changed \(bots only\)*

**Layer** : 218

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
		user_id : 5976859614805800475,
	),
	boost : $client->boost(
		gift : true,
		giveaway : true,
		unclaimed : true,
		id : '0phTQySe8JZ9Ugmt',
		user_id : -3179964122518088310,
		giveaway_msg_id : 99,
		date : 25,
		expires : 80,
		used_gift_slug : 'LHpSwqZfJcXbglCM',
		multiplier : 96,
		stars : -4527571608821562380,
	),
	qts : 35,
);
```