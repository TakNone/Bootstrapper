# channels.updatePaidMessagesPrice

**Layer** : 211

```tl
channels.updatePaidMessagesPrice#4b12327b flags:# broadcast_messages_allowed:flags.0?true channel:InputChannel send_paid_messages_stars:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **broadcast_messages_allowed** | [`flags.0?true`](type/true) | NOTHING |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | NOTHING |
| <mark>send_paid_messages_stars</mark> | [`long`](type/long) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->channels->updatePaidMessagesPrice(
	broadcast_messages_allowed : true,
	channel : $client->inputChannelEmpty(),
	send_paid_messages_stars : 1010123463942223809,
);
```