# wallPaperNoFile

**Description** : *Represents a wallpaper only based on colors/gradients*

**Layer** : 211

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
	id : -998956263413901044,
	default : true,
	dark : true,
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 86,
		second_background_color : 59,
		third_background_color : 65,
		fourth_background_color : 11,
		intensity : 47,
		rotation : 65,
		emoticon : 'xVLcp96nQGs287iF',
	),
);
```