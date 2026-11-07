# storyReactionPublicRepost

**Description** : *A certain peer has reposted the story*

**Layer** : 229

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
		user_id : 2135146327639911437,
	),
	story : $client->storyItemDeleted(
		id : 50,
	),
);
```