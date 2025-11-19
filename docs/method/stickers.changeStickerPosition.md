# stickers.changeStickerPosition

**Description** : *Changes the absolute position of a sticker in the set to which it belongs\. The sticker set must have been created by the current user/bot*

**Layer** : 218

```tl
stickers.changeStickerPosition#ffb6d4ca sticker:InputDocument position:int = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sticker</mark> | [`InputDocument`](type/InputDocument) | The sticker |
| <mark>position</mark> | [`int`](type/int) | The new position of the sticker, zero-based |

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
$messagesStickerSet = $client->stickers->changeStickerPosition(
	sticker : $client->inputDocumentEmpty(),
	position : 18,
);
```