# messages.uninstallStickerSet

**Description** : *Uninstall a stickerset*

**Layer** : 211

```tl
messages.uninstallStickerSet#f96e55de stickerset:InputStickerSet = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | The stickerset to uninstall |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STICKERSET_INVALID** | `406` | The provided sticker set is invalid |

---

## Example

```php
$bool = $client->messages->uninstallStickerSet(
	stickerset : $client->inputStickerSetEmpty(),
);
```