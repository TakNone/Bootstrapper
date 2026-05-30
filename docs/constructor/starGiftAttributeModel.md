# starGiftAttributeModel

**Description** : *The model of a collectible gift &raquo;*

**Layer** : 225

```tl
starGiftAttributeModel#565251e2 flags:# crafted:flags.0?true name:string document:Document rarity:StarGiftAttributeRarity = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **crafted** | [`flags.0?true`](type/true) | NOTHING |
| <mark>name</mark> | [`string`](type/string) | Name of the model |
| <mark>document</mark> | [`Document`](type/Document) | The sticker representing the upgraded gift |
| <mark>rarity</mark> | [`StarGiftAttributeRarity`](type/StarGiftAttributeRarity) | NOTHING |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributeModel(
	crafted : true,
	name : '8mHgxcJzT09UIXnE',
	document : $client->documentEmpty(
		id : 4113936757563483481,
	),
	rarity : $client->starGiftAttributeRarity(
		permille : 36,
	),
);
```