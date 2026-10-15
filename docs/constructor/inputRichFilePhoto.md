# inputRichFilePhoto

**Layer** : 229

```tl
inputRichFilePhoto#9b00622b id:string photo:InputPhoto = InputRichFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | NOTHING |
| <mark>photo</mark> | [`InputPhoto`](type/InputPhoto) | NOTHING |

---

## Type

[InputRichFile](type/InputRichFile)

---

## Example

```php
$inputRichFile = $client->inputRichFilePhoto(
	id : '9qike3vEjsrYxP8n',
	photo : $client->inputPhotoEmpty(),
);
```