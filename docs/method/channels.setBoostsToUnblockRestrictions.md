# channels.setBoostsToUnblockRestrictions

**Description** : *Admins with ban\_users admin rights &raquo; may allow users that apply a certain number of booosts &raquo; to the group to bypass slow mode &raquo; and other &raquo; supergroup restrictions, see here &raquo; for more info*

**Layer** : 216

```tl
channels.setBoostsToUnblockRestrictions#ad399cee channel:InputChannel boosts:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The supergroup |
| <mark>boosts</mark> | [`int`](type/int) | The number of required boosts (1-8, 0 to disable) |

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
$updates = $client->channels->setBoostsToUnblockRestrictions(
	channel : $client->inputChannelEmpty(),
	boosts : 17,
);
```