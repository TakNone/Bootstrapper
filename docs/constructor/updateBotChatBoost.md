# updateBotChatBoost

**Description** : *A channel/supergroup boost has changed \(bots only\)*

**Layer** : 227

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
		user_id : -7341956342907845728,
	),
	boost : $client->boost(
		gift : true,
		giveaway : true,
		unclaimed : true,
		id : 'aFjXpNAQbeS0xmkH',
		user_id : 6773744956986287461,
		giveaway_msg_id : 41,
		date : 9,
		expires : 97,
		used_gift_slug : 'NxoKjv3LBCOls1rP',
		multiplier : 34,
		stars : -8787462849897209611,
	),
	qts : 2,
);
```