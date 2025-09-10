# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 214

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
		id : 1049739938120848872,
		access_hash : -9098243728303087100,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 69,
		second_background_color : 23,
		third_background_color : 17,
		fourth_background_color : 33,
		intensity : 77,
		rotation : 74,
		emoticon : '2i5HSlLn41buakGy',
	),
);
```