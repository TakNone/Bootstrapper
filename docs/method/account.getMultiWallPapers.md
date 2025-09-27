# account.getMultiWallPapers

**Description** : *Get info about multiple wallpapers*

**Layer** : 214

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
			id : -7144815578957301878,
			access_hash : 8722659853230925275,
		),
		$client->inputWallPaperSlug(
			slug : 'lf7Z4p6mUWhdtED3',
		),
		$client->inputWallPaperNoFile(
			id : 6612689896826586271,
		),
	),
);
```