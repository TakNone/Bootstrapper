# shareThemeBackdrops

**Layer** : 233

```tl
shareThemeBackdrops#aaeadce0 hash:int backdrops:Vector<ShareThemeBackdropOption> = ShareThemeBackdrops;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | NOTHING |
| <mark>backdrops</mark> | [`Vector<ShareThemeBackdropOption>`](type/ShareThemeBackdropOption) | NOTHING |

---

## Type

[ShareThemeBackdrops](type/ShareThemeBackdrops)

---

## Example

```php
$shareThemeBackdrops = $client->shareThemeBackdrops(
	hash : 0,
	backdrops : array(
		$client->shareThemeBackdropOption(
			backdrop_id : 41,
			name : 'VrKyO8hBt13JXzNp',
			center_color : 17,
			edge_color : 49,
			pattern_color : 56,
			text_color : 24,
		),
	),
);
```