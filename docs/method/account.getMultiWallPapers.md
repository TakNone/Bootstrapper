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
			id : 1482949411736120462,
			access_hash : -6832104997713242691,
		),
		$client->inputWallPaperSlug(
			slug : 'AJmXYEhLTxeqtWNB',
		),
		$client->inputWallPaperNoFile(
			id : -4796932175338653482,
		),
	),
);
```