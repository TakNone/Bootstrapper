# documentAttributeFilename

**Description** : *A simple document with a file name*

**Layer** : 218

```tl
documentAttributeFilename#15590068 file_name:string = DocumentAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>file_name</mark> | [`string`](type/string) | The file name |

---

## Type

[DocumentAttribute](type/DocumentAttribute)

---

## Example

```php
$documentAttribute = $client->documentAttributeFilename(
	file_name : 'EckNiDypmQlOxBJZ',
);
```