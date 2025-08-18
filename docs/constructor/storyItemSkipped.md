# storyItemSkipped

**Description** : *Represents an active story, whose full information was omitted for space and performance reasons; use stories\.getStoriesByID to fetch full info about the skipped story when and if needed*

**Layer** : 211

```tl
storyItemSkipped#ffadc913 flags:# close_friends:flags.8?true id:int date:int expire_date:int = StoryItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **close_friends** | [`flags.8?true`](type/true) | Whether this story can only be viewed by our close friends, see here » for more info |
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
	id : 73,
	date : 30,
	expire_date : 65,
);
```