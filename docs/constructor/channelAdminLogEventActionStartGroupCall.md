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
		id : -7254718668126002096,
		access_hash : 7095029551353700141,
	),
);
```