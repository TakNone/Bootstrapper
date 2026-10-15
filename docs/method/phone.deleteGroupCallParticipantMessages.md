# phone.deleteGroupCallParticipantMessages

**Description** : *As an admin, delete all messages from a specific participant in the in\-call message overlay &raquo; of a video chat/livestream or live story, including in RTMP mode*

**Layer** : 229

```tl
phone.deleteGroupCallParticipantMessages#1dbfeca0 flags:# report_spam:flags.0?true call:InputGroupCall participant:InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **report_spam** | [`flags.0?true`](type/true) | Also report the participant's messages as spam |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Video chat/livestream or live story containing the messages |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | The participant whose messages should be deleted |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->deleteGroupCallParticipantMessages(
	report_spam : true,
	call : $client->inputGroupCall(
		id : 7794710672491028251,
		access_hash : -3837507783551348677,
	),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```