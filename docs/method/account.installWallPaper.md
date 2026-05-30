# account.installWallPaper

**Description** : *Install wallpaper*

**Layer** : 222

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
		id : -4601392211583401755,
		access_hash : -3790343827599312895,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 66,
		second_background_color : 8,
		third_background_color : 66,
		fourth_background_color : 78,
		intensity : 86,
		rotation : 27,
		emoticon : 'EthfS5Fx2DdIGAkV',
	),
);
```