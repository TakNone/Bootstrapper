# channelAdminLogEventActionDiscardGroupCall

**Description** : *A group call was terminated*

**Layer** : 227

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
		id : -8533978262202052908,
		access_hash : 1215479358609552938,
	),
);
```