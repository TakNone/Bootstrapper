# account.saveWallPaper

**Description** : *Install/uninstall wallpaper*

**Layer** : 233

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
		id : -1389144860141035757,
		access_hash : 4114440439995625778,
	),
	unsave : false,
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 99,
		second_background_color : 69,
		third_background_color : 4,
		fourth_background_color : 9,
		intensity : 25,
		rotation : 23,
		emoticon : 'dg4blE3jTLUzF1W2',
	),
);
```