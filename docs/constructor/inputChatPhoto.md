# inputChatPhoto

**Description** : *Existing photo to be set as a chat profile photo*

**Layer** : 211

```tl
inputChatPhoto#8953ad37 id:InputPhoto = InputChatPhoto;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputPhoto`](type/InputPhoto) | Existing photo |

---

## Type

[InputChatPhoto](type/InputChatPhoto)

---

## Example

```php
$inputChatPhoto = $client->inputChatPhoto(
	id : $client->inputPhotoEmpty(),
);
```