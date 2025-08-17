# channels.restrictSponsoredMessages

**Description** : *Disable ads on the specified channel, for all users*

**Layer** : 211

```tl
channels.restrictSponsoredMessages#9ae91519 channel:InputChannel restricted:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The channel |
| <mark>restricted</mark> | [`Bool`](type/Bool) | Whether to disable or re-enable ads |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$updates = $client->channels->restrictSponsoredMessages(
	channel : $client->inputChannelEmpty(),
	restricted : $client->boolFalse(),
);
```