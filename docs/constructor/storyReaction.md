# storyReaction

**Description** : *How a certain peer reacted to a story*

**Layer** : 214

```tl
storyReaction#6090d6d5 peer_id:Peer date:int reaction:Reaction = StoryReaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | The peer |
| <mark>date</mark> | [`int`](type/int) | Reaction date |
| <mark>reaction</mark> | [`Reaction`](type/Reaction) | The reaction |

---

## Type

[StoryReaction](type/StoryReaction)

---

## Example

```php
$storyReaction = $client->storyReaction(
	peer_id : $client->peerUser(
		user_id : 3050686255947497626,
	),
	date : 18,
	reaction : $client->reactionEmpty(),
);
```