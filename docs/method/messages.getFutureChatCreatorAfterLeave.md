# messages.getFutureChatCreatorAfterLeave

**Description** : *Group/channel owners only: returns the ID of the user that will become the new owner of the group if we decide to leave the group, see here &raquo; for more info on the full flow*

**Layer** : 233

```tl
messages.getFutureChatCreatorAfterLeave#3b7d0ea6 peer:InputPeer = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The basic group/supergroup/channel we're about to leave |

---

## Result

[User](type/User)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_ID_INVALID** | `400` | The specified supergroup ID is invalid |

---

## Example

```php
$user = $client->messages->getFutureChatCreatorAfterLeave(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```