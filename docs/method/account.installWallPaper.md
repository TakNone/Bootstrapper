# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 216

```tl
account.installWallPaper#feed5769 wallpaper:InputWallPaper settings:WallPaperSettings = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>wallpaper</mark> | [`InputWallPaper`](type/InputWallPaper) | Wallpaper to install |
| <mark>settings</mark> | [`WallPaperSettings`](type/WallPaperSettings) | Wallpaper settings |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **WALLPAPER_INVALID** | `400` | The specified wallpaper is invalid |

---

## Example

```php
$bool = $client->account->installWallPaper(
	wallpaper : $client->inputWallPaper(
		id : -4844318350931373536,
		access_hash : -4615707810321912746,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 79,
		second_background_color : 56,
		third_background_color : 43,
		fourth_background_color : 1,
		intensity : 7,
		rotation : 74,
		emoticon : 'Cxz2XQ3l5pJVqstD',
	),
);
```