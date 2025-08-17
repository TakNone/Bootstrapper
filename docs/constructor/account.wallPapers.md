# account.wallPapers

**Description** : *Installed wallpapers*

**Layer** : 211

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
	hash : -2534565424402407756,
	wallpapers : array(
		$client->wallPaper(
			id : -5811277243611230779,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 1787944060133450654,
			slug : 'rhbONBUw9Z6mgoYC',
			document : $client->documentEmpty(
				id : 2154543396316379877,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 49,
				second_background_color : 50,
				third_background_color : 99,
				fourth_background_color : 25,
				intensity : 58,
				rotation : 6,
				emoticon : 'j9N70bJHCwlVvxag',
			),
		),
		$client->wallPaperNoFile(
			id : 2884696373159298828,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 97,
				second_background_color : 80,
				third_background_color : 29,
				fourth_background_color : 5,
				intensity : 9,
				rotation : 5,
				emoticon : '4IGk0p9HyFjKcThJ',
			),
		),
	),
);
```