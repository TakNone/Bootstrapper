# stories.canSendStoryCount

**Layer** : 211

```tl
stories.canSendStoryCount#c387c04e count_remains:int = stories.CanSendStoryCount;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count_remains</mark> | [`int`](type/int) | NOTHING |

---

## Type

[stories.CanSendStoryCount](type/stories.CanSendStoryCount)

---

## Example

```php
$storiesCanSendStoryCount = $client->stories->canSendStoryCount(
	count_remains : 61,
);
```