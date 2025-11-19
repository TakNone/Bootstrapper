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
			id : 5403745513087475237,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -2089667287964822396,
			slug : 'nVCkZIM1LQ6t37ew',
			document : $client->documentEmpty(
				id : -920842247786341748,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 37,
				second_background_color : 64,
				third_background_color : 65,
				fourth_background_color : 90,
				intensity : 19,
				rotation : 91,
				emoticon : 'iGfw65tygeMA74NF',
			),
		),
		$client->wallPaperNoFile(
			id : -636959908015187874,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 2,
				second_background_color : 2,
				third_background_color : 42,
				fourth_background_color : 1,
				intensity : 88,
				rotation : 78,
				emoticon : 'AZX9B8updMqrxkab',
			),
		),
	),
);
```