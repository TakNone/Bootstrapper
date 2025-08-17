# account.uploadWallPaper

**Description** : *Create and upload a new wallpaper*

**Layer** : 211

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
		id : -4541656568374768090,
		parts : 64,
		name : 'nWp8IjchgtCNH0yq',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	mime_type : 'x5ZSl4kWHK0e7JjD',
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 31,
		second_background_color : 48,
		third_background_color : 42,
		fourth_background_color : 58,
		intensity : 3,
		rotation : 38,
		emoticon : 'WiLUHT4uFoaYj2Gr',
	),
);
```