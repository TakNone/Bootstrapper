# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 229

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
		id : -6256596028579367221,
		access_hash : -901255008875992984,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 26,
		second_background_color : 39,
		third_background_color : 8,
		fourth_background_color : 62,
		intensity : 37,
		rotation : 68,
		emoticon : 'GRNTjb963ABW5U1H',
	),
);
```