# savedReactionTag

**Description** : *Info about a saved message reaction tag &raquo;*

**Layer** : 216

```tl
savedReactionTag#cb6ff828 flags:# reaction:Reaction title:flags.0?string count:int = SavedReactionTag;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>reaction</mark> | [`Reaction`](type/Reaction) | Reaction associated to the tag |
| **title** | [`flags.0?string`](type/string) | Custom tag name assigned by the user (max 12 UTF-8 chars) |
| <mark>count</mark> | [`int`](type/int) | Number of messages tagged with this tag |

---

## Type

[SavedReactionTag](type/SavedReactionTag)

---

## Example

```php
$savedReactionTag = $client->savedReactionTag(
	reaction : $client->reactionEmpty(),
	title : 'OdAms9Ff5x4HPSIM',
	count : 65,
);
```