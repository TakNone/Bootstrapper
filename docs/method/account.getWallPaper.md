# account.getWallPaper

**Description** : *Get info about a certain wallpaper*

**Layer** : 229

```tl
account.getWallPaper#fc8ddbea wallpaper:InputWallPaper = WallPaper;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>wallpaper</mark> | [`InputWallPaper`](type/InputWallPaper) | The wallpaper to get info about |

---

## Result

[WallPaper](type/WallPaper)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **WALLPAPER_INVALID** | `400` | The specified wallpaper is invalid |

---

## Example

```php
$wallPaper = $client->account->getWallPaper(
	wallpaper : $client->inputWallPaper(
		id : -7841995783775084006,
		access_hash : -8585091274916511794,
	),
);
```