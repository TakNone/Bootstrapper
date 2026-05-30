# updateBotMessageReactions

**Description** : *Bots only: the number of reactions on a message with anonymous reactions has changed*

**Layer** : 225

```tl
updateBotMessageReactions#9cb7759 peer:Peer msg_id:int date:int reactions:Vector<ReactionCount> qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer of the reacted-to message |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the reacted-to message |
| <mark>date</mark> | [`int`](type/int) | Date of the change |
| <mark>reactions</mark> | [`Vector<ReactionCount>`](type/ReactionCount) | New reaction counters |
| <mark>qts</mark> | [`int`](type/int) | QTS event sequence identifier |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotMessageReactions(
	peer : $client->peerUser(
		user_id : -6965070668259236798,
	),
	msg_id : 74,
	date : 6,
	reactions : array(
		$client->reactionCount(
			chosen_order : 20,
			reaction : $client->reactionEmpty(),
			count : 39,
		),
	),
	qts : 27,
);
```