# channels.getMessageAuthor

**Description** : *Can only be invoked by non\-bot admins of a monoforum &raquo;, obtains the original sender of a message sent by other monoforum admins to the monoforum, on behalf of the channel associated to the monoforum*

**Layer** : 218

```tl
channels.getMessageAuthor#ece2a0e6 channel:InputChannel id:int = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | ID of the monoforum |
| <mark>id</mark> | [`int`](type/int) | ID of the message sent by a monoforum admin |

---

## Result

[User](type/User)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$user = $client->channels->getMessageAuthor(
	channel : $client->get_input_channel(channel : '@LiveProto'),
	id : 43,
);
```