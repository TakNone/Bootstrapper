# pageBlockBlockquote

**Description** : *Quote (equivalent to the HTML <blockquote>)*

**Layer** : 211

```tl
pageBlockBlockquote#263d7c26 text:RichText caption:RichText = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Quote contents |
| <mark>caption</mark> | [`RichText`](type/RichText) | Caption |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockBlockquote(
	text : $client->textEmpty(),
	caption : $client->textEmpty(),
);
```