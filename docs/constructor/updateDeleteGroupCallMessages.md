# updateDeleteGroupCallMessages

**Description** : *Indicates that messages were deleted from the in\-call message overlay &raquo; of a video chat/livestream or live story, including in RTMP mode*

**Layer** : 233

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
		id : 4679660915672615841,
		access_hash : -1563596366610859532,
	),
	messages : array(94),
);
```