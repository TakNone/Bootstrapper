# storyReactionPublicForward

**Description** : *A certain peer has forwarded the story as a message to a public chat or channel*

**Layer** : 214

```tl
storyReactionPublicForward#bbab2643 message:Message = StoryReaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`Message`](type/Message) | The message with the forwarded story |

---

## Type

[StoryReaction](type/StoryReaction)

---

## Example

```php
$storyReaction = $client->storyReactionPublicForward(
	message : $client->messageEmpty(
		id : 21,
		peer_id : $client->peerUser(
			user_id : -8694348692923889380,
		),
	),
);
```