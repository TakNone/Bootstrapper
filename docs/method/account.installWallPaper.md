# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 218

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
		id : 7272929192495242242,
		access_hash : -4087323115720013194,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 17,
		second_background_color : 23,
		third_background_color : 18,
		fourth_background_color : 89,
		intensity : 50,
		rotation : 38,
		emoticon : 'AQNc54KSpmvhXFiO',
	),
);
```