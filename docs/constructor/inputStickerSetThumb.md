# inputStickerSetThumb

**Description** : *Location of stickerset thumbnail \(see files\)*

**Layer** : 218

```tl
inputStickerSetThumb#9d84f3db stickerset:InputStickerSet thumb_version:int = InputFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | Sticker set |
| <mark>thumb_version</mark> | [`int`](type/int) | Thumbnail version |

---

## Type

[InputFileLocation](type/InputFileLocation)

---

## Example

```php
$inputFileLocation = $client->inputStickerSetThumb(
	stickerset : $client->inputStickerSetEmpty(),
	thumb_version : 78,
);
```