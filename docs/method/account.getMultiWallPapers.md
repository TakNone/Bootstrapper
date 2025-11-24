# account.getMultiWallPapers

**Description** : *Get info about multiple wallpapers*

**Layer** : 218

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
			id : -4313249617780834597,
			access_hash : -1948163600636830800,
		),
		$client->inputWallPaperSlug(
			slug : '9Me8tnajr0wVUZy4',
		),
		$client->inputWallPaperNoFile(
			id : -5446413287270157837,
		),
	),
);
```