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
			id : 2523266677577742225,
			access_hash : 4324604435133855001,
		),
		$client->inputWallPaperSlug(
			slug : 'qWJhILtFPxgSXrds',
		),
		$client->inputWallPaperNoFile(
			id : -4542477890917161291,
		),
	),
);
```