# pageListOrderedItemText

**Description** : *Ordered list of text items*

**Layer** : 227

```tl
pageListOrderedItemText#15031189 flags:# checkbox:flags.0?true checked:flags.1?true num:flags.2?string text:RichText value:flags.3?int type:flags.4?string = PageListOrderedItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **checkbox** | [`flags.0?true`](type/true) | NOTHING |
| **checked** | [`flags.1?true`](type/true) | NOTHING |
| **num** | [`flags.2?string`](type/string) | Number of element within ordered list |
| <mark>text</mark> | [`RichText`](type/RichText) | Text |
| **value** | [`flags.3?int`](type/int) | NOTHING |
| **type** | [`flags.4?string`](type/string) | NOTHING |

---

## Type

[PageListOrderedItem](type/PageListOrderedItem)

---

## Example

```php
$pageListOrderedItem = $client->pageListOrderedItemText(
	checkbox : true,
	checked : true,
	num : 'En7b29m8TM3Akxa4',
	text : $client->textEmpty(),
	value : 31,
	type : 'EpTXyiDSHC41jL6A',
);
```