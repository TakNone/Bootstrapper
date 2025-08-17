# stickers.removeStickerFromSet

**Description** : *Remove a sticker from the set where it belongs. The sticker set must have been created by the current user/bot*

**Layer** : 211

```tl
stickers.removeStickerFromSet#f7760f51 sticker:InputDocument = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sticker</mark> | [`InputDocument`](type/InputDocument) | The sticker to remove |

---

## Result

[messages.StickerSet](type/messages.StickerSet)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STICKER_INVALID** | `400` | The provided sticker is invalid |

---

## Example

```php
$messagesStickerSet = $client->stickers->removeStickerFromSet(
	sticker : $client->inputDocumentEmpty(),
);
```