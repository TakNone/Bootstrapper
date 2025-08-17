# pageListItemText

**Description** : *List item*

**Layer** : 211

```tl
pageListItemText#b92fb6cd text:RichText = PageListItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Text |

---

## Type

[PageListItem](type/PageListItem)

---

## Example

```php
$pageListItem = $client->pageListItemText(
	text : $client->textEmpty(),
);
```