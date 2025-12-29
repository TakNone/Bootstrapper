# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 218

```tl
account.installWallPaper#feed5769 wallpaper:InputWallPaper settings:WallPaperSettings = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>wallpaper</mark> | [`InputWallPaper`](type/InputWallPaper) | Wallpaper to install |
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
$bool = $client->account->installWallPaper(
	wallpaper : $client->inputWallPaper(
		id : -4604968797933974932,
		access_hash : 6789286040832726335,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 81,
		second_background_color : 58,
		third_background_color : 50,
		fourth_background_color : 2,
		intensity : 76,
		rotation : 76,
		emoticon : 'C8R9I05a4gkShjvb',
	),
);
```