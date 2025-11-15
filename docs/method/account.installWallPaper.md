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
		id : 8472634595021977487,
		access_hash : 2773405276431025022,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 7,
		second_background_color : 25,
		third_background_color : 25,
		fourth_background_color : 48,
		intensity : 23,
		rotation : 92,
		emoticon : 'MeqTtpWCIu8yGbZi',
	),
);
```