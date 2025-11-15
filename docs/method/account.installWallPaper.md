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
		id : -6468747251897317565,
		access_hash : -8772364489663016584,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 24,
		second_background_color : 39,
		third_background_color : 19,
		fourth_background_color : 60,
		intensity : 65,
		rotation : 60,
		emoticon : 'bx8E4cz0jdNuR57k',
	),
);
```