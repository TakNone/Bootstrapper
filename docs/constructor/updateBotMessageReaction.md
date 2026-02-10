# updateBotMessageReaction

**Description** : *Bots only: a user has changed their reactions on a message with public reactions*

**Layer** : 222

```tl
updateBotMessageReaction#ac21d3ce peer:Peer msg_id:int date:int actor:Peer old_reactions:Vector<Reaction> new_reactions:Vector<Reaction> qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer of the reacted-to message |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the reacted-to message |
| <mark>date</mark> | [`int`](type/int) | Date of the change |
| <mark>actor</mark> | [`Peer`](type/Peer) | The user that (un)reacted to the message |
| <mark>old_reactions</mark> | [`Vector<Reaction>`](type/Reaction) | Old reactions |
| <mark>new_reactions</mark> | [`Vector<Reaction>`](type/Reaction) | New reactions |
| <mark>qts</mark> | [`int`](type/int) | QTS event sequence identifier |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotMessageReaction(
	peer : $client->peerUser(
		user_id : -6868260370222895976,
	),
	msg_id : 60,
	date : 59,
	actor : $client->peerUser(
		user_id : -3074991379382455654,
	),
	old_reactions : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'uTe2Pq7ndvN04DO8',
		),
		$client->reactionCustomEmoji(
			document_id : 2136213010963994483,
		),
		$client->reactionPaid(),
	),
	new_reactions : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'Po6JeFc1ulA47QpU',
		),
		$client->reactionCustomEmoji(
			document_id : -6209171156449072373,
		),
		$client->reactionPaid(),
	),
	qts : 93,
);
```