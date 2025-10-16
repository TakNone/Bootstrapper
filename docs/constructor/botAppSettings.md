# botAppSettings

**Description** : *Mini app &raquo; settings*

**Layer** : 216

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
	placeholder_path : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	background_color : 81,
	background_dark_color : 12,
	header_color : 7,
	header_dark_color : 71,
);
```