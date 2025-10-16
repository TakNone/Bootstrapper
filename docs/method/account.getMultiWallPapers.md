# account.getMultiWallPapers

**Description** : *Get info about multiple wallpapers*

**Layer** : 216

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
			id : 5278343335602393330,
			access_hash : -8630179247668800972,
		),
		$client->inputWallPaperSlug(
			slug : 'KAns806eRYkMj3Ho',
		),
		$client->inputWallPaperNoFile(
			id : 2625591475894111424,
		),
	),
);
```