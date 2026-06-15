# account.getMultiWallPapers

**Description** : *Get info about multiple wallpapers*

**Layer** : 227

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
			id : 3054452403061052126,
			access_hash : 3223964479262201624,
		),
		$client->inputWallPaperSlug(
			slug : 'GRAD31vh26jLB8wC',
		),
		$client->inputWallPaperNoFile(
			id : 6954334056000336500,
		),
	),
);
```