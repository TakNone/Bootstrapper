# messages.transcribeAudioFile

**Layer** : 233

```tl
messages.transcribeAudioFile#72d2ef7 file:InputFile = messages.TranscribedAudio;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>file</mark> | [`InputFile`](type/InputFile) | NOTHING |

---

## Result

[messages.TranscribedAudio](type/messages.TranscribedAudio)

---

## Example

```php
$messagesTranscribedAudio = $client->messages->transcribeAudioFile(
	file : $client->upload_file(path : 'file.png'),
);
```