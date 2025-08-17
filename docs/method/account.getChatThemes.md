# account.getChatThemes

**Description** : *Get all available chat themes »*

**Layer** : 211

```tl
account.getChatThemes#d638de89 hash:long = account.Themes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[account.Themes](type/account.Themes)

---

## Example

```php
$accountThemes = $client->account->getChatThemes(
	hash : 5666004361796808957,
);
```