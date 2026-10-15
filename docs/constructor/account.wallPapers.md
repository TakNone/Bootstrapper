# account.wallPapers

**Description** : *Installed wallpapers*

**Layer** : 229

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
			id : -3855837914049111453,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 5849888896966978872,
			slug : 'EPIiuQKYtNySse9c',
			document : $client->documentEmpty(
				id : -5425950980476945614,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 36,
				second_background_color : 71,
				third_background_color : 24,
				fourth_background_color : 2,
				intensity : 43,
				rotation : 60,
				emoticon : 'FpC4JSPrWHG9Atug',
			),
		),
		$client->wallPaperNoFile(
			id : -6573760141616826368,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 60,
				second_background_color : 51,
				third_background_color : 95,
				fourth_background_color : 88,
				intensity : 2,
				rotation : 23,
				emoticon : 'cb6xzjrNV4O8RLJH',
			),
		),
	),
);
```