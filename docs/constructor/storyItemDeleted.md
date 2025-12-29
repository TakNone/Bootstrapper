# storyItemDeleted

**Description** : *Represents a previously active story, that was deleted*

**Layer** : 218

```tl
storyItemDeleted#51e6ee4f id:int = StoryItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | Story ID |

---

## Type

[StoryItem](type/StoryItem)

---

## Example

```php
$storyItem = $client->storyItemDeleted(
	id : 75,
);
```