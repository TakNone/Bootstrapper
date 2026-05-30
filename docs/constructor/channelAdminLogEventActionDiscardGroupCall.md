# channelAdminLogEventActionDiscardGroupCall

**Description** : *A group call was terminated*

**Layer** : 222

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
		id : -4336922072083907696,
		access_hash : -3140733381573345999,
	),
);
```