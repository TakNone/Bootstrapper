# messages.reactions

**Description** : *List of message reactions*

**Layer** : 211

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
	hash : 5600150204919174021,
	reactions : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'z7rCSNYB5JG0T6kP',
		),
		$client->reactionCustomEmoji(
			document_id : 4974199111563277543,
		),
		$client->reactionPaid(),
	),
);
```