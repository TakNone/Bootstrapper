# channelAdminLogEventActionStartGroupCall

**Description** : *A group call was started*

**Layer** : 214

```tl
channelAdminLogEventActionStartGroupCall#23209745 call:InputGroupCall = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionStartGroupCall(
	call : $client->inputGroupCall(
		id : -3482305619313803627,
		access_hash : -3351205479272875328,
	),
);
```