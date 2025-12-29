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
		id : 5290791547918392201,
		access_hash : 1680907502362450399,
	),
);
```