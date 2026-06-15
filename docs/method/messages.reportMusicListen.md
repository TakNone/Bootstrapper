# messages.reportMusicListen

**Layer** : 227

```tl
messages.reportMusicListen#ddbcd819 id:InputDocument listened_duration:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | NOTHING |
| <mark>listened_duration</mark> | [`int`](type/int) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->reportMusicListen(
	id : $client->inputDocumentEmpty(),
	listened_duration : 69,
);
```