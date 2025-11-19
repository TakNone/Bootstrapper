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
			id : -2510596017660931067,
			access_hash : -5155910744311468821,
		),
		$client->inputWallPaperSlug(
			slug : 'VjtbF5zhZfUC6Qrd',
		),
		$client->inputWallPaperNoFile(
			id : -5936047899085288432,
		),
	),
);
```