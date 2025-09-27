# updateStory

**Description** : *A new story was posted*

**Layer** : 214

```tl
updateStory#75b3b798 peer:Peer story:StoryItem = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | ID of the poster |
| <mark>story</mark> | [`StoryItem`](type/StoryItem) | The story that was posted |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStory(
	peer : $client->peerUser(
		user_id : -1914320249526900281,
	),
	story : $client->storyItemDeleted(
		id : 79,
	),
);
```