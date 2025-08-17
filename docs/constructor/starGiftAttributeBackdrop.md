# starGiftAttributeBackdrop

**Layer** : 211

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
	name : 'xiKeXUHTOp97Zu0C',
	backdrop_id : 58,
	center_color : 49,
	edge_color : 72,
	pattern_color : 9,
	text_color : 4,
	rarity_permille : 37,
);
```