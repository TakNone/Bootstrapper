# starGiftAttributeBackdrop

**Layer** : 214

```tl
starGiftAttributeBackdrop#d93d859c name:string backdrop_id:int center_color:int edge_color:int pattern_color:int text_color:int rarity_permille:int = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | NOTHING |
| <mark>backdrop_id</mark> | [`int`](type/int) | NOTHING |
| <mark>center_color</mark> | [`int`](type/int) | NOTHING |
| <mark>edge_color</mark> | [`int`](type/int) | NOTHING |
| <mark>pattern_color</mark> | [`int`](type/int) | NOTHING |
| <mark>text_color</mark> | [`int`](type/int) | NOTHING |
| <mark>rarity_permille</mark> | [`int`](type/int) | NOTHING |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributeBackdrop(
	name : 'OEC6YrwmIvT937q8',
	backdrop_id : 99,
	center_color : 47,
	edge_color : 56,
	pattern_color : 95,
	text_color : 29,
	rarity_permille : 46,
);
```