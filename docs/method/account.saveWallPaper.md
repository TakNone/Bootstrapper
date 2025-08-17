# account.saveWallPaper

**Description** : *Install/uninstall wallpaper*

**Layer** : 211

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
		id : -7519961314321438837,
		access_hash : 356692716939102124,
	),
	unsave : $client->boolFalse(),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 34,
		second_background_color : 4,
		third_background_color : 75,
		fourth_background_color : 50,
		intensity : 96,
		rotation : 79,
		emoticon : 'XeTIbRxFPskZLDqn',
	),
);
```