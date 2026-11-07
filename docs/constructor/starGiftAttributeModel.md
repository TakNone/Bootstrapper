# starGiftAttributeModel

**Description** : *The model of a collectible gift &raquo;*

**Layer** : 233

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
	name : 'aBUguKc3TfOI1ZRt',
	document : $client->documentEmpty(
		id : -6330783784341988620,
	),
	rarity : $client->starGiftAttributeRarity(
		permille : 83,
	),
);
```