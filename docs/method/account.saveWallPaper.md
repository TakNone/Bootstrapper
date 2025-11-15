# account.saveWallPaper

**Description** : *Install/uninstall wallpaper*

**Layer** : 218

```tl
account.saveWallPaper#6c5a5b37 wallpaper:InputWallPaper unsave:Bool settings:WallPaperSettings = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>wallpaper</mark> | [`InputWallPaper`](type/InputWallPaper) | Wallpaper to install or uninstall |
| <mark>unsave</mark> | [`Bool`](type/Bool) | Uninstall wallpaper? |
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
$bool = $client->account->saveWallPaper(
	wallpaper : $client->inputWallPaper(
		id : -6225442377947986376,
		access_hash : 8408290318512014338,
	),
	unsave : true,
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 94,
		second_background_color : 37,
		third_background_color : 93,
		fourth_background_color : 87,
		intensity : 19,
		rotation : 25,
		emoticon : 'aBM8n7ijb9Oy2uKe',
	),
);
```