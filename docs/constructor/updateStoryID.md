# updateStoryID

**Description** : *A story was successfully uploaded*

**Layer** : 214

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
	id : 97,
	random_id : 562671776878166943,
);
```