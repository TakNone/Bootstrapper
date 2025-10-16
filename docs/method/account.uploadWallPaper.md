# account.uploadWallPaper

**Description** : *Create and upload a new wallpaper*

**Layer** : 216

```tl
account.uploadWallPaper#e39a8f03 flags:# for_chat:flags.0?true file:InputFile mime_type:string settings:WallPaperSettings = WallPaper;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **for_chat** | [`flags.0?true`](type/true) | Set this flag when uploading wallpapers to be passed to messages.setChatWallPaper |
| <mark>file</mark> | [`InputFile`](type/InputFile) | The JPG/PNG wallpaper |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type of uploaded wallpaper |
| <mark>settings</mark> | [`WallPaperSettings`](type/WallPaperSettings) | Wallpaper settings |

---

## Result

[WallPaper](type/WallPaper)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **WALLPAPER_FILE_INVALID** | `400` | The specified wallpaper file is invalid |
| **WALLPAPER_MIME_INVALID** | `400` | The specified wallpaper MIME type is invalid |

---

## Example

```php
$wallPaper = $client->account->uploadWallPaper(
	for_chat : true,
	file : $client->inputFile(
		id : -7093217656559280873,
		parts : 23,
		name : '1T9Qgp4DCfZvlNIe',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	mime_type : 'rj7UyeiXfnBOaV1S',
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 2,
		second_background_color : 13,
		third_background_color : 9,
		fourth_background_color : 39,
		intensity : 6,
		rotation : 50,
		emoticon : 'TbrPJht34YL2EfzZ',
	),
);
```