# account.getThemes

**Description** : *Get installed themes*

**Layer** : 211

```tl
account.getThemes#7206e458 format:string hash:long = account.Themes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>format</mark> | [`string`](type/string) | Theme format, a string that identifies the theming engines supported by the client |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[account.Themes](type/account.Themes)

---

## Example

```php
$accountThemes = $client->account->getThemes(
	format : 'ltw4EmrUxnChQ9f1',
	hash : -5656656921429633915,
);
```