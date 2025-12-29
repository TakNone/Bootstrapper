# updateTranscribedAudio

**Description** : *A pending voice message transcription &raquo; initiated with messages\.transcribeAudio was updated*

**Layer** : 218

```tl
updateTranscribedAudio#84cd5a flags:# pending:flags.0?true peer:Peer msg_id:int transcription_id:long text:string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : 4317653467021227952,
	),
	msg_id : 29,
	transcription_id : 5616816756572943449,
	text : 'GOlUWaEtV17Hsgbx',
);
```