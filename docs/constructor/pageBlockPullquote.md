# pageBlockPullquote

**Description** : *Pullquote*

**Layer** : 211

```tl
pageBlockPullquote#4f4456d3 text:RichText caption:RichText = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Text |
| <mark>caption</mark> | [`RichText`](type/RichText) | Caption |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockPullquote(
	text : $client->textEmpty(),
	caption : $client->textEmpty(),
);
```