# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 225

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
		id : 2427710120783035073,
		access_hash : -2236092784734771799,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 44,
		second_background_color : 32,
		third_background_color : 59,
		fourth_background_color : 9,
		intensity : 70,
		rotation : 26,
		emoticon : 'BXH30sheiKMvQUxr',
	),
);
```