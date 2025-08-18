# updateStoryID

**Description** : *A story was successfully uploaded*

**Layer** : 211

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
	id : 17,
	random_id : -7522651683388913246,
);
```