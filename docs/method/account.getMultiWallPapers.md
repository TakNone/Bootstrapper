# account.getMultiWallPapers

**Description** : *Get info about multiple wallpapers*

**Layer** : 233

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
			id : -8524941001028550256,
			access_hash : 6434471795180011099,
		),
		$client->inputWallPaperSlug(
			slug : 'VCY4RX3sOkpG5eD9',
		),
		$client->inputWallPaperNoFile(
			id : -4369189261341947683,
		),
	),
);
```