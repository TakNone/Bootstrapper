# pageBlockParagraph

**Description** : *A paragraph*

**Layer** : 211

```tl
pageBlockParagraph#467a0766 text:RichText = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Text |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockParagraph(
	text : $client->textEmpty(),
);
```