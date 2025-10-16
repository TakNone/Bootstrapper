# messageMediaStory

**Description** : *Represents a forwarded story or a story mention*

**Layer** : 216

```tl
messageMediaStory#68cb6283 flags:# via_mention:flags.1?true peer:Peer id:int story:flags.0?StoryItem = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_mention** | [`flags.1?true`](type/true) | If set, indicates that this someone has mentioned us in this story (i.e. by tagging us in the description) or vice versa, we have mentioned the other peer (if the message is outgoing) |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer that posted the story |
| <mark>id</mark> | [`int`](type/int) | Story ID |
| **story** | [`flags.0?StoryItem`](type/StoryItem) | The story itself, if absent fetch it using stories.getStoriesByID and the peer/id parameters specified above |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaStory(
	via_mention : true,
	peer : $client->peerUser(
		user_id : 3713687414783718811,
	),
	id : 14,
	story : $client->storyItemDeleted(
		id : 79,
	),
);
```