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
			id : 2164253022527787246,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -7577016710985608898,
			slug : 'i7c2qlBZHPuAv5kt',
			document : $client->documentEmpty(
				id : -3953618538441660909,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 99,
				second_background_color : 54,
				third_background_color : 70,
				fourth_background_color : 66,
				intensity : 41,
				rotation : 28,
				emoticon : 'LdGAKrsumDW6eYo5',
			),
		),
		$client->wallPaperNoFile(
			id : -1944174387781203774,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 36,
				second_background_color : 59,
				third_background_color : 63,
				fourth_background_color : 4,
				intensity : 86,
				rotation : 21,
				emoticon : 'T16eOYcKX84raBJF',
			),
		),
	),
);
```