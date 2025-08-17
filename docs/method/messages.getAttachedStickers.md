# messages.getAttachedStickers

**Description** : *Get stickers attached to a photo or video*

**Layer** : 211

```tl
messages.getAttachedStickers#cc5b67cc media:InputStickeredMedia = Vector<StickerSetCovered>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>media</mark> | [`InputStickeredMedia`](type/InputStickeredMedia) | Stickered media |

---

## Result

[Vector<StickerSetCovered>](type/StickerSetCovered)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |

---

## Example

```php
$stickerSetCovered = $client->messages->getAttachedStickers(
	media : $client->inputStickeredMediaPhoto(
		id : $client->inputPhotoEmpty(),
	),
);
```