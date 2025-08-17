# photos.getUserPhotos

**Description** : *Returns the list of user photos*

**Layer** : 211

```tl
photos.getUserPhotos#91cd32a8 user_id:InputUser offset:int max_id:long limit:int = photos.Photos;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User ID |
| <mark>offset</mark> | [`int`](type/int) | Number of list elements to be skipped |
| <mark>max_id</mark> | [`long`](type/long) | If a positive value was transferred, the method will return only photos with IDs less than the set one. This parameter is often useful when refetching file references », as in conjuction with limit=1 and offset=-1 the photo object with the id specified in max_id can be fetched |
| <mark>limit</mark> | [`int`](type/int) | Number of list elements to be returned |

---

## Result

[photos.Photos](type/photos.Photos)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MAX_ID_INVALID** | `400` | The provided max ID is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$photosPhotos = $client->photos->getUserPhotos(
	user_id : $client->inputUserEmpty(),
	offset : 16,
	max_id : -3327572930623479669,
	limit : 12,
);
```