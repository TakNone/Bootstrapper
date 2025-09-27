# pageBlockFooter

**Description** : *Page footer*

**Layer** : 214

```tl
pageBlockFooter#48870999 text:RichText = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Contents |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockFooter(
	text : $client->textEmpty(),
);
```