# stories.canSendStoryCount

**Description** : *Contains the number of available active story slots \(equal to the value of the story\_expiring\_limit\_\* client configuration parameter minus the number of currently active stories\)*

**Layer** : 218

```tl
stories.canSendStoryCount#c387c04e count_remains:int = stories.CanSendStoryCount;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count_remains</mark> | [`int`](type/int) | Remaining active story slots |

---

## Type

[stories.CanSendStoryCount](type/stories.CanSendStoryCount)

---

## Example

```php
$storiesCanSendStoryCount = $client->stories->canSendStoryCount(
	count_remains : 21,
);
```