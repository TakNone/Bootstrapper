# updateBotMessageReaction

**Description** : *Bots only: a user has changed their reactions on a message with public reactions*

**Layer** : 216

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
		user_id : 2141781690388647020,
	),
	msg_id : 95,
	date : 61,
	actor : $client->peerUser(
		user_id : 1715136859914682424,
	),
	old_reactions : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'eR05WI1tGJN2ng8c',
		),
		$client->reactionCustomEmoji(
			document_id : 8476919493112195042,
		),
		$client->reactionPaid(),
	),
	new_reactions : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'ZMtPAjdIiJu6ab1N',
		),
		$client->reactionCustomEmoji(
			document_id : 5530696675275228276,
		),
		$client->reactionPaid(),
	),
	qts : 63,
);
```