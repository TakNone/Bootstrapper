# pageBlockPreformatted

**Description** : *Preformatted (<pre> text)*

**Layer** : 211

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
	language : 'Qw7foVZDWnvE6LRt',
);
```