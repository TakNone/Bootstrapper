# chatReactionsSome

**Description** : *Some reactions are allowed*

**Layer** : 218

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
			emoticon : '2O517bJYNfzslcwy',
		),
		$client->reactionCustomEmoji(
			document_id : -1243211555338304442,
		),
		$client->reactionPaid(),
	),
);
```