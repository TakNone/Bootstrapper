# storyViewPublicForward

**Description** : *A certain peer has forwarded the story as a message to a public chat or channel*

**Layer** : 214

```tl
storyViewPublicForward#9083670b flags:# blocked:flags.0?true blocked_my_stories_from:flags.1?true message:Message = StoryView;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **blocked** | [`flags.0?true`](type/true) | Whether we have completely blocked this user, including from viewing more of our stories |
| **blocked_my_stories_from** | [`flags.1?true`](type/true) | Whether we have blocked this user from viewing more of our stories |
| <mark>message</mark> | [`Message`](type/Message) | The message with the forwarded story |

---

## Type

[StoryView](type/StoryView)

---

## Example

```php
$storyView = $client->storyViewPublicForward(
	blocked : true,
	blocked_my_stories_from : true,
	message : $client->messageEmpty(
		id : 76,
		peer_id : $client->peerUser(
			user_id : 48481938331230312,
		),
	),
);
```