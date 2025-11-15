# messages.getStickerSet

**Description** : *Get info about a stickerset*

**Layer** : 218

```tl
messages.getStickerSet#c8a0ec74 stickerset:InputStickerSet hash:int = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | Stickerset |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |

---

## Result

[messages.StickerSet](type/messages.StickerSet)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **EMOTICON_STICKERPACK_MISSING** | `400` | inputStickerSetDice.emoji cannot be empty |
| **STICKERSET_INVALID** | `406` | The provided sticker set is invalid |

---

## Example

```php
$messagesStickerSet = $client->messages->getStickerSet(
	stickerset : $client->inputStickerSetEmpty(),
	hash : 0,
);
```