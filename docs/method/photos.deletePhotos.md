# photos.deletePhotos

**Description** : *Deletes profile photos\. The method returns a list of successfully deleted photo IDs*

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
			id : 182301054318713493,
			access_hash : -4512371441652249142,
			file_reference : '' . "\0" . '?s?LiveProto?hd?',
		),
	),
);
```