# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 214

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
		id : -299406942784852515,
		access_hash : -2904835406813199717,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 79,
		second_background_color : 20,
		third_background_color : 59,
		fourth_background_color : 90,
		intensity : 2,
		rotation : 84,
		emoticon : 'kIAyov7Fd1mYHU2Z',
	),
);
```