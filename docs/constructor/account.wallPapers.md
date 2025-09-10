# account.wallPapers

**Description** : *Installed wallpapers*

**Layer** : 214

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
	hash : -9222737811690165254,
	wallpapers : array(
		$client->wallPaper(
			id : -7375733293996287617,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 6371492819430580717,
			slug : 'UFqfw2Q34yuEJcAD',
			document : $client->documentEmpty(
				id : 3647074614486314081,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 69,
				second_background_color : 0,
				third_background_color : 13,
				fourth_background_color : 45,
				intensity : 83,
				rotation : 60,
				emoticon : '1ceNRQAYTX3aGKSz',
			),
		),
		$client->wallPaperNoFile(
			id : -4166332691612790752,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 64,
				second_background_color : 57,
				third_background_color : 77,
				fourth_background_color : 17,
				intensity : 4,
				rotation : 33,
				emoticon : 'BTSLWjUMtDFlERN7',
			),
		),
	),
);
```