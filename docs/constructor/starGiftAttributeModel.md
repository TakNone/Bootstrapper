# starGiftAttributeModel

**Layer** : 214

```tl
starGiftAttributeModel#39d99013 name:string document:Document rarity_permille:int = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | NOTHING |
| <mark>document</mark> | [`Document`](type/Document) | NOTHING |
| <mark>rarity_permille</mark> | [`int`](type/int) | NOTHING |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributeModel(
	name : 'XOLjTmR8wECPYK93',
	document : $client->documentEmpty(
		id : 5154871043811418967,
	),
	rarity_permille : 30,
);
```