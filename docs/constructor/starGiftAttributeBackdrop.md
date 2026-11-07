# starGiftAttributeBackdrop

**Description** : *The backdrop of a collectible gift &raquo;*

**Layer** : 229

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
| <mark>rarity</mark> | [`StarGiftAttributeRarity`](type/StarGiftAttributeRarity) | Rarity of this backdrop |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributeBackdrop(
	name : 'wHrjzuN5LZDemkKp',
	backdrop_id : 69,
	center_color : 26,
	edge_color : 50,
	pattern_color : 3,
	text_color : 11,
	rarity : $client->starGiftAttributeRarity(
		permille : 88,
	),
);
```