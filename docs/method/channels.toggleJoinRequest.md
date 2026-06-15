# channels.toggleJoinRequest

**Description** : *Set whether all users should request admin approval to join the group &raquo;*

**Layer** : 227

```tl
channels.toggleJoinRequest#ecc2618 flags:# apply_to_invites:flags.1?true channel:InputChannel enabled:Bool guard_bot:flags.0?InputUser = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **apply_to_invites** | [`flags.1?true`](type/true) | NOTHING |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Group |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Toggle |
| **guard_bot** | [`flags.0?InputUser`](type/InputUser) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **CHAT_PUBLIC_REQUIRED** | `400` | You can only enable join requests in public groups |

---

## Example

```php
$updates = $client->channels->toggleJoinRequest(
	apply_to_invites : true,
	channel : $client->get_input_channel(channel : '@LiveProto'),
	enabled : false,
	guard_bot : $client->get_input_user(user : '@TakNone'),
);
```