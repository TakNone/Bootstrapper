# pageBlockKicker

**Description** : *Kicker*

**Layer** : 211

```tl
pageBlockKicker#1e148390 text:RichText = PageBlock;
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
$pageBlock = $client->pageBlockKicker(
	text : $client->textEmpty(),
);
```