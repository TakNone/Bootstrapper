# pageBlockSubtitle

**Description** : *Subtitle*

**Layer** : 211

```tl
pageBlockSubtitle#8ffa9a1f text:RichText = PageBlock;
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
$pageBlock = $client->pageBlockSubtitle(
	text : $client->textEmpty(),
);
```