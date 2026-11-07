# starGiftAttributeModel

**Description** : *The model of a collectible gift &raquo;*

**Layer** : 229

```tl
starGiftAttributeModel#565251e2 flags:# crafted:flags.0?true name:string document:Document rarity:StarGiftAttributeRarity = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **crafted** | [`flags.0?true`](type/true) | This model is reserved for crafting », and should be filtered out from regular upgrade previews |
| <mark>name</mark> | [`string`](type/string) | Name of the model |
| <mark>document</mark> | [`Document`](type/Document) | The sticker representing the upgraded gift |
| <mark>rarity</mark> | [`StarGiftAttributeRarity`](type/StarGiftAttributeRarity) | Rarity of this model |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributeModel(
	crafted : true,
	name : '9uHlh3scVfaPjnMy',
	document : $client->documentEmpty(
		id : -2447236141376795509,
	),
	rarity : $client->starGiftAttributeRarity(
		permille : 44,
	),
);
```