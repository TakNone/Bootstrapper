# updateBotChatBoost

**Description** : *A channel/supergroup boost has changed (bots only)*

**Layer** : 211

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
		user_id : -2157537616545624255,
	),
	boost : $client->boost(
		gift : true,
		giveaway : true,
		unclaimed : true,
		id : 'FyXwu6Ddj5nbU9mR',
		user_id : -3398510406851774371,
		giveaway_msg_id : 84,
		date : 64,
		expires : 18,
		used_gift_slug : '9gaFjJtYs0eLRKWn',
		multiplier : 15,
		stars : 4370587822764890977,
	),
	qts : 84,
);
```