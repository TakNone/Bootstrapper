# starGiftAttributePattern

**Description** : *A sticker applied on the backdrop of a collectible gift &raquo; using a repeating pattern*

**Layer** : 216

```tl
starGiftAttributePattern#13acff19 name:string document:Document rarity_permille:int = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | Name of the symbol |
| <mark>document</mark> | [`Document`](type/Document) | The symbol |
| <mark>rarity_permille</mark> | [`int`](type/int) | The number of upgraded gifts that receive this backdrop for each 1000 gifts upgraded |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributePattern(
	name : 'DhqpBVtNaR9n4fCo',
	document : $client->documentEmpty(
		id : -2905843377503154836,
	),
	rarity_permille : 30,
);
```