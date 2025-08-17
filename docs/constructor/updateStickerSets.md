# updateStickerSets

**Description** : *Installed stickersets have changed, the client should refetch them as described in the docs*

**Layer** : 211

```tl
updateStickerSets#31c24808 flags:# masks:flags.0?true emojis:flags.1?true = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **masks** | [`flags.0?true`](type/true) | Whether mask stickersets have changed |
| **emojis** | [`flags.1?true`](type/true) | Whether the list of installed custom emoji stickersets has changed |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStickerSets(
	masks : true,
	emojis : true,
);
```