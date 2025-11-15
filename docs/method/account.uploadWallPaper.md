# account.uploadWallPaper

**Description** : *Create and upload a new wallpaper*

**Layer** : 218

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
	file : $client->upload_file(path : 'file.png'),
	mime_type : 'xEt7sY2c5zXLmTon',
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 98,
		second_background_color : 0,
		third_background_color : 37,
		fourth_background_color : 28,
		intensity : 62,
		rotation : 89,
		emoticon : '4MdVBbNHsgcZYLGR',
	),
);
```