# pageBlockBlockquote

**Description** : *Quote \(equivalent to the HTML &lt;blockquote&gt;\)*

**Layer** : 233

```tl
pageBlockBlockquote#66d1670b flags:# collapsed:flags.0?true text:RichText caption:RichText = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **collapsed** | [`flags.0?true`](type/true) | NOTHING |
| <mark>text</mark> | [`RichText`](type/RichText) | Quote contents |
| <mark>caption</mark> | [`RichText`](type/RichText) | Caption |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockBlockquote(
	collapsed : true,
	text : $client->textEmpty(),
	caption : $client->textEmpty(),
);
```