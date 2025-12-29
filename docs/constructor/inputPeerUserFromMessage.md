# inputPeerUserFromMessage

**Description** : *Defines a min user that was seen in a certain message of a certain chat*

**Layer** : 218

```tl
inputPeerUserFromMessage#a87b0a1c peer:InputPeer msg_id:int user_id:long = InputPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat where the user was seen |
| <mark>msg_id</mark> | [`int`](type/int) | The message ID |
| <mark>user_id</mark> | [`long`](type/long) | The identifier of the user that was seen |

---

## Type

[InputPeer](type/InputPeer)

---

## Example

```php
$inputPeer = $client->inputPeerUserFromMessage(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 87,
	user_id : -6377214457999907621,
);
```