# inputThemeSettings

**Description** : *Theme settings*

**Layer** : 214

```tl
inputThemeSettings#8fde504f flags:# message_colors_animated:flags.2?true base_theme:BaseTheme accent_color:int outbox_accent_color:flags.3?int message_colors:flags.0?Vector<int> wallpaper:flags.1?InputWallPaper wallpaper_settings:flags.1?WallPaperSettings = InputThemeSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **message_colors_animated** | [`flags.2?true`](type/true) | If set, the freeform gradient fill needs to be animated on every sent message |
| <mark>base_theme</mark> | [`BaseTheme`](type/BaseTheme) | Default theme on which this theme is based |
| <mark>accent_color</mark> | [`int`](type/int) | Accent color, ARGB format |
| **outbox_accent_color** | [`flags.3?int`](type/int) | Accent color of outgoing messages in ARGB format |
| **message_colors** | [`flags.0?Vector<int>`](type/int) | The fill to be used as a background for outgoing messages, in RGB24 format. If just one or two equal colors are provided, describes a solid fill of a background. If two different colors are provided, describes the top and bottom colors of a 0-degree gradient.If three or four colors are provided, describes a freeform gradient fill of a background |
| **wallpaper** | [`flags.1?InputWallPaper`](type/InputWallPaper) | inputWallPaper or inputWallPaperSlug when passing wallpaper files for image or pattern wallpapers, inputWallPaperNoFile with id=0 otherwise |
| **wallpaper_settings** | [`flags.1?WallPaperSettings`](type/WallPaperSettings) | Wallpaper settings |

---

## Type

[InputThemeSettings](type/InputThemeSettings)

---

## Example

```php
$inputThemeSettings = $client->inputThemeSettings(
	message_colors_animated : true,
	base_theme : $client->baseThemeClassic(),
	accent_color : 30,
	outbox_accent_color : 34,
	message_colors : array(76),
	wallpaper : $client->inputWallPaper(
		id : 8039334055768511299,
		access_hash : -222657188806822687,
	),
	wallpaper_settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 36,
		second_background_color : 90,
		third_background_color : 4,
		fourth_background_color : 59,
		intensity : 88,
		rotation : 36,
		emoticon : '1DdgoLFx8sAmcBW2',
	),
);
```