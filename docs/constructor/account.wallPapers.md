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
			id : 2810256950024989856,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -6645595607274581569,
			slug : 'Rq5PaKv9mYgd37Vl',
			document : $client->documentEmpty(
				id : 546764270594362239,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 2,
				second_background_color : 72,
				third_background_color : 19,
				fourth_background_color : 83,
				intensity : 69,
				rotation : 22,
				emoticon : '0594WjVEfxI2ntuR',
			),
		),
		$client->wallPaperNoFile(
			id : -7687996969934057661,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 56,
				second_background_color : 91,
				third_background_color : 65,
				fourth_background_color : 27,
				intensity : 50,
				rotation : 91,
				emoticon : 'Aj1DVhIxz8Fwgnsi',
			),
		),
	),
);
```