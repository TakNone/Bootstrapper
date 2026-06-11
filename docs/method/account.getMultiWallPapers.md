# account.getMultiWallPapers

**Description** : *Get info about multiple wallpapers*

**Layer** : 227

```tl
account.getMultiWallPapers#65ad71dc wallpapers:Vector<InputWallPaper> = Vector<WallPaper>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>wallpapers</mark> | [`Vector<InputWallPaper>`](type/InputWallPaper) | Wallpapers to fetch info about |

---

## Result

[Vector<WallPaper>](type/WallPaper)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **WALLPAPER_INVALID** | `400` | The specified wallpaper is invalid |

---

## Example

```php
$wallPaper = $client->account->getMultiWallPapers(
	wallpapers : array(
		$client->inputWallPaper(
			id : 1970318143701999165,
			access_hash : -8594069198062572225,
		),
		$client->inputWallPaperSlug(
			slug : 'kN26j37WK5wuVElP',
		),
		$client->inputWallPaperNoFile(
			id : -2074985476237688038,
		),
	),
);
```