# messages.deleteParticipantReaction

**Layer** : 227

```tl
messages.deleteParticipantReaction#e3b7f82c peer:InputPeer msg_id:int participant:InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->deleteParticipantReaction(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 98,
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```