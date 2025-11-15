# documentAttributeImageSize

**Description** : *Defines the width and height of an image uploaded as document*

**Layer** : 216

```tl
documentAttributeImageSize#6c37c15c w:int h:int = DocumentAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>w</mark> | [`int`](type/int) | Width of image |
| <mark>h</mark> | [`int`](type/int) | Height of image |

---

## Type

[DocumentAttribute](type/DocumentAttribute)

---

## Example

```php
$documentAttribute = $client->documentAttributeImageSize(
	w : 69,
	h : 95,
);
```