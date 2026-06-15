# account.wallPapers

**Description** : *Installed wallpapers*

**Layer** : 227

```tl
account.wallPapers#cdc3858c hash:long wallpapers:Vector<WallPaper> = account.WallPapers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>wallpapers</mark> | [`Vector<WallPaper>`](type/WallPaper) | Wallpapers |

---

## Type

[account.WallPapers](type/account.WallPapers)

---

## Example

```php
$accountWallPapers = $client->account->wallPapers(
	hash : 0,
	wallpapers : array(
		$client->wallPaper(
			id : 3590302987779137237,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -4633537772487172381,
			slug : 'sX34m5w6TNKqxeck',
			document : $client->documentEmpty(
				id : -449436959731807090,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 97,
				second_background_color : 100,
				third_background_color : 88,
				fourth_background_color : 34,
				intensity : 55,
				rotation : 15,
				emoticon : 'RYwf1zpsncUS7Wih',
			),
		),
		$client->wallPaperNoFile(
			id : -4091378619494310920,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 66,
				second_background_color : 86,
				third_background_color : 38,
				fourth_background_color : 71,
				intensity : 19,
				rotation : 84,
				emoticon : 'WMRY0UzOu8QSVlaG',
			),
		),
	),
);
```