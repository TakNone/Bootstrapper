# account.installTheme

**Description** : *Install a theme*

**Layer** : 218

```tl
account.installTheme#c727bb3b flags:# dark:flags.0?true theme:flags.1?InputTheme format:flags.2?string base_theme:flags.3?BaseTheme = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **dark** | [`flags.0?true`](type/true) | Whether to install the dark version |
| **theme** | [`flags.1?InputTheme`](type/InputTheme) | Theme to install |
| **format** | [`flags.2?string`](type/string) | Theme format, a string that identifies the theming engines supported by the client |
| **base_theme** | [`flags.3?BaseTheme`](type/BaseTheme) | Indicates a basic theme provided by all clients |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->installTheme(
	dark : true,
	theme : $client->inputTheme(
		id : -8657565067877370737,
		access_hash : 6025409037181025732,
	),
	format : 'ceo4rPdjytJKgG2Y',
	base_theme : $client->baseThemeClassic(),
);
```