# inputStickeredMediaDocument

**Description** : *A document with stickers attached*

**Layer** : 211

```tl
inputStickeredMediaDocument#438865b id:InputDocument = InputStickeredMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | The document |

---

## Type

[InputStickeredMedia](type/InputStickeredMedia)

---

## Example

```php
$inputStickeredMedia = $client->inputStickeredMediaDocument(
	id : $client->inputDocumentEmpty(),
);
```