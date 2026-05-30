# storyReactionPublicRepost

**Description** : *A certain peer has reposted the story*

**Layer** : 225

```tl
storyReactionPublicRepost#cfcd0f13 peer_id:Peer story:StoryItem = StoryReaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | The peer that reposted the story |
| <mark>story</mark> | [`StoryItem`](type/StoryItem) | The reposted story |

---

## Type

[StoryReaction](type/StoryReaction)

---

## Example

```php
$storyReaction = $client->storyReactionPublicRepost(
	peer_id : $client->peerUser(
		user_id : -72893699816692685,
	),
	story : $client->storyItemDeleted(
		id : 69,
	),
);
```