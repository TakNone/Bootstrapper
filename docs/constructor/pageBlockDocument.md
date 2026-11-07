# pageBlockDocument

**Layer** : 233

```tl
pageBlockDocument#38fa3ba3 document_id:long caption:PageCaption = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>document_id</mark> | [`long`](type/long) | NOTHING |
| <mark>caption</mark> | [`PageCaption`](type/PageCaption) | NOTHING |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockDocument(
	document_id : 7249236977182214061,
	caption : $client->pageCaption(
		text : $client->textEmpty(),
		credit : $client->textEmpty(),
	),
);
```