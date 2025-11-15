# foundStory

**Description** : *A story found using global story search &raquo;*

**Layer** : 218

```tl
foundStory#e87acbc0 peer:Peer story:StoryItem = FoundStory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer that posted the story |
| <mark>story</mark> | [`StoryItem`](type/StoryItem) | The story |

---

## Type

[FoundStory](type/FoundStory)

---

## Example

```php
$foundStory = $client->foundStory(
	peer : $client->peerUser(
		user_id : 8534523244027422806,
	),
	story : $client->storyItemDeleted(
		id : 7,
	),
);
```