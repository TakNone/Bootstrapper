# messages.reactions

**Description** : *List of message reactions*

**Layer** : 218

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
			emoticon : 'cekUTfbCx8iMYvJP',
		),
		$client->reactionCustomEmoji(
			document_id : 9057533191593666324,
		),
		$client->reactionPaid(),
	),
);
```