# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 227

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
		id : 8292779733268276829,
		access_hash : 7278658582428180798,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 72,
		second_background_color : 60,
		third_background_color : 30,
		fourth_background_color : 63,
		intensity : 80,
		rotation : 10,
		emoticon : 'kfarixWKXJdBA4NR',
	),
);
```