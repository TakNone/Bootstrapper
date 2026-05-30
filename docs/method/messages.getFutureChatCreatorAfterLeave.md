# messages.getFutureChatCreatorAfterLeave

**Layer** : 225

```tl
messages.getFutureChatCreatorAfterLeave#3b7d0ea6 peer:InputPeer = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[User](type/User)

---

## Example

```php
$user = $client->messages->getFutureChatCreatorAfterLeave(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```