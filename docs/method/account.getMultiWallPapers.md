# account.getMultiWallPapers

**Description** : *Get info about multiple wallpapers*

**Layer** : 211

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
			id : 8434182397563252976,
			access_hash : 4728741986462089930,
		),
		$client->inputWallPaperSlug(
			slug : 'Tz2OCNFh61X7ZRk5',
		),
		$client->inputWallPaperNoFile(
			id : 5304887020354402679,
		),
	),
);
```