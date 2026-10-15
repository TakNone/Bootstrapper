# updateStoryID

**Description** : *A story was successfully uploaded*

**Layer** : 229

```tl
updateStoryID#1bf335b9 id:int random_id:long = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | The id that was attributed to the story |
| <mark>random_id</mark> | [`long`](type/long) | The random_id that was passed to stories.sendStory. See here » for more info on random ID deduplication and updateMessageID mapping |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStoryID(
	id : 71,
	random_id : -8813289675121179871,
);
```