# account.getMultiWallPapers

**Description** : *Get info about multiple wallpapers*

**Layer** : 229

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
			id : -1156942390591836821,
			access_hash : 1804967239772220022,
		),
		$client->inputWallPaperSlug(
			slug : 'oOAmERkp32l5nDys',
		),
		$client->inputWallPaperNoFile(
			id : -6796613705064347622,
		),
	),
);
```