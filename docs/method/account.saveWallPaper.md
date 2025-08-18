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
		id : 2897958739456788101,
		access_hash : 5403432721828414808,
	),
	unsave : false,
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 30,
		second_background_color : 18,
		third_background_color : 85,
		fourth_background_color : 25,
		intensity : 18,
		rotation : 56,
		emoticon : 'uWrzCXhI1jpeK48N',
	),
);
```