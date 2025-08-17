# account.uploadTheme

**Description** : *Upload theme*

**Layer** : 211

```tl
account.uploadTheme#1c3db333 flags:# file:InputFile thumb:flags.0?InputFile file_name:string mime_type:string = Document;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>file</mark> | [`InputFile`](type/InputFile) | Previously uploaded theme file with platform-specific colors for UI components, can be left unset when creating themes that only modify the wallpaper or accent colors |
| **thumb** | [`flags.0?InputFile`](type/InputFile) | Thumbnail |
| <mark>file_name</mark> | [`string`](type/string) | File name |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type, must be application/x-tgtheme-{format}, where format depends on the client |

---

## Result

[Document](type/Document)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **THEME_FILE_INVALID** | `400` | Invalid theme file provided |
| **THEME_MIME_INVALID** | `400` | The theme's MIME type is invalid |

---

## Example

```php
$document = $client->account->uploadTheme(
	file : $client->inputFile(
		id : -4813077502501416697,
		parts : 1,
		name : 'sFZUywC4hH0O2oVp',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	thumb : $client->inputFile(
		id : 4475389156819249255,
		parts : 94,
		name : 'YbS6yPeskoRWZ7A3',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	file_name : 'SKAI2xGit0B3jzVC',
	mime_type : 'w0TdeA3FWs4bQZjh',
);
```