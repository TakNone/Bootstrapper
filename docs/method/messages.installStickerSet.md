# messages.installStickerSet

**Description** : *Install a stickerset*

**Layer** : 211

```tl
messages.installStickerSet#c78fe460 stickerset:InputStickerSet archived:Bool = messages.StickerSetInstallResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | Stickerset to install |
| <mark>archived</mark> | [`Bool`](type/Bool) | Whether to archive stickerset |

---

## Result

[messages.StickerSetInstallResult](type/messages.StickerSetInstallResult)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STICKERSET_INVALID** | `406` | The provided sticker set is invalid |

---

## Example

```php
$messagesStickerSetInstallResult = $client->messages->installStickerSet(
	stickerset : $client->inputStickerSetEmpty(),
	archived : $client->boolFalse(),
);
```