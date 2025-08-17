# updateSentStoryReaction

**Description** : *Indicates we reacted to a story »*

**Layer** : 211

```tl
updateSentStoryReaction#7d627683 peer:Peer story_id:int reaction:Reaction = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer that sent the story |
| <mark>story_id</mark> | [`int`](type/int) | ID of the story we reacted to |
| <mark>reaction</mark> | [`Reaction`](type/Reaction) | The reaction that was sent |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateSentStoryReaction(
	peer : $client->peerUser(
		user_id : 5319535211879748746,
	),
	story_id : 33,
	reaction : $client->reactionEmpty(),
);
```