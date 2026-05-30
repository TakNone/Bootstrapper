# starGiftAttributePattern

**Description** : *A sticker applied on the backdrop of a collectible gift &raquo; using a repeating pattern*

**Layer** : 222

```tl
starGiftAttributePattern#4e7085ea name:string document:Document rarity:StarGiftAttributeRarity = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | Name of the symbol |
| <mark>document</mark> | [`Document`](type/Document) | The symbol |
| <mark>rarity</mark> | [`StarGiftAttributeRarity`](type/StarGiftAttributeRarity) | NOTHING |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributePattern(
	name : 'fgxlhizuFZ09754C',
	document : $client->documentEmpty(
		id : 3550210372222250126,
	),
	rarity : $client->starGiftAttributeRarity(
		permille : 93,
	),
);
```