# updateStoryID

**Description** : *A story was successfully uploaded*

**Layer** : 216

```tl
updateStoryID#1bf335b9 id:int random_id:long = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | The id that was attributed to the story |
| <mark>random_id</mark> | [`long`](type/long) | The random_id that was passed to stories.sendStory |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStoryID(
	id : 86,
	random_id : 862526684460436810,
);
```