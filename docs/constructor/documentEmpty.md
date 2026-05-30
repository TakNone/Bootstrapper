# documentEmpty

**Description** : *Empty constructor, document doesn&#039;t exist*

**Layer** : 222

```tl
documentEmpty#36f8c871 id:long = Document;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Document ID or 0 |

---

## Type

[Document](type/Document)

---

## Example

```php
$document = $client->documentEmpty(
	id : 1791673567656306024,
);
```