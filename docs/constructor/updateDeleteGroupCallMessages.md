# updateDeleteGroupCallMessages

**Description** : *Indicates that messages were deleted from the in\-call message overlay &raquo; of a video chat/livestream or live story, including in RTMP mode*

**Layer** : 229

```tl
updateDeleteGroupCallMessages#3e85e92c call:InputGroupCall messages:Vector<int> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Video chat/livestream or live story from which the messages were deleted |
| <mark>messages</mark> | [`Vector<int>`](type/int) | IDs of the deleted in-call messages |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDeleteGroupCallMessages(
	call : $client->inputGroupCall(
		id : 6659464446505275752,
		access_hash : 6383911056479017872,
	),
	messages : array(59),
);
```