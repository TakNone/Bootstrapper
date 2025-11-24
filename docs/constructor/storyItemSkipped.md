# storyItemSkipped

**Description** : *Represents an active story, whose full information was omitted for space and performance reasons; use stories\.getStoriesByID to fetch full info about the skipped story when and if needed*

**Layer** : 218

```tl
storyItemSkipped#ffadc913 flags:# close_friends:flags.8?true live:flags.9?true id:int date:int expire_date:int = StoryItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **close_friends** | [`flags.8?true`](type/true) | Whether this story can only be viewed by our close friends, see here » for more info |
| **live** | [`flags.9?true`](type/true) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | Story ID |
| <mark>date</mark> | [`int`](type/int) | When was the story posted |
| <mark>expire_date</mark> | [`int`](type/int) | When does the story expire |

---

## Type

[StoryItem](type/StoryItem)

---

## Example

```php
$storyItem = $client->storyItemSkipped(
	close_friends : true,
	live : true,
	id : 3,
	date : 94,
	expire_date : 47,
);
```