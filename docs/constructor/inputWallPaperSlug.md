# inputWallPaperSlug

**Description** : *Wallpaper by slug (a unique ID, obtained from a wallpaper link »)*

**Layer** : 211

```tl
inputWallPaperSlug#72091c80 slug:string = InputWallPaper;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | Unique wallpaper ID |

---

## Type

[InputWallPaper](type/InputWallPaper)

---

## Example

```php
$inputWallPaper = $client->inputWallPaperSlug(
	slug : 'M4HRy9ESGaTglb6B',
);
```