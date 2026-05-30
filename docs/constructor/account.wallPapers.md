# account.wallPapers

**Description** : *Installed wallpapers*

**Layer** : 222

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
			id : -3598052693627177446,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -5797769925799351351,
			slug : 'r7vVI0oNdfLtKMcw',
			document : $client->documentEmpty(
				id : 662291880313024567,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 61,
				second_background_color : 35,
				third_background_color : 12,
				fourth_background_color : 61,
				intensity : 91,
				rotation : 51,
				emoticon : 'kVaPugDY64pWqyCX',
			),
		),
		$client->wallPaperNoFile(
			id : -755924193267857668,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 30,
				second_background_color : 17,
				third_background_color : 75,
				fourth_background_color : 31,
				intensity : 0,
				rotation : 65,
				emoticon : 'Ggr6KI3kmxWzFphV',
			),
		),
	),
);
```