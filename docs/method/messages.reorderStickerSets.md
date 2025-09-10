# messages.reorderStickerSets

**Description** : *Reorder installed stickersets*

**Layer** : 214

```tl
messages.reorderStickerSets#78337739 flags:# masks:flags.0?true emojis:flags.1?true order:Vector<long> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **masks** | [`flags.0?true`](type/true) | Reorder mask stickersets |
| **emojis** | [`flags.1?true`](type/true) | Reorder custom emoji stickersets |
| <mark>order</mark> | [`Vector<long>`](type/long) | New stickerset order by stickerset IDs |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->reorderStickerSets(
	masks : true,
	emojis : true,
	order : array(-555906170156335569),
);
```