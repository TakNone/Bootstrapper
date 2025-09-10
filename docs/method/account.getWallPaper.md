# account.getWallPaper

**Description** : *Get info about a certain wallpaper*

**Layer** : 214

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
		id : 2915503498340052534,
		access_hash : 8106061749161352118,
	),
);
```