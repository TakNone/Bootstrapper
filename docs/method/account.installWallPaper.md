# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 211

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
		id : -4056891545524953694,
		access_hash : -8557621999235163158,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 37,
		second_background_color : 77,
		third_background_color : 32,
		fourth_background_color : 46,
		intensity : 21,
		rotation : 76,
		emoticon : 'txs8GVobwqIzXhE1',
	),
);
```