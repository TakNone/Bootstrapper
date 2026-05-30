# starGiftAttributeBackdrop

**Description** : *The backdrop of a collectible gift &raquo;*

**Layer** : 225

```tl
starGiftAttributeBackdrop#9f2504e4 name:string backdrop_id:int center_color:int edge_color:int pattern_color:int text_color:int rarity:StarGiftAttributeRarity = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | Name of the backdrop |
| <mark>backdrop_id</mark> | [`int`](type/int) | Unique ID of the backdrop |
| <mark>center_color</mark> | [`int`](type/int) | Color of the center of the backdrop in RGB24 format |
| <mark>edge_color</mark> | [`int`](type/int) | Color of the edges of the backdrop in RGB24 format |
| <mark>pattern_color</mark> | [`int`](type/int) | Color of the starGiftAttributePattern applied on the backdrop in RGB24 format |
| <mark>text_color</mark> | [`int`](type/int) | Color of the text on the backdrop in RGB24 format |
| <mark>rarity</mark> | [`StarGiftAttributeRarity`](type/StarGiftAttributeRarity) | NOTHING |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributeBackdrop(
	name : '6kNZY0Sjuyb2s3pJ',
	backdrop_id : 45,
	center_color : 45,
	edge_color : 66,
	pattern_color : 63,
	text_color : 68,
	rarity : $client->starGiftAttributeRarity(
		permille : 17,
	),
);
```