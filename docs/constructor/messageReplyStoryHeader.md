# messageReplyStoryHeader

**Description** : *Represents a reply to a story*

**Layer** : 233

```tl
messageReplyStoryHeader#e5af939 peer:Peer story_id:int = MessageReplyHeader;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Sender of the story |
| <mark>story_id</mark> | [`int`](type/int) | Story ID |

---

## Type

[MessageReplyHeader](type/MessageReplyHeader)

---

## Example

```php
$messageReplyHeader = $client->messageReplyStoryHeader(
	peer : $client->peerUser(
		user_id : -9026821950966709904,
	),
	story_id : 2,
);
```