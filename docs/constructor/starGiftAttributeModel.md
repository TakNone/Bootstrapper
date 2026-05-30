# starGiftAttributeModel

**Description** : *The model of a collectible gift &raquo;*

**Layer** : 222

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
	name : 'nYyBSChj4aZIrqGD',
	document : $client->documentEmpty(
		id : 8302356848111898638,
	),
	rarity : $client->starGiftAttributeRarity(
		permille : 86,
	),
);
```