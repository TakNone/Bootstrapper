# updateBotMessageReactions

**Description** : *Bots only: the number of reactions on a message with anonymous reactions has changed*

**Layer** : 211

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
		user_id : 8971091528160136858,
	),
	msg_id : 79,
	date : 5,
	reactions : array(
		$client->reactionCount(
			chosen_order : 85,
			reaction : $client->reactionEmpty(),
			count : 62,
		),
	),
	qts : 97,
);
```