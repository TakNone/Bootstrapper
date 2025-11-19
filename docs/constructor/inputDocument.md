# inputDocument

**Description** : *Defines a document for subsequent interaction*

**Layer** : 218

```tl
inputDocument#1abfb575 id:long access_hash:long file_reference:bytes = InputDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Document ID |
| <mark>access_hash</mark> | [`long`](type/long) | access_hash parameter from the document constructor |
| <mark>file_reference</mark> | [`bytes`](type/bytes) | File reference |

---

## Type

[InputDocument](type/InputDocument)

---

## Example

```php
$inputDocument = $client->inputDocument(
	id : -8219330591482371599,
	access_hash : -7007331131317761044,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```