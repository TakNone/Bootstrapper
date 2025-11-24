# account.wallPapers

**Description** : *Installed wallpapers*

**Layer** : 218

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
			id : 8356681015445045876,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 6964034943927617625,
			slug : 'WmLF9O3C6fx5cBeq',
			document : $client->documentEmpty(
				id : 4765816366349137973,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 23,
				second_background_color : 84,
				third_background_color : 92,
				fourth_background_color : 36,
				intensity : 6,
				rotation : 94,
				emoticon : 'MmOqA3irB5oCc9Pf',
			),
		),
		$client->wallPaperNoFile(
			id : -8193888763823622495,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 59,
				second_background_color : 61,
				third_background_color : 36,
				fourth_background_color : 54,
				intensity : 85,
				rotation : 48,
				emoticon : 'HXSe7urh9ctUCi1n',
			),
		),
	),
);
```