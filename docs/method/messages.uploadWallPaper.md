# messages.uploadWallPaper

**Layer** : 214

```tl
messages.uploadWallPaper#dd853661 file:InputFile mime_type:string settings:WallPaperSettings = WallPaper;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>file</mark> | [`InputFile`](type/InputFile) | NOTHING |
| <mark>mime_type</mark> | [`string`](type/string) | NOTHING |
| <mark>settings</mark> | [`WallPaperSettings`](type/WallPaperSettings) | NOTHING |

---

## Result

[WallPaper](type/WallPaper)

---

## Example

```php
$wallPaper = $client->messages->uploadWallPaper(
	file : $client->inputFile(
		id : 4891029973936006124,
		parts : 30,
		name : 'joPTYalxSs7gcCe1',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	mime_type : 'h5uRP1y0I2eNftOj',
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 43,
		second_background_color : 67,
		third_background_color : 5,
		fourth_background_color : 47,
		intensity : 90,
		rotation : 52,
		emoticon : 'oyabiLBHjJhvrQps',
	),
);
```