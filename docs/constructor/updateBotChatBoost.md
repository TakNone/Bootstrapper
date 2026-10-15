# updateBotChatBoost

**Description** : *A channel/supergroup boost has changed \(bots only\)*

**Layer** : 229

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
		user_id : -598138983548245311,
	),
	boost : $client->boost(
		gift : true,
		giveaway : true,
		unclaimed : true,
		id : '6AJ8erogS0RkF5L7',
		user_id : 5314962813365781239,
		giveaway_msg_id : 20,
		date : 89,
		expires : 31,
		used_gift_slug : 'jLkbH3h8eafwJIVQ',
		multiplier : 29,
		stars : -8278298328945993393,
	),
	qts : 26,
);
```