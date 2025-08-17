# pageCaption

**Description** : *Page caption*

**Layer** : 211

```tl
pageCaption#6f747657 text:RichText credit:RichText = PageCaption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Caption |
| <mark>credit</mark> | [`RichText`](type/RichText) | Credits |

---

## Type

[PageCaption](type/PageCaption)

---

## Example

```php
$pageCaption = $client->pageCaption(
	text : $client->textEmpty(),
	credit : $client->textEmpty(),
);
```