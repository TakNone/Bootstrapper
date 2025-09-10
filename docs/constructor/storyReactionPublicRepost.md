# storyReactionPublicRepost

**Description** : *A certain peer has reposted the story*

**Layer** : 214

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
		user_id : 5659121574310790761,
	),
	story : $client->storyItemDeleted(
		id : 54,
	),
);
```