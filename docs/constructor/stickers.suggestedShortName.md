# stickers.suggestedShortName

**Description** : *A suggested short name for a stickerpack*

**Layer** : 211

```tl
stickers.suggestedShortName#85fea03f short_name:string = stickers.SuggestedShortName;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>short_name</mark> | [`string`](type/string) | Suggested short name |

---

## Type

[stickers.SuggestedShortName](type/stickers.SuggestedShortName)

---

## Example

```php
$stickersSuggestedShortName = $client->stickers->suggestedShortName(
	short_name : 'qokvW3t6axebzCRS',
);
```