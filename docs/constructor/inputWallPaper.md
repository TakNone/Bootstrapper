# inputWallPaper

**Description** : *Wallpaper*

**Layer** : 225

```tl
inputWallPaper#e630b979 id:long access_hash:long = InputWallPaper;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Wallpaper ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |

---

## Type

[InputWallPaper](type/InputWallPaper)

---

## Example

```php
$inputWallPaper = $client->inputWallPaper(
	id : 2890784352798572674,
	access_hash : 8409675467203541806,
);
```