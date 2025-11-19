# starGiftAttributeModel

**Description** : *The model of a collectible gift &raquo;*

**Layer** : 218

```tl
starGiftAttributeModel#39d99013 name:string document:Document rarity_permille:int = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | Name of the model |
| <mark>document</mark> | [`Document`](type/Document) | The sticker representing the upgraded gift |
| <mark>rarity_permille</mark> | [`int`](type/int) | The number of upgraded gifts that receive this backdrop for each 1000 gifts upgraded |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributeModel(
	name : 'unljIwfyxAH9GLDv',
	document : $client->documentEmpty(
		id : -3798499740111965146,
	),
	rarity_permille : 9,
);
```