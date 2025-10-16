# account.wallPapers

**Description** : *Installed wallpapers*

**Layer** : 216

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
			id : 8662763934612893241,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 2819212776305574928,
			slug : 'Qmw8ibpuBv5SqLCP',
			document : $client->documentEmpty(
				id : 1654102682912875220,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 92,
				second_background_color : 81,
				third_background_color : 40,
				fourth_background_color : 45,
				intensity : 72,
				rotation : 92,
				emoticon : 'Ewixq74WpSb6tFcz',
			),
		),
		$client->wallPaperNoFile(
			id : 107571895903894384,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 58,
				second_background_color : 80,
				third_background_color : 3,
				fourth_background_color : 21,
				intensity : 66,
				rotation : 22,
				emoticon : 'ZOaQn4sgUGpoq6wH',
			),
		),
	),
);
```