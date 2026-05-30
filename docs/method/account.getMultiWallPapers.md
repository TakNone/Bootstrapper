# account.getMultiWallPapers

**Description** : *Get info about multiple wallpapers*

**Layer** : 225

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
			id : 8759991077958273591,
			access_hash : -697606543233063431,
		),
		$client->inputWallPaperSlug(
			slug : '5cfRQm8Fahd1H4VC',
		),
		$client->inputWallPaperNoFile(
			id : -6207064537823787433,
		),
	),
);
```