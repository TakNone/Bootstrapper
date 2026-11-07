# account.wallPapers

**Description** : *Installed wallpapers*

**Layer** : 233

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
			id : 906377968345167632,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -8842929172928625123,
			slug : 'Ki408X2BbpeqgoF5',
			document : $client->documentEmpty(
				id : 996539470775201378,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 62,
				second_background_color : 92,
				third_background_color : 60,
				fourth_background_color : 77,
				intensity : 42,
				rotation : 40,
				emoticon : 'DCtFqVInU3jweGpm',
			),
		),
		$client->wallPaperNoFile(
			id : -3183991253918952421,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 100,
				second_background_color : 74,
				third_background_color : 59,
				fourth_background_color : 28,
				intensity : 11,
				rotation : 60,
				emoticon : 'Nwxg1CB8mioTsnSG',
			),
		),
	),
);
```