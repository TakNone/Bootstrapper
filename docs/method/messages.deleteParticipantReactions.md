# messages.deleteParticipantReactions

**Description** : *As an admin, remove all of a specific participant&#039;s reactions from every message in a group or channel*

**Layer** : 229

```tl
messages.deleteParticipantReactions#a0b80cf8 peer:InputPeer participant:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The group or channel where the participant's reactions should be removed |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | The participant whose reactions should be removed |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->deleteParticipantReactions(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```