# payments.getSavedStarGifts

**Layer** : 214

```tl
payments.getSavedStarGifts#a319e569 flags:# exclude_unsaved:flags.0?true exclude_saved:flags.1?true exclude_unlimited:flags.2?true exclude_limited:flags.3?true exclude_unique:flags.4?true sort_by_value:flags.5?true exclude_upgradable:flags.7?true exclude_unupgradable:flags.8?true peer:InputPeer collection_id:flags.6?int offset:string limit:int = payments.SavedStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **exclude_unsaved** | [`flags.0?true`](type/true) | NOTHING |
| **exclude_saved** | [`flags.1?true`](type/true) | NOTHING |
| **exclude_unlimited** | [`flags.2?true`](type/true) | NOTHING |
| **exclude_limited** | [`flags.3?true`](type/true) | NOTHING |
| **exclude_unique** | [`flags.4?true`](type/true) | NOTHING |
| **sort_by_value** | [`flags.5?true`](type/true) | NOTHING |
| **exclude_upgradable** | [`flags.7?true`](type/true) | NOTHING |
| **exclude_unupgradable** | [`flags.8?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| **collection_id** | [`flags.6?int`](type/int) | NOTHING |
| <mark>offset</mark> | [`string`](type/string) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |

---

## Result

[payments.SavedStarGifts](type/payments.SavedStarGifts)

---

## Example

```php
$paymentsSavedStarGifts = $client->payments->getSavedStarGifts(
	exclude_unsaved : true,
	exclude_saved : true,
	exclude_unlimited : true,
	exclude_limited : true,
	exclude_unique : true,
	sort_by_value : true,
	exclude_upgradable : true,
	exclude_unupgradable : true,
	peer : $client->inputPeerEmpty(),
	collection_id : 82,
	offset : 'ByfteHFcQLWdV9hS',
	limit : 47,
);
```