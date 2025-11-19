# messages.transcribeAudio

**Description** : *Transcribe voice message*

**Layer** : 218

```tl
messages.transcribeAudio#269e9a49 peer:InputPeer msg_id:int = messages.TranscribedAudio;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer ID where the voice message was sent |
| <mark>msg_id</mark> | [`int`](type/int) | Voice message ID |

---

## Result

[messages.TranscribedAudio](type/messages.TranscribedAudio)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **MSG_VOICE_MISSING** | `400` | The specified message is not a voice message |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |
| **TRANSCRIPTION_FAILED** | `400` | Audio transcription failed |

---

## Example

```php
$messagesTranscribedAudio = $client->messages->transcribeAudio(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 98,
);
```