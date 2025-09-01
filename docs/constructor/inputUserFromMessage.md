# inputUserFromMessage

**Description** : *Defines a min user that was seen in a certain message of a certain chat*

**Layer** : 214

```tl
inputUserFromMessage#1da448e2 peer:InputPeer msg_id:int user_id:long = InputUser;
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

[InputUser](type/InputUser)

---

## Example

```php
$inputUser = $client->inputUserFromMessage(
	peer : $client->inputPeerEmpty(),
	msg_id : 78,
	user_id : -707315717932468634,
);
```