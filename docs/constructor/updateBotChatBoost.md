# updateBotChatBoost

**Description** : *A channel/supergroup boost has changed \(bots only\)*

**Layer** : 216

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
		user_id : 6206755273034554702,
	),
	boost : $client->boost(
		gift : true,
		giveaway : true,
		unclaimed : true,
		id : 'vJQNRaxY2yG1eSDB',
		user_id : -7450664894080156944,
		giveaway_msg_id : 29,
		date : 54,
		expires : 36,
		used_gift_slug : 'ZPwuamRLH7eQrNz3',
		multiplier : 30,
		stars : 1561174544841148791,
	),
	qts : 18,
);
```