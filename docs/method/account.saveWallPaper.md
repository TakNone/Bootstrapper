# account.saveWallPaper

**Description** : *Install/uninstall wallpaper*

**Layer** : 222

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
		id : -7510569253825989999,
		access_hash : 6885096390115719943,
	),
	unsave : true,
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 11,
		second_background_color : 16,
		third_background_color : 45,
		fourth_background_color : 78,
		intensity : 95,
		rotation : 93,
		emoticon : 'lHpMktUjzILi5WCr',
	),
);
```