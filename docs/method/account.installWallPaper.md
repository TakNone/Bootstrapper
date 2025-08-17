# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 211

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
		id : 1078301446862625245,
		access_hash : 3779335253321691793,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 63,
		second_background_color : 47,
		third_background_color : 84,
		fourth_background_color : 39,
		intensity : 19,
		rotation : 7,
		emoticon : 'wan0K1WMlijbv6g8',
	),
);
```