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
		id : 8866063089764577607,
		access_hash : -2586131355493154783,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 74,
		second_background_color : 49,
		third_background_color : 10,
		fourth_background_color : 93,
		intensity : 74,
		rotation : 41,
		emoticon : 'Hv2xbuQCwYFIeWaS',
	),
);
```