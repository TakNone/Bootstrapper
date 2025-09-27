# themeSettings

**Description** : *Theme settings*

**Layer** : 214

```tl
themeSettings#fa58b6d4 flags:# message_colors_animated:flags.2?true base_theme:BaseTheme accent_color:int outbox_accent_color:flags.3?int message_colors:flags.0?Vector<int> wallpaper:flags.1?WallPaper = ThemeSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **message_colors_animated** | [`flags.2?true`](type/true) | If set, the freeform gradient fill needs to be animated on every sent message |
| <mark>base_theme</mark> | [`BaseTheme`](type/BaseTheme) | Base theme |
| <mark>accent_color</mark> | [`int`](type/int) | Accent color, ARGB format |
| **outbox_accent_color** | [`flags.3?int`](type/int) | Accent color of outgoing messages in ARGB format |
| **message_colors** | [`flags.0?Vector<int>`](type/int) | The fill to be used as a background for outgoing messages, in RGB24 format. If just one or two equal colors are provided, describes a solid fill of a background. If two different colors are provided, describes the top and bottom colors of a 0-degree gradient.If three or four colors are provided, describes a freeform gradient fill of a background |
| **wallpaper** | [`flags.1?WallPaper`](type/WallPaper) | Wallpaper |

---

## Type

[ThemeSettings](type/ThemeSettings)

---

## Example

```php
$themeSettings = $client->themeSettings(
	message_colors_animated : true,
	base_theme : $client->baseThemeClassic(),
	accent_color : 86,
	outbox_accent_color : 40,
	message_colors : array(97),
	wallpaper : $client->wallPaper(
		id : 8554041103863949496,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 556805522367107157,
		slug : 't8cnIerOGkXZ74dg',
		document : $client->documentEmpty(
			id : 5871053348821463253,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 77,
			second_background_color : 7,
			third_background_color : 25,
			fourth_background_color : 41,
			intensity : 51,
			rotation : 46,
			emoticon : '7AZjDGhYbMV3wLux',
		),
	),
);
```