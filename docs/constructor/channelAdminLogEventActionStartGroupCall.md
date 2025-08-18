# channelAdminLogEventActionStartGroupCall

**Description** : *A group call was started*

**Layer** : 211

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
		id : 840159458406993149,
		access_hash : 117628876298103456,
	),
);
```