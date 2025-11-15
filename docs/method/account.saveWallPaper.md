# account.saveWallPaper

**Description** : *Install/uninstall wallpaper*

**Layer** : 216

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
		id : 3905292709220811628,
		access_hash : 2722438790073396874,
	),
	unsave : false,
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 68,
		second_background_color : 24,
		third_background_color : 30,
		fourth_background_color : 58,
		intensity : 19,
		rotation : 35,
		emoticon : 'FRyVAW9bCcj7PKDd',
	),
);
```