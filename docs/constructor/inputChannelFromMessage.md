# inputChannelFromMessage

**Description** : *Defines a min channel that was seen in a certain message of a certain chat*

**Layer** : 218

```tl
inputChannelFromMessage#5b934f9d peer:InputPeer msg_id:int channel_id:long = InputChannel;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat where the channel was seen |
| <mark>msg_id</mark> | [`int`](type/int) | The message ID in the chat where the channel was seen |
| <mark>channel_id</mark> | [`long`](type/long) | The channel ID |

---

## Type

[InputChannel](type/InputChannel)

---

## Example

```php
$inputChannel = $client->inputChannelFromMessage(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 37,
	channel_id : -7304221997776311598,
);
```