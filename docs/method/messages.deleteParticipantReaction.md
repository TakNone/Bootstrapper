# messages.deleteParticipantReaction

**Description** : *As an admin, remove all of a specific participant&#039;s reactions from a single message*

**Layer** : 233

```tl
messages.deleteParticipantReaction#e3b7f82c peer:InputPeer msg_id:int participant:InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The group or channel where the message is located |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the message whose reactions should be removed |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | The participant whose reactions should be removed from the message |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->deleteParticipantReaction(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 13,
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```