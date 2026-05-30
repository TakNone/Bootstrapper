# chatReactionsSome

**Description** : *Some reactions are allowed*

**Layer** : 225

```tl
chatReactionsSome#661d4037 reactions:Vector<Reaction> = ChatReactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>reactions</mark> | [`Vector<Reaction>`](type/Reaction) | Allowed set of reactions: the reactions_in_chat_max configuration field indicates the maximum number of reactions that can be specified in this field |

---

## Type

[ChatReactions](type/ChatReactions)

---

## Example

```php
$chatReactions = $client->chatReactionsSome(
	reactions : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'EFY82UO1tAi0qW6R',
		),
		$client->reactionCustomEmoji(
			document_id : 3357731203947062755,
		),
		$client->reactionPaid(),
	),
);
```