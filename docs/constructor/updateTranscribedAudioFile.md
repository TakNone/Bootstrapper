# updateTranscribedAudioFile

**Layer** : 233

```tl
updateTranscribedAudioFile#734c2e7b flags:# pending:flags.0?true transcription_id:long text:string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **pending** | [`flags.0?true`](type/true) | NOTHING |
| <mark>transcription_id</mark> | [`long`](type/long) | NOTHING |
| <mark>text</mark> | [`string`](type/string) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateTranscribedAudioFile(
	pending : true,
	transcription_id : 3290659680306290466,
	text : 'sHMryXKh2iB7oRZW',
);
```