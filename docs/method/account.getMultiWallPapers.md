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
			id : -7885529089870548436,
			access_hash : -7316854541932458132,
		),
		$client->inputWallPaperSlug(
			slug : 'SVKUJYpwxI2BWtrQ',
		),
		$client->inputWallPaperNoFile(
			id : -2988541308192806414,
		),
	),
);
```