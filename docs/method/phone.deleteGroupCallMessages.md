# phone.deleteGroupCallMessages

**Description** : *Delete specific messages from the in\-call message overlay &raquo; of a video chat/livestream or live story, including in RTMP mode*

**Layer** : 229

```tl
phone.deleteGroupCallMessages#f64f54f7 flags:# report_spam:flags.0?true call:InputGroupCall messages:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **report_spam** | [`flags.0?true`](type/true) | When moderating another participant's messages, also report them as spam |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Video chat/livestream or live story containing the messages |
| <mark>messages</mark> | [`Vector<int>`](type/int) | IDs of the messages to delete |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->deleteGroupCallMessages(
	report_spam : true,
	call : $client->inputGroupCall(
		id : 4256124494194563732,
		access_hash : 915853122669651271,
	),
	messages : array(16),
);
```