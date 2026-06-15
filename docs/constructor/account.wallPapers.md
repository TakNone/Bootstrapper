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
			id : -7110850860324248424,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 756823605202641573,
			slug : 'lGQfLXsawj89x5Cd',
			document : $client->documentEmpty(
				id : 5577040680643992062,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 97,
				second_background_color : 67,
				third_background_color : 62,
				fourth_background_color : 88,
				intensity : 33,
				rotation : 26,
				emoticon : 'VcITp13qQlyMY5XP',
			),
		),
		$client->wallPaperNoFile(
			id : 7524342610663970796,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 12,
				second_background_color : 20,
				third_background_color : 7,
				fourth_background_color : 87,
				intensity : 64,
				rotation : 82,
				emoticon : 'r73ENjkflgDoCJS6',
			),
		),
	),
);
```