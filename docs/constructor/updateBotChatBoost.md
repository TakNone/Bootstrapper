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
		user_id : 6861496302271611413,
	),
	boost : $client->boost(
		gift : true,
		giveaway : true,
		unclaimed : true,
		id : 'Lm6y8Qp2BgPRzEO1',
		user_id : 3016529886680252416,
		giveaway_msg_id : 84,
		date : 82,
		expires : 91,
		used_gift_slug : 'M8dfu7V0sUEigZTb',
		multiplier : 5,
		stars : -6595777766187740099,
	),
	qts : 53,
);
```