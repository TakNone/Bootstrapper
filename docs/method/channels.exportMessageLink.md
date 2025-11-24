# channels.exportMessageLink

**Description** : *Get link and embed info of a message in a channel/supergroup*

**Layer** : 218

```tl
channels.exportMessageLink#e63fadeb flags:# grouped:flags.0?true thread:flags.1?true channel:InputChannel id:int = ExportedMessageLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **grouped** | [`flags.0?true`](type/true) | Whether to include other grouped media (for albums) |
| **thread** | [`flags.1?true`](type/true) | Whether to also include a thread ID, if available, inside of the link |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel |
| <mark>id</mark> | [`int`](type/int) | Message ID |

---

## Result

[ExportedMessageLink](type/ExportedMessageLink)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$exportedMessageLink = $client->channels->exportMessageLink(
	grouped : true,
	thread : true,
	channel : $client->get_input_channel(channel : '@LiveProto'),
	id : 78,
);
```