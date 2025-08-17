# inputPeerUserFromMessage

**Description** : *Defines a min user that was seen in a certain message of a certain chat*

**Layer** : 211

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
	peer : $client->inputPeerEmpty(),
	msg_id : 89,
	user_id : -2675232327116213535,
);
```