# inputStickerSetDice

**Description** : *Used for fetching animated dice stickers*

**Layer** : 214

```tl
inputStickerSetDice#e67f520e emoticon:string = InputStickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoticon</mark> | [`string`](type/string) | The emoji, for now ,  and  are supported |

---

## Type

[InputStickerSet](type/InputStickerSet)

---

## Example

```php
$inputStickerSet = $client->inputStickerSetDice(
	emoticon : 'Y9heBNLSsg4vXc5l',
);
```