# pageListItemText

**Description** : *List item*

**Layer** : 227

```tl
pageListItemText#2f58683c flags:# checkbox:flags.0?true checked:flags.1?true text:RichText = PageListItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **checkbox** | [`flags.0?true`](type/true) | NOTHING |
| **checked** | [`flags.1?true`](type/true) | NOTHING |
| <mark>text</mark> | [`RichText`](type/RichText) | Text |

---

## Type

[PageListItem](type/PageListItem)

---

## Example

```php
$pageListItem = $client->pageListItemText(
	checkbox : true,
	checked : true,
	text : $client->textEmpty(),
);
```