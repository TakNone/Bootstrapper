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
		user_id : -5878440462472050469,
	),
	boost : $client->boost(
		gift : true,
		giveaway : true,
		unclaimed : true,
		id : 'iwXHPhJ0MB5KT9Ou',
		user_id : 5092551904371718536,
		giveaway_msg_id : 57,
		date : 90,
		expires : 86,
		used_gift_slug : 'FdC9Rlizo6W2Ie3G',
		multiplier : 64,
		stars : 3489109652171717070,
	),
	qts : 43,
);
```