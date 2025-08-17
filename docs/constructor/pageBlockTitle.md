# pageBlockTitle

**Description** : *Title*

**Layer** : 211

```tl
pageBlockTitle#70abc3fd text:RichText = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Title |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockTitle(
	text : $client->textEmpty(),
);
```