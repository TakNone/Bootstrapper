# pageBlockSubheader

**Description** : *Subheader*

**Layer** : 211

```tl
pageBlockSubheader#f12bb6e1 text:RichText = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Subheader |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockSubheader(
	text : $client->textEmpty(),
);
```