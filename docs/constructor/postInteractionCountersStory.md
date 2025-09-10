# postInteractionCountersStory

**Description** : *Interaction counters for a story*

**Layer** : 214

```tl
postInteractionCountersStory#8a480e27 story_id:int views:int forwards:int reactions:int = PostInteractionCounters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>story_id</mark> | [`int`](type/int) | Story ID |
| <mark>views</mark> | [`int`](type/int) | Number of views |
| <mark>forwards</mark> | [`int`](type/int) | Number of forwards and reposts to public chats and channels |
| <mark>reactions</mark> | [`int`](type/int) | Number of reactions |

---

## Type

[PostInteractionCounters](type/PostInteractionCounters)

---

## Example

```php
$postInteractionCounters = $client->postInteractionCountersStory(
	story_id : 22,
	views : 62,
	forwards : 35,
	reactions : 65,
);
```