# updateNewStoryReaction

**Description** : *Represents a new reaction to a story*

**Layer** : 229

```tl
updateNewStoryReaction#1824e40b story_id:int peer:Peer reaction:Reaction = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>story_id</mark> | [`int`](type/int) | Story ID |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer where the story was posted |
| <mark>reaction</mark> | [`Reaction`](type/Reaction) | The reaction |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewStoryReaction(
	story_id : 89,
	peer : $client->peerUser(
		user_id : 8203275892654204829,
	),
	reaction : $client->reactionEmpty(),
);
```