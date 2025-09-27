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
	hash : 0,
	wallpapers : array(
		$client->wallPaper(
			id : 6857528860095710418,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -2416318792917857174,
			slug : 'tLsi3W7ECM2Hnhdf',
			document : $client->documentEmpty(
				id : 3611361830372339059,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 72,
				second_background_color : 18,
				third_background_color : 56,
				fourth_background_color : 62,
				intensity : 69,
				rotation : 86,
				emoticon : 'D2RrUBFhVCAEXZyL',
			),
		),
		$client->wallPaperNoFile(
			id : -1633981732246406907,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 69,
				second_background_color : 89,
				third_background_color : 81,
				fourth_background_color : 95,
				intensity : 80,
				rotation : 20,
				emoticon : '1LAmyBkeJT4jzYHh',
			),
		),
	),
);
```