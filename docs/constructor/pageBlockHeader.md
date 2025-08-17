# pageBlockHeader

**Description** : *Page header*

**Layer** : 211

```tl
pageBlockHeader#bfd064ec text:RichText = PageBlock;
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
$pageBlock = $client->pageBlockHeader(
	text : $client->textEmpty(),
);
```