# channelAdminLogEventActionDiscardGroupCall

**Description** : *A group call was terminated*

**Layer** : 211

```tl
channelAdminLogEventActionDiscardGroupCall#db9f9140 call:InputGroupCall = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call that was terminated |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionDiscardGroupCall(
	call : $client->inputGroupCall(
		id : -876152662542276648,
		access_hash : 7852031195012789641,
	),
);
```