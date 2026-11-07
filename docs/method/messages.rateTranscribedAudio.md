# messages.rateTranscribedAudio

**Description** : *Rate transcribed voice message*

**Layer** : 233

```tl
messages.rateTranscribedAudio#7f1d072f peer:InputPeer msg_id:int transcription_id:long good:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the voice message was sent |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |
| <mark>transcription_id</mark> | [`long`](type/long) | Transcription ID |
| <mark>good</mark> | [`Bool`](type/Bool) | Whether the transcription was correct |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->rateTranscribedAudio(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 26,
	transcription_id : -3471651366172076194,
	good : false,
);
```