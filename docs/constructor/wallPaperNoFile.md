# wallPaperNoFile

**Description** : *Represents a wallpaper only based on colors/gradients*

**Layer** : 214

```tl
wallPaperNoFile#e0804116 id:long flags:# default:flags.1?true dark:flags.4?true settings:flags.2?WallPaperSettings = WallPaper;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Wallpaper ID |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **default** | [`flags.1?true`](type/true) | Whether this is the default wallpaper |
| **dark** | [`flags.4?true`](type/true) | Whether this wallpaper should be used in dark mode |
| **settings** | [`flags.2?WallPaperSettings`](type/WallPaperSettings) | Info on how to generate the wallpaper |

---

## Type

[WallPaper](type/WallPaper)

---

## Example

```php
$wallPaper = $client->wallPaperNoFile(
	id : -2095042777395811605,
	default : true,
	dark : true,
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 1,
		second_background_color : 90,
		third_background_color : 65,
		fourth_background_color : 4,
		intensity : 87,
		rotation : 64,
		emoticon : 'oyGxZOT2X8r67J5p',
	),
);
```