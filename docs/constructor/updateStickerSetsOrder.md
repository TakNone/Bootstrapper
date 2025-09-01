# updateStickerSetsOrder

**Description** : *The order of stickersets was changed*

**Layer** : 214

```tl
updateStickerSetsOrder#bb2d201 flags:# masks:flags.0?true emojis:flags.1?true order:Vector<long> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **masks** | [`flags.0?true`](type/true) | Whether the updated stickers are mask stickers |
| **emojis** | [`flags.1?true`](type/true) | Whether the updated stickers are custom emoji stickers |
| <mark>order</mark> | [`Vector<long>`](type/long) | New sticker order by sticker ID |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStickerSetsOrder(
	masks : true,
	emojis : true,
	order : array(7923905270679615648),
);
```