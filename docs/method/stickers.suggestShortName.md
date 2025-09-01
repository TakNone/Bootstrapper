# stickers.suggestShortName

**Description** : *Suggests a short name for a given stickerpack name*

**Layer** : 214

```tl
stickers.suggestShortName#4dafc503 title:string = stickers.SuggestedShortName;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`string`](type/string) | Sticker pack name |

---

## Result

[stickers.SuggestedShortName](type/stickers.SuggestedShortName)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **TITLE_INVALID** | `400` | The specified stickerpack title is invalid |

---

## Example

```php
$stickersSuggestedShortName = $client->stickers->suggestShortName(
	title : 'TvDIqrmh3j168Pkt',
);
```