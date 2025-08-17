# disallowedGiftsSettings

**Layer** : 211

```tl
disallowedGiftsSettings#71f276c4 flags:# disallow_unlimited_stargifts:flags.0?true disallow_limited_stargifts:flags.1?true disallow_unique_stargifts:flags.2?true disallow_premium_gifts:flags.3?true = DisallowedGiftsSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **disallow_unlimited_stargifts** | [`flags.0?true`](type/true) | NOTHING |
| **disallow_limited_stargifts** | [`flags.1?true`](type/true) | NOTHING |
| **disallow_unique_stargifts** | [`flags.2?true`](type/true) | NOTHING |
| **disallow_premium_gifts** | [`flags.3?true`](type/true) | NOTHING |

---

## Type

[DisallowedGiftsSettings](type/DisallowedGiftsSettings)

---

## Example

```php
$disallowedGiftsSettings = $client->disallowedGiftsSettings(
	disallow_unlimited_stargifts : true,
	disallow_limited_stargifts : true,
	disallow_unique_stargifts : true,
	disallow_premium_gifts : true,
);
```