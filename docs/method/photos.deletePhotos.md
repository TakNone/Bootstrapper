# photos.deletePhotos

**Description** : *Deletes profile photos. The method returns a list of successfully deleted photo IDs*

**Layer** : 211

```tl
photos.deletePhotos#87cf7f2f id:Vector<InputPhoto> = Vector<long>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputPhoto>`](type/InputPhoto) | Input photos to delete |

---

## Result

[Vector<long>](type/long)

---

## Example

```php
$long = $client->photos->deletePhotos(
	id : array(
		$client->inputPhotoEmpty(),
		$client->inputPhoto(
			id : -3609009050209151415,
			access_hash : -4923353162352669806,
			file_reference : '?b?LiveProto?aiw',
		),
	),
);
```