# updateBotMessageReaction

**Description** : *Bots only: a user has changed their reactions on a message with public reactions*

**Layer** : 218

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
		user_id : 2035225894827604105,
	),
	msg_id : 66,
	date : 60,
	actor : $client->peerUser(
		user_id : -2434765504705814914,
	),
	old_reactions : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : '7df8He6nTSOuhJDC',
		),
		$client->reactionCustomEmoji(
			document_id : -1302713977583693693,
		),
		$client->reactionPaid(),
	),
	new_reactions : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'M5HkeqRW2oQLri9h',
		),
		$client->reactionCustomEmoji(
			document_id : -6710564131870524343,
		),
		$client->reactionPaid(),
	),
	qts : 94,
);
```