# messages.reactions

**Description** : *List of message reactions*

**Layer** : 216

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
			emoticon : '8NGjFvPWDer97E2A',
		),
		$client->reactionCustomEmoji(
			document_id : -6315690942725149323,
		),
		$client->reactionPaid(),
	),
);
```