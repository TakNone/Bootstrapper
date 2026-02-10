# updateBotChatBoost

**Description** : *A channel/supergroup boost has changed \(bots only\)*

**Layer** : 222

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
		user_id : -6720583708910824345,
	),
	boost : $client->boost(
		gift : true,
		giveaway : true,
		unclaimed : true,
		id : 'J4bhlMOLpNyrYg0I',
		user_id : -8151964047972399082,
		giveaway_msg_id : 50,
		date : 92,
		expires : 72,
		used_gift_slug : '42LoGxTdkc6phD5E',
		multiplier : 48,
		stars : -4688659172839285461,
	),
	qts : 10,
);
```