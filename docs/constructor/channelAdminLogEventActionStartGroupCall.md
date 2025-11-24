# channelAdminLogEventActionStartGroupCall

**Description** : *A group call was started*

**Layer** : 218

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
		id : 6652913768542678764,
		access_hash : 3696851966910556202,
	),
);
```