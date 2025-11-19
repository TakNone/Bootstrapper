# messages.transcribedAudio

**Description** : *Transcribed text from a voice message &raquo;*

**Layer** : 218

```tl
messages.transcribedAudio#cfb9d957 flags:# pending:flags.0?true transcription_id:long text:string trial_remains_num:flags.1?int trial_remains_until_date:flags.1?int = messages.TranscribedAudio;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pending** | [`flags.0?true`](type/true) | Whether the transcription is partial because audio transcription is still in progress, if set the user may receive further updateTranscribedAudio updates with the updated transcription |
| <mark>transcription_id</mark> | [`long`](type/long) | Transcription ID |
| <mark>text</mark> | [`string`](type/string) | Transcripted text |
| **trial_remains_num** | [`flags.1?int`](type/int) | For non-Premium users, this flag will be set, indicating the remaining transcriptions in the free trial period |
| **trial_remains_until_date** | [`flags.1?int`](type/int) | For non-Premium users, this flag will be set, indicating the date when the trial_remains_num counter will be reset to the maximum value of transcribe_audio_trial_weekly_number |

---

## Type

[messages.TranscribedAudio](type/messages.TranscribedAudio)

---

## Example

```php
$messagesTranscribedAudio = $client->messages->transcribedAudio(
	pending : true,
	transcription_id : -8435212563522075226,
	text : 'HuQrYUGxO6ZTaX0n',
	trial_remains_num : 1,
	trial_remains_until_date : 17,
);
```