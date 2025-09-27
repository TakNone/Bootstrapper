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
		id : 5121138793404051918,
		access_hash : -6221879316235137354,
	),
	unsave : false,
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 50,
		second_background_color : 61,
		third_background_color : 72,
		fourth_background_color : 91,
		intensity : 57,
		rotation : 63,
		emoticon : 'fqFEeo2DT9HzIsb6',
	),
);
```