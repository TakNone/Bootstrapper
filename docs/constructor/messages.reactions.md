# messages.reactions

**Description** : *List of message reactions*

**Layer** : 214

```tl
messages.reactions#eafdf716 hash:long reactions:Vector<Reaction> = messages.Reactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>reactions</mark> | [`Vector<Reaction>`](type/Reaction) | Reactions |

---

## Type

[messages.Reactions](type/messages.Reactions)

---

## Example

```php
$messagesReactions = $client->messages->reactions(
	hash : -433834436036764392,
	reactions : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : '0cZnXlNWqYFVHLrS',
		),
		$client->reactionCustomEmoji(
			document_id : 3196268069743254236,
		),
		$client->reactionPaid(),
	),
);
```