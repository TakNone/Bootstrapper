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
	hash : 0,
	reactions : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'JEZugHcGvNCQ16Dy',
		),
		$client->reactionCustomEmoji(
			document_id : 4996799093596956986,
		),
		$client->reactionPaid(),
	),
);
```