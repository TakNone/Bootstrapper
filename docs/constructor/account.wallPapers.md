# account.wallPapers

**Description** : *Installed wallpapers*

**Layer** : 225

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
			id : -2190707334802428936,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 7905023045743414515,
			slug : 'j35PMdhlS9spcHuw',
			document : $client->documentEmpty(
				id : 5524898659292240306,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 100,
				second_background_color : 70,
				third_background_color : 26,
				fourth_background_color : 93,
				intensity : 1,
				rotation : 44,
				emoticon : 'LEFmjVKAsZyPvIoU',
			),
		),
		$client->wallPaperNoFile(
			id : -7881255735655402417,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 34,
				second_background_color : 4,
				third_background_color : 25,
				fourth_background_color : 25,
				intensity : 61,
				rotation : 34,
				emoticon : 'FX3E7TgSc9td2sf1',
			),
		),
	),
);
```