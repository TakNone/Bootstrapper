# botAppSettings

**Description** : *Mini app » settings*

**Layer** : 211

```tl
botAppSettings#c99b1950 flags:# placeholder_path:flags.0?bytes background_color:flags.1?int background_dark_color:flags.2?int header_color:flags.3?int header_dark_color:flags.4?int = BotAppSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **placeholder_path** | [`flags.0?bytes`](type/bytes) | SVG placeholder logo, compressed using the same format used for vector thumbnails » |
| **background_color** | [`flags.1?int`](type/int) | Default light mode background color |
| **background_dark_color** | [`flags.2?int`](type/int) | Default dark mode background color |
| **header_color** | [`flags.3?int`](type/int) | Default light mode header color |
| **header_dark_color** | [`flags.4?int`](type/int) | Default dark mode header color |

---

## Type

[BotAppSettings](type/BotAppSettings)

---

## Example

```php
$botAppSettings = $client->botAppSettings(
	placeholder_path : '>???LiveProto?)???',
	background_color : 70,
	background_dark_color : 66,
	header_color : 46,
	header_dark_color : 38,
);
```