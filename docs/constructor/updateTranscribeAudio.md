# updateTranscribeAudio

**Layer** : 218

```tl
updateTranscribeAudio#88617090 flags:# final:flags.0?true transcription_id:long text:string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **final** | [`flags.0?true`](type/true) | NOTHING |
| <mark>transcription_id</mark> | [`long`](type/long) | NOTHING |
| <mark>text</mark> | [`string`](type/string) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateTranscribeAudio(
	final : true,
	transcription_id : -4253288110652096405,
	text : '4RZvV3lwfc0tb6Xs',
);
```