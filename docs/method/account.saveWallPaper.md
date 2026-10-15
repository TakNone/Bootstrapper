# account.saveWallPaper

**Description** : *Install/uninstall wallpaper*

**Layer** : 229

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
		id : 1584618013075501580,
		access_hash : -2766540803113886592,
	),
	unsave : true,
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 87,
		second_background_color : 41,
		third_background_color : 10,
		fourth_background_color : 23,
		intensity : 39,
		rotation : 83,
		emoticon : 'zCIPr8FhROiD1E63',
	),
);
```