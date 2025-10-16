# wallPaperSettings

**Description** : *Wallpaper rendering information*

**Layer** : 216

```tl
wallPaperSettings#372efcd0 flags:# blur:flags.1?true motion:flags.2?true background_color:flags.0?int second_background_color:flags.4?int third_background_color:flags.5?int fourth_background_color:flags.6?int intensity:flags.3?int rotation:flags.4?int emoticon:flags.7?string = WallPaperSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **blur** | [`flags.1?true`](type/true) | For image wallpapers »: if set, the JPEG must be downscaled to fit in 450x450 square and then box-blurred with radius 12 |
| **motion** | [`flags.2?true`](type/true) | If set, the background needs to be slightly moved when the device is rotated |
| **background_color** | [`flags.0?int`](type/int) | Used for solid », gradient » and freeform gradient » fills |
| **second_background_color** | [`flags.4?int`](type/int) | Used for gradient » and freeform gradient » fills |
| **third_background_color** | [`flags.5?int`](type/int) | Used for freeform gradient » fills |
| **fourth_background_color** | [`flags.6?int`](type/int) | Used for freeform gradient » fills |
| **intensity** | [`flags.3?int`](type/int) | Used for pattern wallpapers » |
| **rotation** | [`flags.4?int`](type/int) | Clockwise rotation angle of the gradient, in degrees; 0-359. Should be always divisible by 45 |
| **emoticon** | [`flags.7?string`](type/string) | If set, this wallpaper can be used as a channel wallpaper and is represented by the specified UTF-8 emoji |

---

## Type

[WallPaperSettings](type/WallPaperSettings)

---

## Example

```php
$wallPaperSettings = $client->wallPaperSettings(
	blur : true,
	motion : true,
	background_color : 74,
	second_background_color : 96,
	third_background_color : 48,
	fourth_background_color : 76,
	intensity : 2,
	rotation : 16,
	emoticon : 'vwPlHeyGqKQXYcrx',
);
```