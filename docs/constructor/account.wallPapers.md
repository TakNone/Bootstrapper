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
	hash : 1402572406050551886,
	wallpapers : array(
		$client->wallPaper(
			id : 8968411794967723927,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -8288356653904551665,
			slug : 'XUsf8AIb3qvcEQVH',
			document : $client->documentEmpty(
				id : 5858790140614609644,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 62,
				second_background_color : 9,
				third_background_color : 51,
				fourth_background_color : 50,
				intensity : 41,
				rotation : 6,
				emoticon : 'YJhQWbnFAgmKE3dz',
			),
		),
		$client->wallPaperNoFile(
			id : 849693538474507844,
			default : true,
			dark : true,
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 73,
				second_background_color : 43,
				third_background_color : 98,
				fourth_background_color : 19,
				intensity : 66,
				rotation : 35,
				emoticon : 'k8csgVxwytLvb6XY',
			),
		),
	),
);
```