# pageBlockPreformatted

**Description** : *Preformatted \(&lt;pre&gt; text\)*

**Layer** : 216

```tl
pageBlockPreformatted#c070d93e text:RichText language:string = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`RichText`](type/RichText) | Text |
| <mark>language</mark> | [`string`](type/string) | Programming language of preformatted text |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockPreformatted(
	text : $client->textEmpty(),
	language : 'VXIDw1q9m8ngfopj',
);
```