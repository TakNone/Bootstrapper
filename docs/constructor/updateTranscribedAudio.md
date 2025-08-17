# updateTranscribedAudio

**Description** : *A pending voice message transcription » initiated with messages.transcribeAudio was updated*

**Layer** : 211

```tl
updateTranscribedAudio#84cd5a flags:# pending:flags.0?true peer:Peer msg_id:int transcription_id:long text:string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pending** | [`flags.0?true`](type/true) | Whether this transcription is still pending and further updateTranscribedAudio about it will be sent in the future |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer of the transcribed message |
| <mark>msg_id</mark> | [`int`](type/int) | Transcribed message ID |
| <mark>transcription_id</mark> | [`long`](type/long) | Transcription ID |
| <mark>text</mark> | [`string`](type/string) | Transcribed text |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateTranscribedAudio(
	pending : true,
	peer : $client->peerUser(
		user_id : -8235833437852896180,
	),
	msg_id : 56,
	transcription_id : 8683318367989114861,
	text : 'VK2ePqLX1xtmzZwh',
);
```