# wallPaper

**Description** : *Represents a wallpaper based on an image*

**Layer** : 227

```tl
wallPaper#a437c3ed id:long flags:# creator:flags.0?true default:flags.1?true pattern:flags.3?true dark:flags.4?true access_hash:long slug:string document:Document settings:flags.2?WallPaperSettings = WallPaper;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Identifier |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : -1508783737290836597,
	creator : true,
	default : true,
	pattern : true,
	dark : true,
	access_hash : 6151974546044315326,
	slug : 'MdWoEhKnP2IiRUz4',
	document : $client->documentEmpty(
		id : -4625721613307568431,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 32,
		second_background_color : 12,
		third_background_color : 19,
		fourth_background_color : 4,
		intensity : 65,
		rotation : 69,
		emoticon : '1ygJCmMIkAKh2PXw',
	),
);
```