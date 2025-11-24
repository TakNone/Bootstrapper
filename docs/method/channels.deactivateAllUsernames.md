# channels.deactivateAllUsernames

**Description** : *Disable all purchased usernames of a supergroup or channel*

**Layer** : 218

```tl
channels.deactivateAllUsernames#a245dd3 channel:InputChannel = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup or channel |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$bool = $client->channels->deactivateAllUsernames(
	channel : $client->get_input_channel(channel : '@LiveProto'),
);
```