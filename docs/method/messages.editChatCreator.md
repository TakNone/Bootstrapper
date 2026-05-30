# messages.editChatCreator

**Layer** : 225

```tl
messages.editChatCreator#f743b857 peer:InputPeer user_id:InputUser password:InputCheckPasswordSRP = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>password</mark> | [`InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->editChatCreator(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	user_id : $client->get_input_user(user : '@TakNone'),
	password : $client->inputCheckPasswordEmpty(),
);
```