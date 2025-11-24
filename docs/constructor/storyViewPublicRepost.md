# storyViewPublicRepost

**Description** : *A certain peer has reposted the story*

**Layer** : 218

```tl
storyViewPublicRepost#bd74cf49 flags:# blocked:flags.0?true blocked_my_stories_from:flags.1?true peer_id:Peer story:StoryItem = StoryView;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **blocked** | [`flags.0?true`](type/true) | Whether we have completely blocked this user, including from viewing more of our stories |
| **blocked_my_stories_from** | [`flags.1?true`](type/true) | Whether we have blocked this user from viewing more of our stories |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | The peer that reposted the story |
| <mark>story</mark> | [`StoryItem`](type/StoryItem) | The reposted story |

---

## Type

[StoryView](type/StoryView)

---

## Example

```php
$storyView = $client->storyViewPublicRepost(
	blocked : true,
	blocked_my_stories_from : true,
	peer_id : $client->peerUser(
		user_id : -4165093768210738804,
	),
	story : $client->storyItemDeleted(
		id : 22,
	),
);
```