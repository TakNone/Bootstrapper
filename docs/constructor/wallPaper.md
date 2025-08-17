# wallPaper

**Description** : *Represents a wallpaper based on an image*

**Layer** : 211

```tl
wallPaper#a437c3ed id:long flags:# creator:flags.0?true default:flags.1?true pattern:flags.3?true dark:flags.4?true access_hash:long slug:string document:Document settings:flags.2?WallPaperSettings = WallPaper;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Identifier |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **creator** | [`flags.0?true`](type/true) | Whether we created this wallpaper |
| **default** | [`flags.1?true`](type/true) | Whether this is the default wallpaper |
| **pattern** | [`flags.3?true`](type/true) | Whether this is a pattern wallpaper » |
| **dark** | [`flags.4?true`](type/true) | Whether this wallpaper should be used in dark mode |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>slug</mark> | [`string`](type/string) | Unique wallpaper ID, used when generating wallpaper links or importing wallpaper links |
| <mark>document</mark> | [`Document`](type/Document) | The actual wallpaper |
| **settings** | [`flags.2?WallPaperSettings`](type/WallPaperSettings) | Info on how to generate the wallpaper, according to these instructions » |

---

## Type

[WallPaper](type/WallPaper)

---

## Example

```php
$wallPaper = $client->wallPaper(
	id : 3168737427950464934,
	creator : true,
	default : true,
	pattern : true,
	dark : true,
	access_hash : -5102409922133126215,
	slug : '0z8vwf62lxjVWGgB',
	document : $client->documentEmpty(
		id : 8828817783249609529,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 97,
		second_background_color : 22,
		third_background_color : 5,
		fourth_background_color : 85,
		intensity : 31,
		rotation : 92,
		emoticon : 'KupM5HmoGTFP1ivb',
	),
);
```