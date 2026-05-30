# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 222

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
		id : -2956004475076555282,
		access_hash : 1217327942477477704,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 100,
		second_background_color : 90,
		third_background_color : 100,
		fourth_background_color : 68,
		intensity : 19,
		rotation : 12,
		emoticon : 'gx2Ccz6UtFKDGZjV',
	),
);
```