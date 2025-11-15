# photos.deletePhotos

**Description** : *Deletes profile photos\. The method returns a list of successfully deleted photo IDs*

**Layer** : 218

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
			id : -8888719699805580406,
			access_hash : 5212827982855132838,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
);
```