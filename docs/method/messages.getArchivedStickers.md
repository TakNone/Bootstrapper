# messages.getArchivedStickers

**Description** : *Get all archived stickers*

**Layer** : 214

```tl
messages.getArchivedStickers#57f17692 flags:# masks:flags.0?true emojis:flags.1?true offset_id:long limit:int = messages.ArchivedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **masks** | [`flags.0?true`](type/true) | Get mask stickers |
| **emojis** | [`flags.1?true`](type/true) | Get custom emoji stickers |
| <mark>offset_id</mark> | [`long`](type/long) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[messages.ArchivedStickers](type/messages.ArchivedStickers)

---

## Example

```php
$messagesArchivedStickers = $client->messages->getArchivedStickers(
	masks : true,
	emojis : true,
	offset_id : 2577514681584656054,
	limit : 29,
);
```