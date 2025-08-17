# stories.sendReaction

**Description** : *React to a story*

**Layer** : 211

```tl
stories.sendReaction#7fd736b2 flags:# add_to_recent:flags.0?true peer:InputPeer story_id:int reaction:Reaction = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **add_to_recent** | [`flags.0?true`](type/true) | Whether to add this reaction to the recent reactions list » |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer that sent the story |
| <mark>story_id</mark> | [`int`](type/int) | ID of the story to react to |
| <mark>reaction</mark> | [`Reaction`](type/Reaction) | Reaction |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **REACTION_INVALID** | `400` | The specified reaction is invalid |
| **STORY_ID_EMPTY** | `400` | You specified no story IDs |
| **STORY_ID_INVALID** | `400` | The specified story ID is invalid |

---

## Example

```php
$updates = $client->stories->sendReaction(
	add_to_recent : true,
	peer : $client->inputPeerEmpty(),
	story_id : 42,
	reaction : $client->reactionEmpty(),
);
```