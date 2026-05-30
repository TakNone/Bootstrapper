# account.getMultiWallPapers

**Description** : *Get info about multiple wallpapers*

**Layer** : 222

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
			id : -6501398585569996143,
			access_hash : -1651993095957211897,
		),
		$client->inputWallPaperSlug(
			slug : '5sZdBSkyHcptKlz2',
		),
		$client->inputWallPaperNoFile(
			id : -2518758479649997992,
		),
	),
);
```