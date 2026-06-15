# messages.toggleNoForwards

**Description** : *Enable or disable content protection on a channel or chat*

**Layer** : 227

```tl
messages.toggleNoForwards#b2081a35 flags:# peer:InputPeer enabled:Bool request_msg_id:flags.0?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat or channel |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Enable or disable content protection |
| **request_msg_id** | [`flags.0?int`](type/int) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->toggleNoForwards(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	enabled : true,
	request_msg_id : 96,
);
```