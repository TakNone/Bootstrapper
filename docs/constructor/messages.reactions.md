# messages.reactions

**Description** : *List of message reactions*

**Layer** : 222

```tl
messages.reactions#eafdf716 hash:long reactions:Vector<Reaction> = messages.Reactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, can also be locally regenerated using the algorithm specified here » |
| <mark>reactions</mark> | [`Vector<Reaction>`](type/Reaction) | Reactions |

---

## Type

[messages.Reactions](type/messages.Reactions)

---

## Example

```php
$messagesReactions = $client->messages->reactions(
	hash : 0,
	reactions : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'ikFVNTxAIwa9C2Lg',
		),
		$client->reactionCustomEmoji(
			document_id : 1938189032100105378,
		),
		$client->reactionPaid(),
	),
);
```