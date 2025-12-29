# reactionCount

**Description** : *Reactions*

**Layer** : 218

```tl
reactionCount#a3d1cb80 flags:# chosen_order:flags.0?int reaction:Reaction count:int = ReactionCount;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **chosen_order** | [`flags.0?int`](type/int) | If set, indicates that the current user also sent this reaction. The integer value indicates when was the reaction added: the bigger the value, the newer the reaction |
| <mark>reaction</mark> | [`Reaction`](type/Reaction) | The reaction |
| <mark>count</mark> | [`int`](type/int) | Number of users that reacted with this emoji |

---

## Type

[ReactionCount](type/ReactionCount)

---

## Example

```php
$reactionCount = $client->reactionCount(
	chosen_order : 24,
	reaction : $client->reactionEmpty(),
	count : 15,
);
```