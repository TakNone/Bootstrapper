# account.wallPapers

**Description** : *Installed wallpapers*

**Layer** : 216

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
			id : 832393928268813675,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 1897880690876905645,
			slug : '3UZKc5sF8erSDdaE',
			document : $client->documentEmpty(
				id : 6178862310121679178,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 74,
				second_background_color : 64,
				third_background_color : 8,
				fourth_background_color : 2,
				intensity : 29,
				rotation : 96,
				emoticon : '9UHkXqzlw8xGKMZn',
			),
		),
		$client->wallPaperNoFile(
			id : 5051029976749954396,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 100,
				second_background_color : 23,
				third_background_color : 16,
				fourth_background_color : 1,
				intensity : 89,
				rotation : 0,
				emoticon : 'LWnlFayi1UmqTheV',
			),
		),
	),
);
```