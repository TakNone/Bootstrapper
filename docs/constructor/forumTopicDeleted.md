# forumTopicDeleted

**Description** : *Represents a deleted forum topic*

**Layer** : 218

```tl
forumTopicDeleted#23f109b id:int = ForumTopic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | The ID of the deleted forum topic |

---

## Type

[ForumTopic](type/ForumTopic)

---

## Example

```php
$forumTopic = $client->forumTopicDeleted(
	id : 30,
);
```