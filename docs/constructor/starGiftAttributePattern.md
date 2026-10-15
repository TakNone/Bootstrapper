# starGiftAttributePattern

**Description** : *A sticker applied on the backdrop of a collectible gift &raquo; using a repeating pattern*

**Layer** : 229

```tl
starGiftAttributePattern#4e7085ea name:string document:Document rarity:StarGiftAttributeRarity = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | Name of the symbol |
| <mark>document</mark> | [`Document`](type/Document) | The symbol |
| <mark>rarity</mark> | [`StarGiftAttributeRarity`](type/StarGiftAttributeRarity) | Rarity of this pattern |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributePattern(
	name : '2DYRNqybhrdazu93',
	document : $client->documentEmpty(
		id : -4371544616266521634,
	),
	rarity : $client->starGiftAttributeRarity(
		permille : 7,
	),
);
```