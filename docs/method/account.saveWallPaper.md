# account.saveWallPaper

**Description** : *Install/uninstall wallpaper*

**Layer** : 227

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
		id : 8212619723339037994,
		access_hash : -6174508171536331878,
	),
	unsave : true,
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 65,
		second_background_color : 63,
		third_background_color : 49,
		fourth_background_color : 93,
		intensity : 27,
		rotation : 36,
		emoticon : 'GCxjhanwvuP6W1mT',
	),
);
```