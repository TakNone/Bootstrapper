# account.getMultiWallPapers

**Description** : *Get info about multiple wallpapers*

**Layer** : 214

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
			id : -7400615546934188634,
			access_hash : -6589678290209261669,
		),
		$client->inputWallPaperSlug(
			slug : '619Q3Sctv8BCAOao',
		),
		$client->inputWallPaperNoFile(
			id : -1326090321571286069,
		),
	),
);
```