# account.saveWallPaper

**Description** : *Install/uninstall wallpaper*

**Layer** : 225

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
		id : 7942832091141612239,
		access_hash : -4688782955067889059,
	),
	unsave : false,
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 89,
		second_background_color : 3,
		third_background_color : 94,
		fourth_background_color : 89,
		intensity : 99,
		rotation : 59,
		emoticon : 'xkg0OHKYSaUc4Gnj',
	),
);
```