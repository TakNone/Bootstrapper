# inputPeerChannelFromMessage

**Description** : *Defines a min channel that was seen in a certain message of a certain chat*

**Layer** : 216

```tl
inputPeerChannelFromMessage#bd2a0840 peer:InputPeer msg_id:int channel_id:long = InputPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat where the channel's message was seen |
| <mark>msg_id</mark> | [`int`](type/int) | The message ID |
| <mark>channel_id</mark> | [`long`](type/long) | The identifier of the channel that was seen |

---

## Type

[InputPeer](type/InputPeer)

---

## Example

```php
$inputPeer = $client->inputPeerChannelFromMessage(
	peer : $client->inputPeerEmpty(),
	msg_id : 71,
	channel_id : 5197357945858703899,
);
```