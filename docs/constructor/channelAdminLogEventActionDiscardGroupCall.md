# channelAdminLogEventActionDiscardGroupCall

**Description** : *A group call was terminated*

**Layer** : 216

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
		id : -766344547927373969,
		access_hash : -5949406752398978788,
	),
);
```