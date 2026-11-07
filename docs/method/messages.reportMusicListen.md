# messages.reportMusicListen

**Description** : *Report the listening duration of a music track \(audio document without the voice flag\), see here &raquo; for more info on the full flow*

**Layer** : 233

```tl
messages.reportMusicListen#ddbcd819 id:InputDocument listened_duration:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | The InputDocument of the listened song |
| <mark>listened_duration</mark> | [`int`](type/int) | Accumulated playing time in whole seconds |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->reportMusicListen(
	id : $client->inputDocumentEmpty(),
	listened_duration : 94,
);
```